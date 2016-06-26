@extends('layouts.admin')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-12">
                <h4 class="page-title">Painel Administrativo</h4>
                <ol class="breadcrumb">
                    <li class="active"><a href="#">Lista de Noticias</a></li>
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
                    <h3>Noticias</h3>
                    <p class="text-muted">Lista de Noticias cadastrados</p>
                    <a href="./create"><span class="btn btn-success btn-circle btn-md"><i class="fa fa-plus"></i></span></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Visualizações</th>
                                <th>Ativo</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $noticia)
                                <tr>
                                    <td>{!! $noticia->id !!}</td>
                                    <td>{!! $noticia->title !!}</td>
                                    <td>{!! $noticia->view_counter !!}</td>
                                    <td>{!! $noticia->active ? 'Sim' : 'Não' !!}
                                    <td>
                                        <a href="../../post/show/{{$noticia->id}}"> <span class="btn btn-info btn-circle"><i class="fa fa-eye"></i> </span></a>
                                        <a href="./edit/{{$noticia->id}}"> <span class="btn btn-success btn-circle"><i class="fa fa-pencil"></i> </span></a>
                                        <a href="./delete/{{$noticia->id}}"> <span class="btn btn-danger btn-circle"><i class="fa fa-times"></i> </span></a>
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