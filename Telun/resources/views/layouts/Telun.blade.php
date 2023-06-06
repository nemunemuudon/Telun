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
<div class="wrapper w-screen h-screen bg-gray-100">
 <header class="bg-sky-400">
 <div class="container mx-auto py-5">
 <h1 class="text-l text-white mb-6">Telun</h1>
 <h2 class="text-white text-3xl">@yield('title')</h2>
 </div>
 </header>
 <main>
 <div class="container w-full h-full mx-auto py-10">
 @yield('content')
 </div><!--/.container-->
 </main>
</div><!--/.wrapper-->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
