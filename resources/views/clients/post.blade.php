@include('layouts/header')
@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/???.css') }}">
    <!-- CSSファイル指定してください -->
</head>

<style>
body{
    background:#f7fdff;
    font-family: 'M PLUS 1p', sans-serif;
}
.container {
  width: 100%;
}

.container h1{
    text-align: center;
    margin:50px auto;
    font-size: 18px;
    font-weight: bold;
    letter-spacing:1px;
}
.client_form{
    margin-top: 20px;
    margin-bottom: 20px;
}
.client_form label{
    padding-left:40px;

}
.client_form input{
    display: flex;
    justify-content: center;
    margin: 12px auto;
    height: 35px;
    font-size: 15px;
    outline:none;
    resize:  none;
    padding: 5px;
    border-radius: 3px;
    border: 1px solid rgb(168, 168, 168);
    width: 80%;
    font-family: 'M PLUS 1p', sans-serif;
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
.con{
    width: 75%;
    background: #ffffff;
    margin: 30px auto;
    padding: 15px 5px;
    border-radius: 5px;
    box-shadow: 0px 1px 5px rgb(168, 168, 168,0.7);
}

.line img {
        width: 85%;
        display: flex;
        margin: 25px auto 18px;
    }
@media screen and (min-width: 781px) {
    .client_form input{
        display: flex;
        justify-content: center;
        margin: 12px auto;
        height: 35px;
        font-size: 15px;
        outline:none;
        resize:  none;
        padding: 5px;
        border-radius: 3px;
        border: 1px solid rgb(168, 168, 168);
        width: 80%;
    }
    .client_form label{
    padding-left:60px;

}

    .con{
        width: 45%;
        background: #ffffff;
        margin: 30px auto;
        padding: 20px 5px 30px;
        border-radius: 5px;
        box-shadow: 0px 1px 5px rgb(168, 168, 168,0.7);
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
        <img src="{{ asset('images/pic4.png') }}" alt="">
    </div>

    @include('common.errors')
    <div class="con">
    <form action="{{ url('clientsRegister') }}" method="POST" class="">
    {{ csrf_field() }}
        <div class="form-group">
            <div class="client_form">
                <label for="client_name" class="client_form_title">会社名</label>
                <input type="text" name="client_name" value="{{old('client_name')}}" class="form-control" placeholder="" required>
            </div>
            <!-- <div class="client_form">
                <label for="client_kana" class="client_form_title">会社名（カナ）:</label>
                <input type="text" name="client_kana" value="{{old('client_kana')}}" class="form-control" placeholder="例)ドージョー" required>
            </div> -->
            <div class="client_form">
                <label for="client_id" class="client_form_title">メールアドレス（ログインID）</label>
                <input type="text" name="client_loginid" value="{{old('client_id')}}" class="form-control" placeholder="" required>
            </div>
            <div class="client_form">
                <label for="client_pass" class="client_form_title">パスワード</label>
                <input type="password" name="client_pass" value="" class="form-control" placeholder="" required>
            </div>
            <div class="client_form">
                <label for="client_pass" class="client_form_title">パスワード（確認）</label>
                <input type="password" name="client_pass_confirm" value="" class="form-control" placeholder="" required>
            </div>
        </div>

    </div>

        <div class="form-group">
            <div class="col-sm">
                <button type="submit" class="btn btn-primary">
                会員登録(無料)
                </button>
            </div>
        </div>
        </form>
</div>

<!-- JSファイルの指定してください！ -->
<script src="{{}}"></script>
<!-- JSファイルの指定してください！ -->

@endsection
