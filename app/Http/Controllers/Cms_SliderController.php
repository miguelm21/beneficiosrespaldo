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
use App\Cms_SocialNetworks;
use App\Cms_Slider;
use App\Categories;

class Cms_SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Cms_Slider::paginate(10);
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('admin.cms.slider.index', ['slider' => $slider, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
        $categories = categories::get();

        return view('admin.cms.slider.create', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
            'image' => 'required|mimes:doc,docx,pdf,png,jpeg,gif,jpg,svg',
        ]);

        $image = Input::file('image');

        $slider = New Cms_Slider;
        $slider->image = base64_encode(file_get_contents($image->getRealPath()));
        $slider->mime = $image->getMimeType();
        $slider->size = $image->getSize();
        $slider->save();

        return redirect('/cmsslider')->with('message','Imagen Creada');
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
        $slider = Cms_Slider::find($id);

        return view('admin.cms.slider.edit', ['slider' => $slider, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);//
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
            'image' => 'required|mimes:doc,docx,pdf,png,jpeg,gif,jpg,svg',
        ]);

        $slider = Cms_Slider::find($id);
        $slider->image = base64_encode(file_get_contents($image->getRealPath()));
        $slider->mime = $image->getMimeType();
        $slider->size = $image->getSize();
        $slider->save();

        return redirect('/cmsslider')->with('message','Imagen Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Cms_Slider::find($id);
        $slider->delete();

        return redirect('/cmsslider')->with('message','Imagen Eliminada');
    }
}
