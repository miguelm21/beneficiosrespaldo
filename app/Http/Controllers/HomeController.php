<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Session;
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

        $i = 0;
        $a = [];
        $j = 0;

        foreach($categories as $c)
        {
            $benefits = Benefits::select('id', 'name', 'description', 'category_id')->where('category_id', '=', $c->id)->take(4)->orderBy('id', 'desc')->get();
            $a[$c->id] = $benefits;
        }

        $benefits = $a;

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
        $categories = categories::get();

        $config = array();
        $config['center'] = '-32.889459, -68.845839';
        $config['onboundschanged'] = 'if (!centreGot) {
                var mapCentre = map.getCenter();
                marker_0.setOptions({
                    position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
                });
            }
            centreGot = true;';

        app('map')->initialize($config);

        // set up the marker ready for positioning
        // once we know the users location
        $marker = array();
        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.899569, -68.846949';
        $marker['icon'] = 'https://icon-icons.com/icons2/1151/PNG/32/1486505264-food-fork-kitchen-knife-meanns-restaurant_81404.png';;
        $marker['infowindow_content'] = 'Gastronomia 1';
        
        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.879569, -68.816949';
        $marker['icon'] = 'https://icon-icons.com/icons2/1149/PNG/32/1486504374-clip-film-movie-multimedia-play-short-video_81330.png';;
        $marker['infowindow_content'] = 'Entretenimiento 1';
        
        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.909569, -68.876949';
        $marker['icon'] = 'https://icon-icons.com/icons2/1146/PNG/32/1486485566-airliner-rplane-flight-launch-rbus-plane_81166.png';;
        $marker['infowindow_content'] = 'Turismo 1';

        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.879569, -68.876949';
        $marker['icon'] = 'https://icon-icons.com/icons2/197/PNG/32/scissors_24029.png';;
        $marker['infowindow_content'] = 'Moda 1';
        
        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.909569, -68.816949';
        $marker['icon'] = 'https://icon-icons.com/icons2/1130/PNG/32/womaninacircle_80046.png';;
        $marker['infowindow_content'] = 'Belleza 1';
        
        app('map')->add_marker($marker);

        $marker = array();
        $marker['position'] = '-32.869569, -68.846949';
        $marker['icon'] = 'https://icon-icons.com/icons2/1151/PNG/32/1486505259-estate-home-house-building-property-real_81428.png';;
        $marker['infowindow_content'] = 'Deco y Hogar 1';
        
        app('map')->add_marker($marker);

        $map = app('map')->create_map();
        return view('pages.closet-benefits', ['map' => $map, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
}
