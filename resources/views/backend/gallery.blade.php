@extends('backend.layout')
@section('main')
<div class="main-content">
    <div class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Gallery</h4>
                    </div>
                    <div class="card-body">
                        <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                            @foreach ($image as $info)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <a href="assets/img/image-gallery/1.png" data-sub-html="Demo Description">
                                  <img class="img-responsive thumbnail" src="{{$info['image']}}" alt="">
                                </a>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
