@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Painel Administrativo</h4>
                <ol class="breadcrumb">
                    <li class="active"><a href="./admin">Editar Usuario</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- Conteudo da pagina -->

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Editar Usuario</h3>
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                @if(\Illuminate\Support\Facades\Session::has('errors'))
                                    <div class="alert alert-danger">
                                        {!! $errors->first() !!}
                                    </div>
                                @endif
                            </div>
                            {!! Form::open(['route' => 'usuario.update']) !!}

                            {!! Form::hidden('id', $user->id, ['class' => 'form-control', 'id' => 'id']) !!}

                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::label('name', 'Nome', array('class' => 'control-label')) !!}
                                    {!! Form::text('name', $user->name, ['class' => 'form-control', 'id' => 'name']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::label('email', 'E-Mail', array('class' => 'control-label')) !!}
                                    {!! Form::text('email', $user->email, ['class' => 'form-control', 'id' => 'email']) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    {!! Form::label('password', 'Senha', array('class' => 'control-label')) !!}
                                    {!! Form::password('password', array('class' => 'form-control', 'id' => 'password')) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="checkbox checkbox-success">
                                        {!! Form::checkbox('admin', true, $user->admin) !!}
                                        {!! Form::label('admin', 'Administrador', array('class' => 'control-label')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="checkbox checkbox-success">
                                        {!! Form::checkbox('moderator', true, $user->moderator) !!}
                                        {!! Form::label('moderator', 'Moderador', array('class' => 'control-label')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="checkbox checkbox-success">
                                        {!! Form::checkbox('can_bet', true, $user->can_bet) !!}
                                        {!! Form::label('can_bet', 'Pode Apostar', array('class' => 'control-label')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="checkbox checkbox-success">
                                        {!! Form::checkbox('active', true, $user->active) !!}
                                        {!! Form::label('active', 'Ativo', array('class' => 'control-label')) !!}
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <button class="btn btn-purple waves-effect waves-light" type="submit">Salvar</button>
                            </div>

                            {!! Form::close() !!}

                            </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- /.Conteudo da pagina -->

    </div>
    <!-- /.container-fluid -->
</div>

@endsection