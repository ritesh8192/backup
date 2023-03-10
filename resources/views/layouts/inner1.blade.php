<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$title.TITLE_FOR_LAYOUT}}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="{!! FAVICON_PATH !!}" type="image/x-icon"/>
        <link rel="icon" href="{!! FAVICON_PATH !!}" type="image/x-icon"/>

       {{ HTML::style('public/css/front/bootstrap.min.css')}}
        {{ HTML::style('public/css/front/style.css')}}
        {{ HTML::style('public/css/front/home.css')}}
        {{ HTML::style('public/css/front/inner.css')}}
        {{ HTML::style('public/css/front/stylee.css')}}
        {{ HTML::style('public/css/front/font-awesome.css')}}
        {{ HTML::style('public/css/front/media.css')}}

        {{ HTML::script('public/js/jquery-2.1.0.min.js')}}
        {{ HTML::script('public/js/front/bootstrap.js')}}
        {{ HTML::script('public/js/jquery.validate.js')}}
        {{ HTML::script('public/js/front/menu.js')}}
        {{ HTML::script('public/js/ajaxsoringpagging.js')}}
        {{ HTML::script('public/js/front/bootstrap.min.js')}}
    </head>
    <body>
        @include('elements.header')
        <div class="main_dashboard">
            @include('elements.topmenu')
            @yield('content') 
            <script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip();
              
                $("#maraction").click(function () {
                    $("#offer-show").addClass("offer-div");
                    $(".dashboard-rights-section").removeClass("offer-div");
                });
                });
            </script>
        </div>
        @include('elements.footer')
      
    </body>
</html>