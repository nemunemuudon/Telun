@extends("layouts.Telun")
@section("link","{{ asset('css/home.css')}} ")
@section("pageTitle","home")
@section("title","home")
@section("content")
@foreach ($volunteer as $volunteer)
<div id = "contents">
    <h2>{{$volunteer['title']}}</h2>
    <ul>
        <li>
            {{$volunteer['picture']}}
        </li>
        <li>
            <p id="tag">募集期間</p>
            {{$volunteer['Recperi']}}
        </li>
        <li>
            <p id="tag">開催期間</p>
            {{$volunteer['holdperi']}}
        </li>


    </ul>
</div>
@endforeach
@endsection
<style>
    li{
        list-style: none;
    }
    #tag{
        font-size: 18px;
        color:blueviolet;
        margin: 10px;
    }
    #contents{
        /* background-color: rgb(242, 242, 242); */
        /* box-shadow: 0 10 25px rgba(0,0,0,0.5); */
    }

</style>
