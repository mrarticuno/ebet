@extends('layouts.admin')

@section('content')
    <script src="http://cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>

    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Painel Administrativo</h4>
                    <ol class="breadcrumb">
                        <li class="active"><a href="./admin">Criar Post</a></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- Conteudo da pagina -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3>Criar Post</h3>
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <div class="row">
                                    @if(\Illuminate\Support\Facades\Session::has('errors'))
                                        <div class="alert alert-danger">
                                            {!! $errors->first() !!}
                                        </div>
                                    @endif
                                </div>
                                {!! Form::open(array('route' => 'notice.store', 'files'=> true)) !!}
                                <div class="row">
                                    <div class="input-field col s12">
                                        {!! Form::label('title', 'Titulo', array('class' => 'control-label')) !!}
                                        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        {!! Form::label('body', 'Conteudo', array('class' => 'control-label')) !!}
                                        {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}
                                        <script>
                                            CKEDITOR.replace('body');
                                        </script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="checkbox checkbox-success">
                                            {!! Form::checkbox('active', true, true) !!}
                                            {!! Form::label('active', 'Ativo', array('class' => 'control-label')) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        {!! Form::label('photo', 'Capa', array('class' => 'control-label')) !!}
                                        {!! Form::file('photo', null, ['class' => 'form-control', 'id' => 'photo']) !!}
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <button class="btn btn-purple waves-effect waves-light" type="submit">Salvar
                                    </button>
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