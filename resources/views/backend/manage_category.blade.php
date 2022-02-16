{{ $s=1; }}
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
                                <a class="nav-link " href="#">All <span class="badge badge-primary">{{$count_category}}</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Publish <span class="badge badge-white">{{$count_category}}</span></a>
                            </li>
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
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Slag</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($category) > 0)
                                    @foreach($category as $info)
                                    <tr>
                                        <td>
                                            {{ $info['id'] }}
                                        </td>
                                        <td>{{ $info['category_name'] }}
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="#">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="{{ 'manage-news/' . $info['id'] }}"
                                                    class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>{{ $info['menu_order'] }}</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Published</div>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @else
                                        <p>NO Data Found</p>
                                    @endif
                                    

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
