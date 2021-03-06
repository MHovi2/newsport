@extends('frontend.layout')
@section('main')
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-9 col-12 line-right">
            <div class="row">
                <div class="col-md-8 line-right">
                    @foreach ($news as $key=>$info)
                    @if ($key == 0)
                    <a class="news-box" href="{{'news/' .$info['id']}}">                        
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img src="{{$info['image']}}">
                            </div>
                            <div class="col-md-6 col-12 mt-4 mt-md-0">
                                <h1> {{$info['title']}} </h1>
                                <p> {{Str::substr($info['content'], 0, 200);}}
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>                        
                    </a>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    @foreach ($news as $key=>$info)
                    @if ($key == 1)
                    <a class="news-box" href="{{'news/' .$info['id']}}">
                        <h1> {{$info['title']}} </h1>
                        <p>{{Str::substr($info['content'], 0, 200);}}</p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-12">
                    <div class="line-bottom mt-4 mb-4">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($news as $key=>$info)
                @if($key > 1 && $key < 5) <div class="col-md-4 line-right">
                    <a class="news-box" href="{{'news/' .$info['id']}}">
                        <h1>{{ $info['title'] }}</h1>
                        <p>{{ Str::substr($info['content'], 0, 200); }}
                        </p>
                        <small><i class="fas fa-clock"></i>{{ $info['created_at'] }}</small>
                    </a>
            </div>
            @endif
            @endforeach
            <div class="col-md-12">
                <div class="line-bottom mt-4 mb-4">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row">
                    @foreach($news as $key=>$info)
                    @if($key >= 4 && $key <= 9) <div class="col-md-4 mt-4 mt-md-0">
                        <a class="news-bar" href="{{'news/' .$info['id']}}">
                            <div class="row">
                                <div class="col-4 col-md-6 pr-2">
                                    <img src="{{$info['image']}}">
                                </div>
                                <div class="col-8 col-md-6 pl-2">
                                    <h1>{{ Str::substr($info['title'], 0, 40); }}</h1>
                                    <small><i class="fas fa-clock"></i> ১০ মিনিট আগে{{$info['id']}}</small>
                                </div>
                            </div>
                        </a>
                        <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- Side Bar Section --}}
<div class="col-xl-3 col-12 ">
    <div class="ad-box mt-4 mt-md-0">
    </div>
    <div class="line-bottom mt-4 mb-4"></div>
    <div class="ad-box">
        <h1>This is a Add</h1>
    </div>
    <div class="line-bottom mt-4 mb-4"></div>
    <div class="my-4">
        <h2 class="cat-title">সর্বশেষ <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
    @foreach($news as $key=>$info)
    @if($key >= 0 && $key < 3) 
    <a class="news-bar" href="{{'news/' .$info['id']}}">
        <div class="row">
            <div class="col-4 col-md-6 pr-2">
                <img src="{{$info['image']}}">
            </div>
            <div class="col-8 col-md-6 pl-2">
                <h1>{{ Str::substr($info['title'], 0, 40); }}</h1>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </div>
        </div>
        </a>
        <div class="line-bottom mt-4 mb-4"></div>
        @endif
        @endforeach

</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class="ad-box"></div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<!-- cat one -->
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">রাজনীতি <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-12">
    <div class="row">
        @foreach($polytics as $key=>$info)
        @if ($key >= 0 && $key <= 3) <div class="col-md-3 line-right">
            <a class="news-box" href="{{'news/' .$info['id']}}">
                <img class="mb-4" src="{{$info['image']}}">
                <h1>{{$info['title']}}</h1>
                <p>{{ Str::substr($info['content'], 0, 250); }}</p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
    </div>
    @endif
    @endforeach

</div>
</div>
<!-- cat one -->
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<!-- cat latest popular -->
<div class="col-12">
    <div class="row">
        <div class="col-md-3 line-right">
            <div class="my-4">
                <h2 class="cat-title">সর্বশেষ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">First Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Second Panel</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <div class="news-bar mt-4">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1>R ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class="news-bar mt-4">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class="news-bar mt-4">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class="news-bar mt-4">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <p>Second Panel</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                @foreach ($international as $key=>$info)
                @if ($key== 0)
                <div class="col-md-12 line-right">
                    <div class="my-4">
                        <h2 class="cat-title">আন্তর্জাতিক <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                        <img class="mb-4" src="{{$info['image']}}">
                        <h1>{{$info['title']}}</h1>
                        <p>{{ Str::substr($info['content'], 0, 250); }}</p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
                @endif
                @endforeach

                @foreach ($international as $key=>$info)
                @if ($key >= 1 && $key <=2) <div class="col-md-6 line-right">
                    <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                        <img class="mb-4" src="{{$info['image']}}">
                        <h1> {{$info['title']}} </h1>
                        <p>{{ Str::substr($info['content'], 0, 250); }}</p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="my-4">
            <h2 class="cat-title">জাতীয় <i class="far fa-arrow-alt-circle-right"></i></h2>
        </div>
        @foreach ($national as $key=>$info)
        @if ($key == 0)
        <a class="news-box" href="{{'news/' .$info['id']}}">
            <img class="mb-4" src="{{$info['image']}}">
            <h1> {{$info['title']}} </h1>
            <p>{{ Str::substr($info['content'], 0, 200); }}</p>
            <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
        </a>
        @endif
        @endforeach

        @foreach ($national as $key=>$info)
        @if ($key >= 1 && $key <= 3) 
        <div class="news-bar mt-4" >
            <a href="{{'news/' .$info['id']}}">
                <div class="row">
                    <div class="col-4 col-md-6 pr-2">
                        <img src="{{$info['image']}}">
                    </div>
                    <div class="col-8 col-md-6 pl-2">
                        <h1>{{ Str::substr($info['title'], 0, 30); }} </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            
    </div>
    @endif
    @endforeach
</div>
</div>
</div>
<!-- cat two -->
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">আন্তর্জাতিক <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-12">
    <div class="row">
        @foreach ($international as $key=>$info)
        @if ($key >= 0 && $key <= 4) <div class="col-md-3 line-right">
            <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                <img class="mb-4" src="{{$info['image']}}">
                <h1> {{$info['title']}} </h1>
                <p>{{ Str::substr($info['content'], 0,250); }} </p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
    </div>
    @endif
    @endforeach
</div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">বিনোদন <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-12">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($entertainment as $key=>$info)
                    @if ($key == 0)
                    <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                        <img class="mb-4" src="{{$info['image']}}">
                        <h1>{{$info['title']}}</h1>
                        <p>{{ Str::substr($info['content'], 0,300); }}</p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-4">
                    @foreach ($entertainment as $key=>$info)
                    @if ($key >= 1 && $key <= 3) 
                    <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                        <img class="mb-4" src="{{$info['image']}}">
                        <h1> {{$info['title']}} </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    
                        @endif
                        @endforeach
                </div>
                <div class="col-md-12">
                    <div class="line-bottom mt-4 mb-4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($entertainment as $key=>$info)
                        @if ($key >= 0 && $key <= 3) 
                        <div class="col-md-4 line-right">
                            <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                                <img class="mb-4" src="{{$info['image']}}">
                                <h1> {{$info['title']}} </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="news-box">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdeshdorpon&amp;tabs=timeline&amp;width=250&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=853001298403136"
                width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">খেলাধুলা <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6 line-right">
            @foreach ($sports as $key=>$info)
            @if ($key == 0) 
            <a class="news-box mb-4" href="{{'news/' .$info['id']}}">
                <img class="mb-4"
                    src="{{$info['image']}}">
                <h1>{{$info['title']}}</h1>
                <p>{{ Str::substr($info['content'], 0,300); }}</p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
            @endif
            @endforeach
        </div>
        <div class="col-md-6">
            @foreach ($sports as $key=>$info)
            @if ($key >= 1 && $key <= 4) 
            <div class="news-bar big">
                <a href="{{'news/' .$info['id']}}">
                    <div class="row">
                        <div class="col-4 col-md-4 pr-2">
                            <img
                                src="{{$info['image']}}">
                        </div>
                        <div class="col-8 col-md-8 pl-2">
                            <h1> {{ Str::substr($info['title'], 0,50); }}</h1>
                            <p class="d-none d-md-block">{{ Str::substr($info['content'], 0,200); }}</p>
                            <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4 line-right">
            <a class="news-box mb-4">
                <img class="mb-4"
                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                    নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                </p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4  line-right">
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4 line-right">
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4  line-right">
            <a class="news-box mb-4">
                <img class="mb-4"
                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                    নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                </p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
        </div>
        <div class="col-md-4">
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <a class="news-bar">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে।
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
<div class="col-md-12">
    <div class=" mt-4 mb-4">
        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6 line-right">
            <a class="news-box mb-4">
                <img class="mb-4"
                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                    নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                </p>
                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
            </a>
        </div>
        <div class="col-md-6">
            <div class="news-bar big">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে
                            সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </div>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <div class="news-bar big">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে
                            সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </div>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <div class="news-bar big">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে
                            সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </div>
            <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
            <div class="news-bar big">
                <div class="row">
                    <div class="col-4 col-md-4 pr-2">
                        <img
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                    </div>
                    <div class="col-8 col-md-8 pl-2">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক
                            ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে
                            সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="line-bottom mt-4 mb-4">
    </div>
</div>
</div>
</div>
<div class="section-video mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" mt-4 mb-4">
                    <h2 class="cat-title">ভিডিও <i class="far fa-arrow-alt-circle-right"></i></h2>
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div class="videoone"></div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="video"></div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="video"></div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="video"></div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="video"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 line-right">
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                            নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে
                                    সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক
                                    দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে
                                    সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক
                                    দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে
                                    সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক
                                    দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <div class="news-bar big">
                        <div class="row">
                            <div class="col-4 col-md-4 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-8 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <p class="d-none d-md-block">২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে
                                    সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক
                                    দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                                </p>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        <div class="col-md-12">
            <div class=" mt-4 mb-4">
                <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-3 line-right">
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                            নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
                <div class="col-md-3 line-right">
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                            নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
                <div class="col-md-3 line-right">
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                            নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <p>২০২১ সালে সাধারণ ছুটি ১৪ দিন। তার মধ্যে ছয় দিন পড়েছে সাপ্তাহিক ছুটির দিনে। এ ছাড়া আগামী বছর
                            নির্বাহী আদেশে ছুটি আছে আট দিন। তার মধ্যে এক দিন পড়েছে সাপ্তাহিক ছুটির দিনে। ৩৪ মিনিট আগে
                        </p>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class=" mt-4 mb-4">
                        <h2 class="cat-title">বাংলাদেশ <i class="far fa-arrow-alt-circle-right"></i></h2>
                    </div>
                    <a class="news-box mb-4">
                        <img class="mb-4"
                            src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                        <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                        <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                    <div class=" line-bottom mt-0 mt-md-4 mb-4"></div>
                    <a class="news-bar">
                        <div class="row">
                            <div class="col-4 col-md-6 pr-2">
                                <img
                                    src="https://images.prothomalo.com/prothomalo-bangla%2F2020-09%2F4dc58fa1-4e01-4fe8-bb4e-366278f87917%2Fgovt.png?rect=0%2C0%2C1600%2C1067&amp;w=500&amp;auto=format%2Ccompress&amp;fmt=webp">
                            </div>
                            <div class="col-8 col-md-6 pl-2">
                                <h1> ২০২১ সালে ছুটি ২২ দিন, ৭ দিনই শুক্র–শনি </h1>
                                <small><i class="fas fa-clock    "></i> ১০ মিনিট আগে</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="line-bottom mt-4 mb-4">
            </div>
        </div>
    </div>
</div>
@endsection
