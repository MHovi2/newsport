 <!-- General JS Scripts -->
 <script src="{{url('/')}}/assets/backend/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="{{url('/')}}/assets/backend/bundles/apexcharts/apexcharts.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="{{url('/')}}/assets/backend/js/page/index.js"></script>
 

 

 
@switch(Request::segment('1'))

@case('publish-news')
    <!-- Page Specific JS File -->
    <!-- JS Libraies -->
    <script src="{{ url('/') }}/assets/backend/bundles/summernote/summernote-bs4.js"></script>
    <script src="{{ url('/') }}/assets/backend/bundles/codemirror/lib/codemirror.js"></script>
    <script src="{{ url('/') }}/assets/backend/bundles/codemirror/mode/javascript/javascript.js"></script>
    <script src="{{ url('/') }}/assets/backend/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="{{ url('/') }}/assets/backend/bundles/ckeditor/ckeditor.js"></script>
    <script src="{{ url('/') }}/assets/backend/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
        <script src="{{ url('/') }}/assets/backend/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="{{ url('/') }}/assets/backend/js/page/create-post.js"></script>

@break;
@case('manage-news' ||'manage-category'||'new-trash')
<script src="{{ url('/') }}/assets/backend/bundles/datatables/datatables.min.js"></script>
<script src="{{ url('/') }}/assets/backend/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/assets/backend/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{ url('/') }}/assets/backend/js/page/datatables.js"></script>
@break

@default

@endswitch

<!-- Template JS File -->
<script src="{{url('/')}}/assets/backend/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{url('/')}}/assets/backend/js/custom.js"></script>

