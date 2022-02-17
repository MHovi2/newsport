{{$s=1;}}
@extends('backend.layout')
@section('main')
<div class="main-content">
    <section class="section">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('manage.news')}}">All <span
                                        class="badge badge-primary">{{$count_all}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('manage.news')}}">Publish<span
                                        class="badge badge-white">{{$count_publish}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('news.trash')}}">Trash <span
                                        class="badge badge-primary">{{$count_trash}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic DataTables</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Image</th>
                                        <th>Ttile</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $info)
                                    <tr>
                                        <td>
                                            {{ $s++ }}
                                        </td>
                                        <td scope="row"><img class="m-1" src="{{ $info['image'] }}" alt=""
                                                width="150px"></td>
                                        <td>{{ $info['title'] }}
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="{{ 'manage-news/' . $info['id'] }}"
                                                    class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>{{ $info['category'] }}</td>
                                        <td>{{ $info['created_at'] }}</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Published</div>
                                        </td>
                                    </tr>

                                    @endforeach
                                    


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
