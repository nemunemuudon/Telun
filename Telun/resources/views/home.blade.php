@extends("layouts.Telun")
@section("link","{{ asset('css/home.css')}} ")
@section("pageTitle","home")
@section("box")
    <form id="form1" action="{{ asset('css/home.css')}}">
        <input id="sbox"  id="s" name="s" type="text" placeholder="キーワードを入力" />
        <input id="sbtn" type="submit" value="検索" />
    </form>
@endsection
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
        margin: 10px;
    }
    #contents{
        /* background-color: rgb(242, 242, 242); */
        /* box-shadow: 0 10 25px rgba(0,0,0,0.5); */
    }

    /*フォーム全体*/
    #form1{
    position:absolute;/*フォームの相対位置*/
    max-width:270px;/*フォームのサイズ*/
    left:40%;
    top:15px;
    }
    /*検索ボックス*/
    #sbox{
    position:absolute;/*フォームの絶対位置*/
    left:0;
    top:0;
    border:0;
    outline:0;
    height:50px;/*検索ボックスの高さ*/
    padding:0 10px;/*テキスト位置調整*/
    border-radius:2px 0 0 2px;/*検索ボックスの角を丸める*/
    background:#eee;/*検索ボックスの背景カラー*/
    }
    /*検索ボタン*/
    #sbtn{
    width:70px;/*検索ボタンの横幅*/
    height:50px;/*検索ボタンの縦幅*/
    position:absolute;/*検索ボタンの絶対位置*/
    left:180px;/*検索ボタンの位置調整*/
    top:0;
    border-radius:0 2px 2px 0;/*検索ボタンの角を丸める*/
    background:#beada5;/*検索ボタンの背景カラー*/
    border:none;/*検索ボタンの枠線を消す*/
    color:#fff;/*検索ボタンのテキストカラー*/
    font-weight:bold;/*検索ボタンのテキスト太字*/
    font-size:16px;/*検索ボタンのフォントサイズ*/
    }
    /*検索ボタンマウスオーバー時*/
    #sbtn:hover{
    color:#666;/*検索ボタンマウスオーバー時のフォントカラー*/
    }

</style>
