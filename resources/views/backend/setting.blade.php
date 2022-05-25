@extends('backend.layout')
@section('main')
<div class="main-content">
    <div class="section">
        <div class="row">
            <div class="col-12">
                {{-- @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @else
            <div class="alert alert-Danger">
                Please Try Again
            </div>
            @endif --}}
            <div class="card">
                <form action="setting" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card-header">
                    <h4>Site Settings</h4>
                </div>
                <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site Logo</label>
                            <div class="col-sm-12 col-md-7 mb-2">
                                <img src="{{$data['site_logo']}}" width="200px" alt="">
                            </div>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control-file" name="siteLogo" aria-describedby="fileHelpId">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                            <div class="col-sm-12 col-md-7 mb-2">
                                <img src="{{$data['favicon']}}" width="200px" alt="">
                            </div>
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control-file" name="favIcon" aria-describedby="fileHelpId">
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Pages</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Us</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="summernote" name="aboutUs" required>{{$data['about_us']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contuct Us</label>
                      <div class="col-sm-12 col-md-7">
                          <textarea class="summernote" name="contuctUs" required>{{$data['contuct_us']}}</textarea>
                      </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Privacy Policy</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="summernote" name="privacyPolicy" required>{{$data['privacy_policy']}}</textarea>
                    </div>
                </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
