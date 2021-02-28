@extends('layouts.main')


@section('content')

<a href="{{route('post.create')}}" style="display: flex;
    justify-content: center;">
    <h2>Создать новый пост</h2>
</a>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все посты</h1>
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
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{$post['id']}}
                                </td>
                                <td>
                                    {{$post['title']}}
                                </td>
                                <td>
                                    {{$post['body']}}
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