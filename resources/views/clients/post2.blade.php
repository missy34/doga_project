@include('layouts/header')
@extends('layouts.app')

<?php
  use App\Client;
  $value = session()->get('id');
  $client = Client::where('id', $value)->first();
//   echo $value;
//   var_dump($value);
//   echo $client;
//   var_dump($client);
?>
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>
<style>
body{
    background:#f7fdff;
    font-size:13px;
    font-family: 'M PLUS 1p', sans-serif;
}
input,select{
    height: 35px;
    font-size:13px;
    outline: none;
    resize: none;
    padding:5px;
    margin: 0px auto;
    border-radius: 4px;
    border: 1px solid rgb(168, 168, 168);
    width: 100%;
    font-family: 'M PLUS 1p', sans-serif;
}
input[type=radio] {
    display: none;
}
#top_form{
    height: 35px;
    font-size:13px;
    outline: none;
    resize: none;
    padding:5px;
    margin: 0px auto;
    border-radius: 4px;
    border: 1px solid rgb(168, 168, 168);
    width: 70px;
}
textarea{
    height:130px;
    padding:5px;
    border-radius: 4px;
    margin: 0px auto;
    border: 1px solid rgb(168, 168, 168);
    outline: none;
    resize: none;
    width: 100%;
    font-family: 'M PLUS 1p', sans-serif;
}
label{
    display: inline-block;
    width: 40%;
    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size:13px;
    margin:5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 4px;
    background: #ffffff;
}
label:hover {
    background: #75d7e0;
}
input[type="radio"]:checked + label {
    background: #43c4cf;
    color: #ffffff; 
    border: 1px solid rgb(240, 240, 240);
}
.line h1{
    padding-top:20px;
    text-align: center;
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    color:rgb(67,196,207);
    letter-spacing:1px;
}
.line h2{
    text-align: center;
    background: rgb(67,196,207);
    height: 5px;
    width:50px;
    margin: 0 auto 20px;
    border-radius: 50px;
}
.wraps{
    width: 75%;
    padding: 25px;
    margin: 0 auto;
    border-radius: 5px;
    background:white;
    box-shadow: 0px 1px 4px rgba(151, 169, 177, 0.8);

}
.wrap{
    margin-bottom:15px;
}

.wrap p{
    padding-left: 5px;
    padding-bottom: 12px;
}

.wrap_profile p {
    text-align: left;
    padding-top: 5px;
    padding-left: 5px;
    padding-bottom: 5px;
    margin-bottom: 8px;
}
.wrap_profile {
    /* margin-bottom:15px; */
    text-align: center;
}
button{
    display: flex;
    justify-content: center;
    width: 45%;
    height: 50px;
    border-radius: 5px;
    background: rgb(113, 188, 223);
    font-size: 16px;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 80px;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
button:hover{
    box-shadow: none;
    background: rgb(51, 175, 223);
    font-weight: bold;
}
.req{
    font-size: 10px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:4px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 10px;
    color:white;
    background:gray;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}

/* 追加しましたユーザープロフィール画像関係 */

#client_profile{
    border:none;
}
.client_profile_preview {
    height: 70px;
    width: 70px;
    margin: 10px;
    vertical-align: middle;
    border-radius: 50%;
    border: solid 1px #ddd;
}
.preview_center {
    text-align: center;
}
.line img {
    width: 85%;
    display: flex;
    margin: 25px auto 18px;
}

/* 追加したユーザープロフィール画像関係ここまで */

@media screen and (min-width: 781px) {
    .wraps{
        width: 45%;
    }
    .wrap{
        margin-bottom:30px;
    }
    body,label{
        font-size:15px;
    }
    input{
        height: 40px;
        font-size: 15px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 0px auto;
        border-radius: 4px;
        border: 1px solid rgb(168, 168, 168);
        width: 100%;
    }
    textarea{
        font-size: 15px;
        height:130px;
        padding:5px;
        border-radius: 4px;
        margin: 0px auto;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width: 100%;
    }
    .client_profile_preview {
        height: 80px;
        width: 80px;
        vertical-align: middle;
        border-radius: 50%;
        margin: 20px;
        text-align: center;
    }
    .preview_center {
        text-align: center;
    }
    .line img {
        width: 50%;
        display: flex;
        margin: 30px auto 20px;
    }
}

@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
  }
}
</style>

@section('content')

<div class="container">

    <div class="line">
        <img src="{{ asset('images/pic5.png') }}" alt="">
        <!-- <h1>基本情報の登録</h1>
        <h2>　　</h2> -->
    </div>

    @include('common.errors')
    <form action="{{ url('clientsProfile') }}" method="POST" class="" enctype="multipart/form-data">
    {{ csrf_field() }}
         <div class="wraps">
            <div class="wrap">
                <p class="title">会社所在地<span class="req">必須</span></p>
                <input type="text" name="client_loc" value="{{old('client_loc')}}"  class="form-control" id="" placeholder="" required>
            </div>
            <div class="wrap">
                <p class="title">ホームページＵＲＬ<span class="req">必須</span></p>
                <input type="text" name="client_url" value="{{old('client_url')}}" class="form-control" placeholder="" required>
            </div>
            <div class="wrap">
                <p class="title">事業内容<span class="req">必須</span></p>
                <textarea type="text" name="client_biz" value="{{old('client_biz')}}" class="form-control" placeholder="" required></textarea>
            </div>
            <div class="wrap">
                <p class="title">従業員数<span class="opt">任意</span></p>
                <select type="text" name="client_num_emp" value="{{old('client_num_emp')}}" class="form-control" placeholder="" required>
                    <option value="">（選択）</option>
                    <option value="10名未満">10名未満</option>
                    <option value="10名〜50名未満">10名〜50名未満</option>
                    <option value="50名〜100名未満">50名〜100名未満</option>
                    <option value="100名〜500名未満">100名〜500名未満</option>
                    <option value="500名〜1,000名未満">500名〜1,000名未満</option>
                    <option value="1,000名〜10,000名未満">1,000名〜10,000名未満</option>
                    <option value="10,000名以上">10,000名以上</option>
                </select>
            </div>

            <div class="wrap_profile">
                <p>会社ロゴ<span class="req">必須</span></p>
                <td class="preview_center"><input id="client_profile" type="file" name="client_image_url" value=""><img id="client_profile_preview" class="client_profile_preview" src="/images/client_default.png"></td>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                登録完了
                </button>
            </div>
        </div>
    </form>
</div>

<!-- JSファイルの指定してください！ -->
<!-- ユーザーのプロフィールでも同じファイル読み込んでるので修正する場合は注意 -->
<script src="{{ asset('js/post2.js') }}"></script>
<!-- JSファイルの指定してください！ -->
<script>

</script>

@endsection
