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
use App\News;
use App\Cms_SocialNetworks;
use App\Categories;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(10);
        $facebook = Cms_SocialNetworks::find(1);
        $googleplus = Cms_SocialNetworks::find(2);
        $twitter = Cms_SocialNetworks::find(3);
        $instagram = Cms_SocialNetworks::find(4);
        $categories = categories::get();

        return view('admin.news.index', ['news' => $news, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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

        return view('admin.news.create', ['facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
            'title' => 'required',
            'text' => 'required',
            'date' => 'required|date',
            'image' => 'required|mimes:doc,docx,pdf,png,jpeg,gif,jpg,svg',
        ]);

        $image = Input::file('image');

        $new = New News;
        $new->title = $request->title;
        $new->text = $request->text;
        $new->date = $request->date;
        $new->image = base64_encode(file_get_contents($image->getRealPath()));
        $new->mime = $image->getMimeType();
        $new->size = $image->getSize();
        $new->user_id = Auth::id();
/*        $new->user_id = 1;*/
        $new->save();

        return redirect('/news')->with('message','Noticia Creada');
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
        $new = News::find($id);

        return view('admin.news.edit', ['new' => $new, 'facebook' => $facebook, 'twitter' => $twitter, 'googleplus' => $googleplus, 'instagram' => $instagram, 'categories' => $categories]);
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
            'title' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        if(isset($request->image))
        {
            $image = Input::file('image');
        }

        $new = News::find($id);
        $new->title = $request->title;
        $new->text = $request->text;
        $new->date = $request->date;
        if(isset($request->image))
        {
            $new->image = base64_encode(file_get_contents($image->getRealPath()));
            $new->mime = $image->getMimeType();
            $new->size = $image->getSize();
        }
        $new->save();

        return redirect('/news')->with('message','Noticia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        $new->delete();

        return redirect('/news')->with('message','Noticia Eliminada');
    }
}
