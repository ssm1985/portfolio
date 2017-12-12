<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="shortcut icon" href="/img/favicon.png">
        <title>Spencer McLeod | {{$title}}</title>
        <script>
        $(document).ready(function(){
            $("button").click(function(){
                $(".fa-bars").toggle();
            });
        });
        </script>
        <script>
            $( function() {
                $( "#tabs" ).tabs();
            } );
        </script>
    </head>
    <body>
        @if(Auth::user())
            <div class="logged-in row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 left">
                    <div class="logged-in-container">
                        <p><strong>Hello, {{ Auth::user()->name }}.</strong></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 right">
                    <a href="/posts/create">Create Post</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        @endif
        @include('header')
        @include('navigation')
        <div class="content-area">
            @include('messages')
            @yield('content')
        </div>


        <script type="text/javascript">
        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        // 1. Get HTML Elements
        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        var openButton      = document.querySelector('#open-mobile-menu-button');
        var closeButton     = document.querySelector('#close-mobile-menu-button');
        var mobileMenu      = document.querySelector('#mobile-menu');



        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        // 2. Define Abilities (Functions)
        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        function openMenu() {
            mobileMenu.className = 'menu open';
        }

        function closeMenu() {
            mobileMenu.className = 'menu close';
        }

        function removeMenuButton(){
            openButton.className = "close";
        }

        function showMenuButton(){
            openButton.className = "open";
        }



        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        // 3. Wire everything up
        // * * * * * * * * * * * * * * * * * * * * * * * * * * *
        openButton.addEventListener('click', openMenu);
        openButton.addEventListener('click', removeMenuButton);
        closeButton.addEventListener('click', closeMenu);
        closeButton.addEventListener('click', showMenuButton);

        </script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        @include('footer')
    </body>
</html>
