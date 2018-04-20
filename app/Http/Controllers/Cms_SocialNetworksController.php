<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Auth;
use Session;
use Redirect;
use Mail;
use App\User;
use App\Cms_SocialNetworks;
use App\Categories;

class Cms_SocialNetworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = Cms_SocialNetworks::paginate(10);
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('admin.cms.socialnetworks.index', ['social' => $social, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.socialnetworks.create');
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
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();
        $social = Cms_SocialNetworks::find($id);

        return view('admin.cms.socialnetworks.edit', ['social' => $social, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
            'url' => 'required',
        ]);

        $social = Cms_SocialNetworks::find($id);
        $social->name = $request->name;
        $social->url = $request->url;
        $social->save();

        return redirect('/cmssocialnetworks')->with('message','Red Social Actualizada');
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
}
