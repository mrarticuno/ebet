<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Upload;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $root = "..\\..\\";

        $posts = Notice::all();
        return view('notice.list')->with(compact('posts','root'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $root = "..\\..\\";

        return view('notice.create')->with(compact('root'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = \Illuminate\Support\Facades\Request::all();

        $util = new UtilController();

        $post = new Notice();

        $post->user_id = Auth::user()->id;

        $post->title = $input['title'];

        $post->body = $input['body'];

        $post->active = true;

        if(isset($input['photo'])){
            $fileName = $util->generateRandomString();

            if(!is_dir(public_path().'/uploaded/capas') )
                mkdir(public_path()."/uploaded/capas", 0777);

            $upload = new Upload();
            $upload->active = true;
            $upload->name_file = $fileName.'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path()."/uploaded/capas", $fileName.'.'.$request->file('photo')->getClientOriginalExtension());

            $upload->save();

            $post->upload_id = $upload->id;
            unset($input["photo"]);
        }

        $post->save();
        return Redirect::action('NoticeController@show', array(1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $root = "..\\..\\";
        $utilController = new UtilController();
        $userInfo = $utilController->ip_info("189.115.200.192", "Location");

        $noticia = Notice::find($id);

        $noticia->view_counter = intval($noticia->view_counter) + 1;

        $noticia->save();

        return view('notice.show', compact('userInfo', 'root', 'noticia'));
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
}
