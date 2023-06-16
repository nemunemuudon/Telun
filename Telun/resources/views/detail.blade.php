{{-- //////////詳細////////// --}}
@extends("layouts.Telun")
@section("link","{{ asset('css/home.css')}} ")
@section("pageTitle","detail")
@section("content")
    @foreach ($volunteer as $volunteer)
    <div id = "contents">
        <h2>{{$volunteer['title']}}</h2>
        <ul>
            <li>
                {{$volunteer['picture']}}
            </li>
            <li>
                <p id="tag">開催期間</p>
                {{$volunteer['holdperi']}}
            </li>
            <li>
                <p id="tag">募集期間</p>
                {{$volunteer['Recperi']}}
            </li>
            <li>
                <p id="tag">時間帯</p>
                {{$volunteer['holdperi']}}
            </li>

        </ul>
    </div>
    @endforeach

@endsection
