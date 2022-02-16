  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('/assets/backend/css/app.min.css') }}">


  <!--  spacific CSS -->
  @switch(Request::segment('1'))
      @case('publish-news')
            <link rel="stylesheet"
                href="{{ url('assets/backend/bundles/summernote/summernote-bs4.css') }}">
            <link rel="stylesheet"
                href="{{ url('assets/backend/bundles/codemirror/lib/codemirror.css') }}">
            <link rel="stylesheet"
                href="{{ url('assets/backend/bundles/codemirror/theme/duotone-dark.css') }}">
            <link rel="stylesheet"
                href="{{ url('assets/backend/bundles/jquery-selectric/selectric.css') }}">
            <link rel="stylesheet"
                href="{{ url('/') }}/assets/backend/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
            @break;
      @case('manage-news'||'manage-category'||'new-trash')
            <link rel="stylesheet"
                href="{{ url('/') }}/assets/backend/bundles/datatables/datatables.min.css">
            <link rel="stylesheet"
                href="{{ url('/') }}/assets/backend/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
            @break
      @default

  @endswitch
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('/assets/backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/backend/css/components.css') }}">
  <link rel="stylesheet" href="{{ url('/assets/backend/css/custom.css') }}">
  <!-- Custom style CSS -->
  <link rel='shortcut icon' type='image/x-icon'
      href="{{ url('/assets/backend/img/favicon.ico') }}" />
