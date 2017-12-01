<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <title></title>
    </head>
    <body>
        @include('header')
        @include('navigation')
        <div class="content-area flex-container">
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
    </body>
</html>
