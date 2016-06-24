@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Painel Administrativo</h4>
                <ol class="breadcrumb">
                    <li class="active"><a href="./admin">Dashboard</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- Conteudo da pagina -->

        <div class="row">
            <div class="row">
                <div class="col-md-1 col-md-offset-1">

                </div>
            </div>
            <hr>
            <div class="col-sm-12">
                <div class="white-box">
                    <h3>Usuarios</h3>
                    <p class="text-muted">Lista de Usuarios cadastrados</p>
                    <a href="./create"><span class="btn btn-success btn-circle btn-md"><i class="fa fa-plus"></i></span></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Referencia</th>
                                <th>Ativo</th>
                                <th>Roles</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $user)
                                <tr>
                                    <td>{!! $user->id !!}</td>
                                    <td>{!! $user->name !!}</td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->reference !!}</td>
                                    <td>{!! $user->active ? 'Sim' : 'Não' !!}
                                    <td>
                                        @if($user->admin)
                                            <span class="label label-danger">admin</span>
                                        @endif
                                        @if($user->moderator)
                                            <span class="label label-success">mod</span>
                                        @endif
                                    <td>
                                    <td>
                                        <a href="./show/{{$user->id}}"> <span class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </span></a>
                                        <a href="./edit/{{$user->id}}"> <span class="btn btn-success btn-circle"><i class="fa fa-pencil"></i> </span></a>
                                        <a href="./delete/{{$user->id}}"> <span class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.Conteudo da pagina -->

    </div>
    <!-- /.container-fluid -->
</div>

@endsection