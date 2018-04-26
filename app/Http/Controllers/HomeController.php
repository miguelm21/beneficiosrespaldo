<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
use Redirect;
use Mail;
use Hash;
use App\User;
use App\User_Role;
use App\Roles;
use App\Cms_SocialNetworks;
use App\Cms_Slider;
use App\News;
use App\Categories;
use App\Benefits;

class HomeController extends Controller
{
    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $news = News::orderBy('date', 'desc')->take(4)->orderBy('id', 'desc')->get();
        $fslider = Cms_Slider::orderBy('id', 'asc')->first();
        if($fslider)
        {
            $slider = Cms_Slider::where('id', '!=', $fslider->id)->get();
        }
        else
        {
            $slider = Cms_Slider::get();
        }
        $categories = categories::get();
        $benefits = Benefits::get();

        return view('pages.index', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'news' => $news, 'fslider' => $fslider, 'slider' => $slider, 'categories' => $categories, 'benefits' => $benefits]);
    }

    public function login()
    {
        if(Auth::id())
        {
            $user = User::find(Auth::id());
            $roleu = User_Role::where('user_id', '=', Auth::id())->first();
            $role = Roles::find($roleu->role_id);
            Session::put('role', $role->id);
            
            if($role->id == 1)
            {
                return redirect('dashboard-admin');
            }
            else if($role->id == 2)
            {
                return redirect('/');
            }
        }
        else
        {
            $facebook = Cms_SocialNetworks::find(1);
            $googleplus = Cms_SocialNetworks::find(2);
            $twitter = Cms_SocialNetworks::find(3);
            $instagram = Cms_SocialNetworks::find(4);
            $categories = categories::get();

            return view('pages.login.login', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
        }
    }

    public function auth(Request $request)
    {
        $messages = [
            'regex'    => ':attribute debe contener al menos 1 Letra, 1 Numero y 1 Simbolo Especial'
        ];

        $validator =  Validator::make($request->all(),[ 
            'email' => 'required|email',
            'password' => 'required|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'
        ]);

        $validator->setAttributeNames([
            'email' => 'Email',
            'password' => 'Contraseña'
        ]);

        $user = User::where('email','=',$request->email)->first();

        if($user)
        {
            if(Hash::check($request->password, $user->password)) {

                Auth::login($user);
                $roleu = User_Role::where('user_id', '=', Auth::id())->first();
                $role = Roles::find($roleu->role_id);
                Session::put('role', $role->id);

                if($roleu->role_id == 1)
                {
                    return redirect('/dashboard-admin');
                }
                else if($roleu->role_id == 2)
                {
                    return redirect('/');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Contraseña incorrecta');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Usuario incorrecto');
        }
        
    }

    public function editprofile($id)
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $user = User::findOrFail($id);

        return view('pages.profile-screen', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'user' => $user]);
    }

    public function editpassword()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $user = User::findOrFail(Auth::id());

        return view('pages.password-screen', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'user' => $user]);
    }

    public function password(Request $request, $id)
    {
        $messages = [
            'regex'    => ':attribute debe contener al menos 1 Letra, 1 Numero y 1 Simbolo Especial'
        ];

        $validator =  Validator::make($request->all(),[ 
            'old_password' => 'required|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'password' => 'required|confirmed|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'password_confirmation' => 'required|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/'

        ]);

        $validator->setAttributeNames([
            'old_password' => 'Contraseña Actual',
            'password' => 'Contraseña',
            'password_confirmation' => 'Confirmar Contraseña'
        ]);

        $user = User::find($id);

        $password = bcrypt($request->password);

        if(Hash::check($request->old_password, $user->password))
        {
            $user->password = bcrypt($request->password);
            $user->save();
            Auth::logout();
            Session::flush();
            return Redirect::to('/login')->with('message', 'Su contraseña se cambio correctamente');
        }
        else
        {
            return Redirect::back()->with('err', 'La contraseña actual es incorrecta');
        }
    }

    public function signup()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.login.register', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function register(Request $request)
    {
        $messages = [
            'regex'    => ':attribute debe contener al menos 1 Letra, 1 Numero y 1 Simbolo Especial',
            'agree.required' => 'Debes estar de acuerdo con los terminos y servicios',
        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'password_confirmation' => 'required|min:6|max:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'agree' => 'required',
        ], $messages);

        $validator->setAttributeNames([
            'name' => 'Nombre',
            'email' => 'Email',
            'password' => 'Contraseña',
            'password_confirmation' => 'Confirmar Contraseña',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $role = new User_Role;
        $role->user_id = $user->id;
        $role->role_id = 2;
        $role->save();

        return redirect('/login')->with('message', 'Usuario registrado con exito');
    }

    public function closetbenefits()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = Categories::get();
        $benefs = Benefits::join('categories', 'benefits.category_id', '=', 'categories.id')->select('benefits.id as id', 'benefits.name as name', 'benefits.description as description', 'benefits.latitude as latitude', 'benefits.longitude as longitude', 'benefits.image as image', 'benefits.category_id as category_id', 'categories.iconmap as iconmap')->get();
        $benefits = Benefits::get();

        /*$a = [];
        $i = 0;

        foreach($bene as $b)
        {
            $d = $this->getDistance(-32.889459, -68.845839, $b->latitude, $b->longitude);
            if($d <= $km)
            {
               $a[$i] = $b; 
            }
        }

        $benefits = collect($a);*/

        return view('pages.closet-benefits', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'benefits' => $benefits, 'benefs' => $benefs]);
    }

    public function dashboardadmin()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.dashboard-admin', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function detailsbenefits()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.details-benefits', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function listbenefitsfranchise()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.list-benefits-franchise', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function listbenefits()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.list-benefits', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function profilescreen()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('pages.profile-screen', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    public function blog()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $news = News::orderBy('date', 'desc')->paginate(10);

        return view('pages.blog', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'news' => $news]);
    }

    public function article($id)
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $new = News::findOrFail($id);

        return view('pages.article', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'new' => $new]);
    }

    public function category($id)
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $category = Categories::findOrFail($id);
        $benefits = Benefits::where('category_id', '=', $id)->paginate(10);

        return view('pages.category', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'category' => $category, 'benefits' => $benefits]);
    }

    public function benefit($id)
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $benefit = Benefits::join('categories', 'benefits.category_id', '=', 'categories.id')->select('benefits.id as id', 'benefits.name as name', 'benefits.description as description', 'benefits.latitude as latitude', 'benefits.longitude as longitude', 'benefits.image as image', 'benefits.category_id as category_id', 'categories.iconmap')->where('benefits.id', '=', $id)->first();

        return view('pages.benefit', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'benefit' => $benefit]);
    }

    public function getDistance($lat1, $long1, $lat2, $long2)
    {
        //Distancia en kilometros en 1 grado distancia.
        //Distancia en millas nauticas en 1 grado distancia: $mn = 60.098;
        //Distancia en millas en 1 grado distancia: 69.174;
        //Solo aplicable a la tierra, es decir es una constante que cambiaria en la luna, marte... etc.
        $km = 111.302;
        
        //1 Grado = 0.01745329 Radianes    
        $degtorad = 0.01745329;
        
        //1 Radian = 57.29577951 Grados
        $radtodeg = 57.29577951; 
        //La formula que calcula la distancia en grados en una esfera, llamada formula de Harvestine. Para mas informacion hay que mirar en Wikipedia
        //http://es.wikipedia.org/wiki/F%C3%B3rmula_del_Haversine
        $dlong = ($long1 - $long2); 
        $dvalue = (sin($lat1 * $degtorad) * sin($lat2 * $degtorad)) + (cos($lat1 * $degtorad) * cos($lat2 * $degtorad) * cos($dlong * $degtorad)); 
        $dd = acos($dvalue) * $radtodeg; 
        return round(($dd * $km), 2);
    }
}
