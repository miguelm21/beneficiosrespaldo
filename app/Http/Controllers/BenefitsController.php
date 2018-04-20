<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Redirect;
use Mail;
use App\User;
use App\Categories;
use App\Cms_SocialNetworks;
use App\Benefits;

class BenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = Benefits::paginate(10);
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('admin.benefits.index', ['benefits' => $benefits, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = Categories::get();
        $cat = Categories::pluck('id', 'name');

        return view('admin.benefits.create', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories, 'cat' => $cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'datestart' => 'required|date',
            'dateend' => 'required|date',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'required|mimes:doc,docx,pdf,png,jpeg,gif,jpg,svg',
            'category_id' => 'required',
            'percent' => 'required|numeric',
            'tags' => 'required',
        ]);

        $image = Input::file('image');

        $benefit = New Benefits;
        $benefit->name = $request->name;
        $benefit->description = $request->description;
        $benefit->datestart = $request->datestart;
        $benefit->dateend = $request->dateend;
        $benefit->latitude = $request->latitude;
        $benefit->longitude = $request->longitude;
        $benefit->image = base64_encode(file_get_contents($image->getRealPath()));
        $benefit->mime = $image->getMimeType();
        $benefit->size = $image->getSize();
        $benefit->category_id = $request->category_id;
        $benefit->percent = $request->percent;
        $benefit->keywords = $request->tags;
        $benefit->save();

        return redirect('/benefits')->with('message','Beneficio Creado');
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
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $benefit = Benefits::find($id);

        return view('admin.benefits.edit', ['benefit' => $benefit, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'datestart' => 'required|date',
            'dateend' => 'required|date',
            'latitude' => 'required',
            'longitude' => 'required',
            'category_id' => 'required',
            'percent' => 'required|numeric',
            'tags' => 'required',
        ]);

        if(isset($request->image))
        {
            $image = Input::file('image');
        }

        $benefit = Benefits::find($id);
        $benefit->name = $request->name;
        $benefit->description = $request->description;
        $benefit->datestart = $request->datestart;
        $benefit->dateend = $request->dateend;
        $benefit->latitude = $request->latitude;
        $benefit->longitude = $request->longitude;
        if(isset($request->image))
        {
            $benefit->image = base64_encode(file_get_contents($image->getRealPath()));
            $benefit->mime = $image->getMimeType();
            $benefit->size = $image->getSize();
        }
        $benefit->category_id = $request->category_id;
        $benefit->percent = $request->percent;
        $benefit->keywords = $request->tags;
        $benefit->save();
        return redirect('/benefits')->with('message','Beneficio Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benefit = Benefits::find($id);
        $benefit->delete();

        return redirect('/benefits')->with('message','Beneficio Eliminado');
    }
}
