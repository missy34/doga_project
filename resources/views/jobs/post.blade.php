@include('layouts/header')
@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>
<style>
body{
    background:#f7fdff;
    font-family: 'M PLUS 1p', sans-serif;
}
input{
    display: flex;
    justify-content: center;
    height: 35px;
    font-size: 13px;
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
    /* float: left; */
    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 13px;
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
    background: rgb(51, 175, 223);
}
.label{
    display: inline-block;

    line-height: 30px;
    padding-left: 5px;
    padding-right: 5px;
    font-size: 13px;
    margin:5px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 4px;
    background: #ffffff;
}

input[type="radio"]:checked + label {
    background:rgb(51, 175, 223);
    color: #ffffff; 
    border: 1px solid rgb(51, 175, 223);
}
/* .label{
    display: inline-block;
} */
.line h1{
    padding-top:20px;
    text-align: center;
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    /* color:rgb(67,196,207); */
    letter-spacing:1px;
}
.line h2{
    text-align: center;
    background: #33afdf;
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
button{
    display: flex;
    justify-content: center;
    width: 45%;
    height: 50px;
    border-radius: 4px;
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
    font-size: 9px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:4px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 9px;
    color:white;
    background:gray;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    height: 12px;
    border-radius: 4px;
}

.adjust{
    height: 10px;
}
.job_profile_preview {
    height: 70px;
    width: 70px;
    margin: 20px;
    vertical-align: middle;
    border-radius: 35px;
    border: solid 1px #ddd;
}

  .preview_center {
        text-align: center;
    }
#job_profile{
    border: none;
}
.photo{
    margin-bottom: 15px;
}
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
        display: flex;
        justify-content: center;
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
    .label{
        line-height: 30px;
        padding-left: 5px;
        padding-right: 5px;
        margin:5px;
        color: gray;
        text-align: center;
        align-items:center;
        cursor: pointer;
        border: 1px solid rgba(128, 128, 128, 0.473);
        border-radius: 4px;
        background: #ffffff;
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
}

@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
  }
}

</style>


@section('content')
<div>
    <div class="line">
        <h1>プロジェクトの依頼</h1>
        <h2>　　</h2>
    </div>
    <!-- <form action="{{ url('/clients/post/comfirm') }}" method="POST" class="" enctype="multipart/form-data"> -->
<form action="{{ url('jobs/post') }}" method="POST" class="" enctype="multipart/form-data">
                    {{ csrf_field() }}
    <div class="wraps">

        <div class="wrap">
            <p class="title">動画タイトル<span class="req">必須</span></p>
            <input type="text" name="job_title" value="{{old('job_title')}}" placeholder="">
        </div>

        <div class="wrap">
            <p class="title">職種<span class="req">必須</span></p>
            <input id="job_position0" type="radio" name="job_position" value="#営業（法人/個人）" ><label for="job_position0" class="label">#営業（法人/個人）</label>
            <input id="job_position1" type="radio" name="job_position" value="#企画（経営/事業）" ><label for="job_position1" class="label">#企画（経営/事業）</label>
            <input id="job_position2" type="radio" name="job_position" value="#マーケティング" ><label for="job_position2" class="label">#マーケティング</label>
            <input id="job_position3" type="radio" name="job_position" value="#広告宣伝・広報・PR" ><label for="job_position3" class="label">#広告宣伝・広報・PR</label>
            <input id="job_position4" type="radio" name="job_position" value="#人事" ><label for="job_position4" class="label">#人事</label>
            <input id="job_position5" type="radio" name="job_position" value="#総務" ><label for="job_position5" class="label">#総務</label>
            <input id="job_position6" type="radio" name="job_position" value="#経理・財務" ><label for="job_position6" class="label">#経理・財務</label>
            <input id="job_position7" type="radio" name="job_position" value="#法務・知財" ><label for="job_position7" class="label">#法務・知財</label>
            <input id="job_position8" type="radio" name="job_position" value="#事務・アシスタント" ><label for="job_position8" class="label">#事務・アシスタント</label>
            <input id="job_position9" type="radio" name="job_position" value="#販売/サービス系" ><label for="job_position9" class="label">#販売/サービス系</label>
            <input id="job_position10" type="radio" name="job_position" value="#エンジニア（SE/PG）" ><label for="job_position10" class="label">#エンジニア（SE/PG）</label>
            <input id="job_position11" type="radio" name="job_position" value="#ITコンサルタント/PM" ><label for="job_position11" class="label">#ITコンサルタント/PM</label>
            <input id="job_position12" type="radio" name="job_position" value="#社内SE" ><label for="job_position12" class="label">#社内SE</label>
            <input id="job_position13" type="radio" name="job_position" value="#Webデザイナー" ><label for="job_position13" class="label">#Webデザイナー</label>
            <input id="job_position14" type="radio" name="job_position" value="#経営コンサルタント" ><label for="job_position14" class="label">#経営コンサルタント</label>
            <input id="job_position15" type="radio" name="job_position" value="#電気/電子/機械/自動車" ><label for="job_position15" class="label">#電気/電子/機械/自動車</label>
            <input id="job_position16" type="radio" name="job_position" value="#公務員" ><label for="job_position16" class="label">#公務員</label>
            <input id="job_position17" type="radio" name="job_position" value="#その他" ><label for="job_position17" class="label">#その他</label>
        </div>

        <div class="wrap">
            <p class="title">役割<span class="req">必須</span></p>
            <input id="job_occupation1" type="radio" name="job_occupation" value="#新卒入社若手" ><label for="job_occupation1" class="label">#新卒入社若手</label>
            <input id="job_occupation2" type="radio" name="job_occupation" value="#中途入社若手" ><label for="job_occupation2" class="label">#中途入社若手</label>
            <input id="job_occupation3" type="radio" name="job_occupation" value="#中堅" ><label for="job_occupation3" class="label">#中堅</label>
            <input id="job_occupation4" type="radio" name="job_occupation" value="#リーダー" ><label for="job_occupation4" class="label">#リーダー</label>
            <input id="job_occupation5" type="radio" name="job_occupation" value="#マネージャー" ><label for="job_occupation5" class="label">#マネージャー</label>
            <input id="job_occupation6" type="radio" name="job_occupation" value="#経営者・役員" ><label for="job_occupation6" class="label">#経営者・役員</label>
        </div>

        <div class="wrap">
            <p class="title">動画ジャンル<span class="req">必須</span></p>
            <input id="job_type1" type="radio" name="job_type" value="#インタビュー" ><label for="job_type1" class="label">#インタビュー</label>
            <input id="job_type2" type="radio" name="job_type" value="#オフィス" ><label for="job_type2" class="label">#オフィス</label>
            <input id="job_type3" type="radio" name="job_type" value="#仕事風景" ><label for="job_type3" class="label">#仕事風景</label>
            <input id="job_type4" type="radio" name="job_type" value="#チームワーク" ><label for="job_type4" class="label">#チームワーク</label>
        </div>

        <div class="wrap_profile">
            <p class="photo">画像の登録<span class="req">必須</span></p>
            <!-- <td class="preview_center"> -->
            <!-- <input id="job_profile" type="file" name="image_url" value=""> -->
            <td class="preview_center"><input id="job_profile" type="file" name="image_url" value=""><img id="job_profile_preview" class="job_profile_preview" src="/images/client_default.png"></td>
            <!-- <td class="preview_center"><input id="user_profile" type="file" name="image_url" value=""><img id="user_profile_preview" class="user_profile_preview" src="/images/user_default.png"></td> -->
            <!-- <td class="preview_center"><input id="client_profile" type="file" name="client_image_url" value=""><img id="client_profile_preview" class="client_profile_preview" src="/images/client_default.png"></td> -->
        </div>

        <input type="hidden" name="client_id" value="{{old('client_id')}}" placeholder="">

    </div>

    <div class="form-group">
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">
                案件を投稿する
            </button>
        </div>
    </div>

</form>

</div>



<!-- JSファイルの指定してください！ -->
<script src="{{ asset('js/job_post.js') }}"></script>
  


@endsection