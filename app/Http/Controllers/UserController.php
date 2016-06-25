<?php

namespace App\Http\Controllers;

use App\Upload;
use App\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $root = "..\\..\\";

        $usuarios = User::all();
        return view('user.list')->with(compact('usuarios','root'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $root = "..\\..\\";

        return view('user.create')->with(compact('root'));
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

        $usuario = new User();

        $usuario->name = $input['name'];
        $usuario->email = $input['email'];
        $usuario->password = bcrypt($input['email']);

        if(isset($input['photo'])){
            if(!is_dir(public_path().'/uploaded') )
                mkdir(public_path()."/uploaded", 0777);

            $upload = new Upload();
            $upload->active = true;
            $upload->name_file = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path()."/uploaded", $request->file('photo')->getClientOriginalName());

            $upload->save();

            $usuario->upload_id = $upload->id;
            unset($input["photo"]);
        }

        if(isset($input['can_bet']))
            $usuario->can_bet = $input['can_bet'];

        if(isset($input['admin']))
            $usuario->admin = $input['admin'];

        if(isset($input['moderator']))
            $usuario->moderator = $input['moderator'];

        if(isset($input['active']))
            $usuario->active = $input['active'];

        $usuario->user_token = $util->generateRandomString();
        $usuario->reference = $usuario->user_token;

        if(User::where('email', $usuario->email)->first())
            return Redirect::back()->withErrors(['E-mail já registrado.', 'The Message']);

        $usuario->save();

        return Redirect::action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $root = "..\\..\\..\\";

        $user = User::find($id);
        $imagem = Upload::find($user->upload_id);

        return view('user.show', compact('root', 'user','imagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $root = "..\\..\\..\\";

        return view('user.edit', compact('user', 'root'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $input = \Illuminate\Support\Facades\Request::all();
        $id = $input['id'];

        if(isset($input['password']))
            $input['password'] = bcrypt($input['password']);

        if(!isset($input['admin']))
            $input['admin'] = false;

        if(!isset($input['moderator']))
            $input['moderator'] = false;

        if(!isset($input['active']))
            $input['active'] = false;

        if(!    isset($input['can_bet']))
            $input['can_bet'] = false;

        unset($input["_token"]);

        User::where('id', $id)
            ->update($input);

        return Redirect::action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->active = false;

        $user->save();

        return Redirect::action('UserController@index');
    }
}
