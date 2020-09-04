<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8acc6e54e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin_sidenav.css">
</head>
<body>
    @include('admin.includes.header')
    @include('admin.includes.sidenav')

    
    @yield('content');
    

    <script>
        $(document).ready(function () {
            $(".submenu > a").click(function (e) {
                e.preventDefault();
                var $li = $(this).parent("li");
                var $ul = $(this).next("ul");
                if ($li.hasClass("open")) {
                    $ul.slideUp(350);
                    $li.removeClass("open");
                } else {
                    $(".nav > li > ul").slideUp(350);
                    $(".nav > li").removeClass("open");
                    $ul.slideDown(350);
                    $li.addClass("open");
                }
            });
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
