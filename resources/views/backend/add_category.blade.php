@extends('backend.layout')
@section('main')
<div class="main-content">
    <div class="section">
        <div class="row">
            <div class="col-12">
                @if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session('message')}}
                </div>
                @else
                <div class="alert alert-Danger">
                    Please Try Again
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category</h4>
                    </div>

                    <div class="card-body">
                        <form action="add-category" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category
                                    Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="categoryName" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Menu Order</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="number" class="form-control" name="menuOrder" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
