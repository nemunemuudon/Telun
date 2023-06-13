<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="@yield('link')" >
        <title>@yield('pageTitle') - Telun</title>
    </head>
    <body>
        <div>
            <div class="header">
                <div class="container mx-auto py-5">
                    <a class="homebt" href="{{ route('home') }}">Telun</a>
                    @yield('box')
                    <li class = "list">
                        <ul>
                            <a class="menubt" href="{{route('home')}}">MyPage</a>
                        </ul>
                        <ul>
                            <a class="menubt" href="{{route('home')}}">Setting</a>
                        </ul>
                    </li>
                </div>
            </div>
            <main>
                <h2 class="title">@yield('title')</h2>
                <div>
                    @yield('content')
                </div><!--/.container-->
            </main>
        </div><!--/.wrapper-->
        <script src="{{ mix('js/app.js') }}"></script>
        </body>
</html>

<style>
    /* body */
    body{
        margin: 0;
        padding:0;
    }

    /* header */
    .header .list{
        float:right;
        padding-right: 7.5%;
    }
    .header{
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #ffc93b;
    }
    /* homebt */
    .homebt:hover{
        opacity: 0.7;
    }
    .homebt{
        padding-top: 30px;
        padding-left:2.5%;
        text-decoration: none;
        color: white;
        text-shadow:1px 1px 0 #FFF, -1px -1px 0 #FFF,
              -1px 1px 0 #FFF, 1px -1px 0 #FFF,
              0px 1px 0 #FFF,  0-1px 0 #FFF,
              -1px 0 0 #FFF, 1px 0 0 #FFF;
        font-size: 40px;
        font-family: "fantasy";
    }

    /* list */
    ul{
        float: left;
    }
    /* menubt */
    .menubt{
        text-decoration: none;
        color: black;
        font-size: 20px;
        font-family: "arial narrow";
        opacity:0.7;
    }
    .menubt:hover{
        opacity: 1;
        background: linear-gradient(transparent 85%, #2f2e2e 95%);
    }

    /* title */
    .title{
        padding-left:10px;
    }
</style>
