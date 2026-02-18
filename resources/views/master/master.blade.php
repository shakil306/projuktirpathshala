@php
Use App\Models\Title;
$titleh=Title::where('p_mark',"Home")->first();
$titlea=Title::where('p_mark',"About")->first();
$titlec=Title::where('p_mark',"Course")->first();
$titlead=Title::where('p_mark',"Admission")->first();
$titlem=Title::where('p_mark',"Mentor")->first();
$titleb=Title::where('p_mark',"Blog")->first();
$titlecn=Title::where('p_mark',"Contact")->first();
$titleg=Title::where('p_mark',"Gallery")->first();
$titles=Title::where('p_mark',"Seminar")->first();
$titlesf=Title::where('p_mark',"Student Feedback")->first();
$titlesa=Title::where('p_mark',"Social Activity")->first();
@endphp
@php
use App\Models\Meta_keyword;
$keyword=Meta_keyword::first();

@endphp
@php
  use App\Models\Analytic;
  $analytic=Analytic::first();
  @endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keyword')">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="facebook-domain-verification" content="psizbi9dcvm89xq11fknhew3gy00m4" />
  <meta name="google-site-verification" content="KVUQSoP2CchT8LhiXY1P5eR4GXjAEq3_fGUQ34TMbWY" />
  <meta name="msvalidate.01" content="70F6E8CB3B4F58413187D620785F3B45" />
  
    <!--social tag start-->
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="https://www.projuktirpathshalabd.com/public/uploads/logo/20210925120902.Projuktir-Pathshala-Institute.png">
        <meta property="og:url" content="https://www.projuktirpathshalabd.com">
        
        <meta name="twitter:title" content="@yield('title')">
        <meta name="twitter:description" content="@yield('description')">
        <meta name="twitter:url" content="https://www.projuktirpathshalabd.com/public/uploads/logo/20210925120902.Projuktir-Pathshala-Institute.png">
        <meta name="twitter:card" content="summary">
    <!--social tag end -->
  
  
  {{--  <title>{{$tit->text}}</title>--}}
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/images/favicon.png')}}">
  
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  
  <!-- ========= Bootstrap CSS File  =========-->
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  
  <!-- ========= Owl-Carousel CSS File For Gallery Page  =========-->
  <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
  <!-- ========= Fontawesome CSS File For Icons  =========-->
  <link rel="stylesheet" href="{{asset('/fontawesome/css/all.min.css')}}">
  <!-- ========= Custom CSS File  =========-->
  
  
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/responsive.css')}}">
  
    

<script>
{{$analytic}}
$.widget( "ui.dialog", $.ui.dialog, {
  _allowInteraction: function( event ) {
    if ( $( event.target ).closest(".ui-dialog").length ) {
      return true;
    }

    if (!(event.target instanceof HTMLElement)) {
      return true;
    }

    if ( $( event.target ).closest(".cke_dialog").length ) {
      return true;
    }

    // TODO: Remove hack when datepicker implements
    // the .ui-front logic (#8989)
    return !!$( event.target ).closest(".ui-datepicker").length;
  },
  _moveToTop: function (event, silent) {
    if (!event || !this.options.modal) {
      this._super(event, silent);
    }
  }
});
</script>
<!--<link>-->
<!--.ck.ck-balloon-panel {-->
<!--    z-index: 1050 !important;-->
<!--}-->
<!--</link>-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VZGMDV');</script>
<!-- End Google Tag Manager -->


</head>

<body>

    
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1719868838252838");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

  <!-- =========Header top =========-->
 @include('parts.topbar')


 @yield('content')

  @include('parts.footer')


    <div id="callme">
        <!--<a href="tel:+8801743260655" title="+8801743260655"><i class="fab fa-whatsapp whatsapp_custom"></i></a>-->
        <a href="tel:+8801733662435" title="+8801733662435"><i class="fab fa-whatsapp whatsapp_custom"></i></a>
    </div>

    <!--====== Start Top to Bootom Scroll button=====-->
    <!--    <i class="fas fa-arrow-circle-up" id="bottom-to-top"></i>-->
    <!--====== End Top to Bootom Scroll button=====-->
    <!--Slim.js File-->
    <script src="{{asset('/js/jquery.slim.min.js')}}"></script>
    <!--Popper Js File-->
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <!--Jquery File-->
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <!--Bootstrap js File-->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    
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
    
    <!--Waypoints For Animation On Scroll ppage-->
    <script src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
    <!--Jquery Counter js File For Home Page Counter Section-->
    <script src="{{asset('/js/jquery.counterup.min.js')}}"></script>
    <!--Mix It Up Js For Gallery Page-->
    <script src="{{asset('/js/mixitup.min.js')}}"></script>
    <!--Owl Carousel For Every Slider part-->
    <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
    <!--Magnific-Popup Js For Gallery Page-->
    <script src="{{asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <!--Custom js File-->
    <script src="{{asset('/js/main.js')}}"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6049c75e7182f7c0"></script>

    <script>
        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
    </script>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPTVHR3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
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
    
    
</body>

</html>
