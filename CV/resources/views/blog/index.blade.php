@extends('layouts.main')


@section('content')
<a href="{{route('blog.create')}}" style="display: flex;
    justify-content: center;">
    <h2>Создать новый блог</h2>
</a>
@if (session('success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4 style="padding-top:10px;"><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
</div>
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Блоги</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th style="width: 30%">
                                    Название
                                </th>
                                <th style="width: 30%">
                                    Описание
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    {{$blog['id']}}
                                </td>
                                <td>
                                    {{$blog['title']}}
                                </td>
                                <td>
                                    {{$blog['description']}}
                                </td>
                                <td>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection