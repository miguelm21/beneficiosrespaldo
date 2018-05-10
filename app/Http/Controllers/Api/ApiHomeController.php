<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use JWTAuth;
use Validator;
use App\Categories;
use App\Benefits;
use App\News;
use App\User;
use App\UserBenefits;

class ApiHomeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function map()
    {
        $categories = Categories::get();
        $date = date('Y-m-d');
        $benefs = Benefits::join('categories', 'benefits.category_id', '=', 'categories.id')->select('benefits.id as id', 'benefits.name as name', 'benefits.description as description', 'benefits.latitude as latitude', 'benefits.longitude as longitude', 'benefits.image as image', 'benefits.category_id as category_id', 'categories.iconmap as iconmap', 'benefits.datestart as datestart', 'benefits.dateend as dateend')->where('benefits.dateend', '>', $date)->get();
        $benefits = Benefits::where('dateend', '>', $date)->get();
        $news = News::join('users', 'news.user_id', '=', 'users.id')->select('news.id as id', 'news.title as title', 'news.text as text', 'news.date as date', 'news.image as image', 'news.mime as mime', 'news.size as size', 'users.name as user')->get();

        $a = [];
        $b = [];
        $i = 0;
        $j = 0;

        foreach($benefits as $be)
        {
            $ub = UserBenefits::where('benefit_id', '=', $be->id)->where('user_id', '=', Auth::id())->count();
            if($ub == 1)
            {
                $a[$i]['id'] = $be->id;
                $a[$i]['name'] = $be->name;
                $a[$i]['description'] = $be->description;
                $a[$i]['datestart'] = $be->datestart;
                $a[$i]['dateend'] = $be->dateend;
                $a[$i]['latitude'] = $be->latitude;
                $a[$i]['longitude'] = $be->longitude;
                $a[$i]['image'] = $be->image;
                $a[$i]['mime'] = $be->mime;
                $a[$i]['size'] = $be->size;
                $a[$i]['percent'] = $be->percent;
                $a[$i]['keywords'] = $be->keywords;
                $a[$i]['search'] = $be->search;
                $a[$i]['bookmark'] = 1;
                $a[$i]['category_id'] = $be->category_id;
                $i++;
            }
            elseif($ub == 0)
            {
                $a[$i]['id'] = $be->id;
                $a[$i]['name'] = $be->name;
                $a[$i]['description'] = $be->description;
                $a[$i]['datestart'] = $be->datestart;
                $a[$i]['dateend'] = $be->dateend;
                $a[$i]['latitude'] = $be->latitude;
                $a[$i]['longitude'] = $be->longitude;
                $a[$i]['image'] = $be->image;
                $a[$i]['mime'] = $be->mime;
                $a[$i]['size'] = $be->size;
                $a[$i]['percent'] = $be->percent;
                $a[$i]['keywords'] = $be->keywords;
                $a[$i]['search'] = $be->search;
                $a[$i]['bookmark'] = 0;
                $a[$i]['category_id'] = $be->category_id;
                $i++;
            }
        }

        foreach($benefs as $ben)
        {
            $ub = UserBenefits::where('benefit_id', '=', $ben->id)->where('user_id', '=', Auth::id())->count();
            if($ub == 1)
            {
                $b[$j]['id'] = $ben->id;
                $b[$j]['name'] = $ben->name;
                $b[$j]['description'] = $ben->description;
                $b[$j]['datestart'] = $ben->datestart;
                $b[$j]['dateend'] = $ben->dateend;
                $b[$j]['latitude'] = $ben->latitude;
                $b[$j]['longitude'] = $ben->longitude;
                $b[$j]['image'] = $ben->image;
                $b[$j]['mime'] = $ben->mime;
                $b[$j]['size'] = $ben->size;
                $b[$j]['percent'] = $ben->percent;
                $b[$j]['keywords'] = $ben->keywords;
                $b[$j]['search'] = $ben->search;
                $b[$j]['bookmark'] = 1;
                $b[$j]['category_id'] = $ben->category_id;
                $i++;
            }
            elseif($ub == 0)
            {
                $b[$j]['id'] = $ben->id;
                $b[$j]['name'] = $ben->name;
                $b[$j]['description'] = $ben->description;
                $b[$j]['datestart'] = $ben->datestart;
                $b[$j]['dateend'] = $ben->dateend;
                $b[$j]['latitude'] = $ben->latitude;
                $b[$j]['longitude'] = $ben->longitude;
                $b[$j]['image'] = $ben->image;
                $b[$j]['mime'] = $ben->mime;
                $b[$j]['size'] = $ben->size;
                $b[$j]['percent'] = $ben->percent;
                $b[$j]['keywords'] = $ben->keywords;
                $b[$j]['search'] = $ben->search;
                $b[$j]['bookmark'] = 0;
                $b[$j]['category_id'] = $ben->category_id;
                $i++;
            }
        }

        $benefits = collect($a);
        $benefs = collect($b);

        return response()->json(['categories' => $categories, 'benefs' => $benefs, 'benefits' => $benefits, 'news' => $news], 200);    
    }

    public function category($id)
    {
        $category = Categories::findOrFail($id);

        try
        {
            if(!$category)
            {
                return response()->json(['message' => 'No se encontro ninguna categoria'], 401);
            }
        }
        catch(Exception $e)
        {
            return response()->json(['message' => 'Ocurrio un error'], 500);
        }

        $date = date('Y-m-d');
        $benefits = Benefits::where('dateend', '>', $date)->get();

        $a = [];
        $i = 0;

        foreach($benefits as $be)
        {
            $ub = UserBenefits::where('benefit_id', '=', $be->id)->where('user_id', '=', Auth::id())->count();
            if($ub == 1)
            {
                $a[$i]['id'] = $be->id;
                $a[$i]['name'] = $be->name;
                $a[$i]['description'] = $be->description;
                $a[$i]['datestart'] = $be->datestart;
                $a[$i]['dateend'] = $be->dateend;
                $a[$i]['latitude'] = $be->latitude;
                $a[$i]['longitude'] = $be->longitude;
                $a[$i]['image'] = $be->image;
                $a[$i]['mime'] = $be->mime;
                $a[$i]['size'] = $be->size;
                $a[$i]['percent'] = $be->percent;
                $a[$i]['keywords'] = $be->keywords;
                $a[$i]['search'] = $be->search;
                $a[$i]['bookmark'] = 1;
                $a[$i]['category_id'] = $be->category_id;
                $i++;
            }
            elseif($ub == 0)
            {
                $a[$i]['id'] = $be->id;
                $a[$i]['name'] = $be->name;
                $a[$i]['description'] = $be->description;
                $a[$i]['datestart'] = $be->datestart;
                $a[$i]['dateend'] = $be->dateend;
                $a[$i]['latitude'] = $be->latitude;
                $a[$i]['longitude'] = $be->longitude;
                $a[$i]['image'] = $be->image;
                $a[$i]['mime'] = $be->mime;
                $a[$i]['size'] = $be->size;
                $a[$i]['percent'] = $be->percent;
                $a[$i]['keywords'] = $be->keywords;
                $a[$i]['search'] = $be->search;
                $a[$i]['bookmark'] = 0;
                $a[$i]['category_id'] = $be->category_id;
                $i++;
            }
        }
        $benefits = collect($a);
        $categories = Categories::get();

        return response()->json(['category' => $category, 'benefits' => $benefits, 'categories' => $categories], 200);
    }

    public function new($id)
    {
        $new = News::join('users', 'news.user_id', '=', 'users.id')->select('news.id as id', 'news.title as title', 'news.text as text', 'news.date as date', 'news.image as image', 'news.mime as mime', 'news.size as size', 'users.name as user')->where('news.id', '=', $id)->first();

        try
        {
            if(!$new)
            {
                return response()->json(['message' => 'No se encontro ninguna noticia'], 401);
            }
        }
        catch(Exception $e)
        {
            return response()->json(['message' => 'Ocurrio un error'], 500);
        }

        return response()->json(['new' => $new], 200);
    }

    public function benefit($id)
    {
        $date = date('Y-m-d');
        $benefit = Benefits::join('categories', 'benefits.category_id', '=', 'categories.id')->select('benefits.id as id', 'benefits.name as name', 'benefits.description as description', 'benefits.datestart as datestart', 'benefits.dateend as dateend', 'benefits.latitude as latitude', 'benefits.longitude as longitude', 'benefits.image as image', 'benefits.percent as percent', 'benefits.keywords as keywords', 'categories.name as category', 'categories.iconmap as iconmap')->where('benefits.id', '=', $id)->where('dateend', '>', $date)->first();

        try
        {
            if(!$benefit)
            {
                return response()->json(['message' => 'No se encontro ningun beneficio'], 401);
            }
        }
        catch(Exception $e)
        {
            return response()->json(['message' => 'Ocurrio un error'], 500);
        }

        return response()->json(['benefit' => $benefit], 200);
    }

    public function updateprofile(Request $request, $id)
    {
       $validator =  Validator::make($request->all(),[ 
            'name' => 'required',
            'dni' => 'required',
            'phone' => 'numeric',
            'province' => 'required',
            'city' => 'required',
            'domicile' => 'required'
        ]);

        $validator->setAttributeNames([
            'name' => 'Nombre',
            'dni' => 'DNI',
            'phone' => 'Telefono',
            'province' => 'Provincia',
            'city' => 'Ciudad',
            'domicile' => 'Domicilio'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->dni = $request->dni;
        $user->phone = $request->phone;
        $user->province = $request->province;
        $user->city = $request->city;
        $user->domicile = $request->domicile;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['message' => 'Se actualizo el perfil exitosamente'], 200);
    }

    public function updatepassword(Request $request, $id)
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
            return response()->json(['message' => 'Su contraseña se actualizo correctamente'], 200);
        }
        else
        {
            return response()->json(['message' => 'La contraseña actual es incorrecta'], 401);
        }
    }

    public function postbenefit(Request $request)
    {
        $id = $request->id;
        $user = Auth::id();
        $benefit = new UserBenefits;
        $benefit->benefit_id = $id;
        $benefit->user_id = $user;
        $benefit->save();

        return response()->json(['message' => 'Beneficio Guardado'], 200);
    }

    public function unpostbenefit($id)
    {
        $user = Auth::id();
        $benefit = UserBenefits::where('benefit_id', '=', $id)->where('user_id', '=', $user)->first();
        $benefit->delete();

        return response()->json(['message' => 'Beneficio Borrado'], 200);
    }

    public function registerPush()
    {
        $content = array(
          "en" =>"TIHS IS NOTIFICATION DESCRIPTION"
          );

        $fields = array(
          'app_id' => "876b6875-5142-4bb5-a1b5-7b585341e078",
          'include_player_ids' => array("HERE WILL BE THE DEVICE TOKEN YOU RECEIVE FROM ONESIGNAL PLUGIN INITIALIZATION"),
          'data' =>"ANY ADDITIONAL DATA YOU WANT SEND",
          'contents' => $content,
          'headings'=>array("en"=>"HERE COMES THE NOTIFICATION TITLE"),
          'large_icon'=>"IMAGE URL FOR YOUR APP LOGO TO DISPLAY IT IN NOTIFICATION",
          'big_picture'=>"IF YOU WANT TO SEND BIG IMAGE WITH NOTIFICATION, URL GOES HERE",
          'android_sound'=>"notification"
        );
        
        $fields = json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                               'Authorization: Basic YOUR AUTHORIZATION KEY GOES HERE'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
    }
}
