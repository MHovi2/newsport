  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('/assets/backend/css/app.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('/assets/backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/backend/css/components.css') }}">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href="{{url('/assets/backend/img/favicon.ico')}}" />
  

  @switch(Request::segment('1'))
  @case('publish-news')

      <link rel="stylesheet" href="{{ url('assets/backend/bundles/summernote/summernote-bs4.css') }}">
      <link rel="stylesheet" href="{{ url('assets/backend/bundles/codemirror/lib/codemirror.css') }}">
      <link rel="stylesheet" href="{{ url('assets/backend/bundles/codemirror/theme/duotone-dark.css') }}">
      <link rel="stylesheet" href="{{ url('assets/backend/bundles/jquery-selectric/selectric.css') }}">

  @break;


  @case('dashboad')

  @break
  @default



@endswitch
<link rel="stylesheet" href="{{ url('/assets/backend/css/custom.css') }}">
