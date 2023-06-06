<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index(){
        $volunteer = [
            [
            'id' => 1,
            'picture' => "syasin.jpg",
            'title' => "がんばるぼらんてぃあ",
            'Recperi'=> "5月1日～10月10日",
            'holdperi' => "11月1日10時~11月2日16時",
            'price' => "3000円",
            'pridesc' => "ご飯代込み",
            'capa' => "15人",
            'target' => "10~20歳",
            'add' => "518-0762 三重県名張市上三谷５６１−７",
            'adddesc' => "赤目駅集合",
            'station' => "赤目駅",
            'comment' => "誰でも大歓迎！"
            ],
            [
                'id' => 2,
                'picture' => "dekiru.jpg",
                'title' => "ボランティア２",
                'Recperi'=> "5月1日～6月10日",
                'holdperi' => "7月1日10時~7月2日16時",
                'price' => "3000円",
                'pridesc' => "現金のみ",
                'capa' => "20人",
                'target' => "ECC専門学生",
                'add' => "530-0015 大阪府大阪市北区中崎西２丁目３−３５",
                'adddesc' => "梅田駅から徒歩10分",
                'station' => "梅田駅",
                'comment' => "学生限定！"
            ]
            ];
       return view('home',compact('volunteer'));
       }

}
