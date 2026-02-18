<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>PPI - Dashboard</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon.png')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
  <link href="{{asset('dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">

  <link href="{{asset('dashboard/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
@if(auth()->user()->role !='student')

  <div id="wrapper">
    <!-- Sidebar -->
  @include('admin.parts.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('admin.parts.topbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('admin.parts.footer')
      <!-- Footer -->
    </div>
  </div>

  <script>
      $(document).ready(function() {
          $('#dataTable').DataTable();
      } );
  </script>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('dashboard/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>

  <script src="{{asset('dashboard/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('dashboard/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('dashboard/js/demo/chart-area-demo.js')}}"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
      $('textarea#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline','italic','clear']],
          ['fontname', ['fontname']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['superscript', ['superscript']],
          ['subscript', ['subscript']],
          ['height', ['height']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']],
          ['undo', ['undo']],
          ['redo', ['redo']],
        ],
      });
    </script>
  
  <script src="https://cdn.tiny.cloud/1/rtdxezuxd0zv74zk9z46xxgle4hh6b3lmry2laphhuz5dkj1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
 <script>
    tinymce.init({
      selector: 'textarea#editor',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
    
</script>

  @endif
</body>

</html>
