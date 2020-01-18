<?php
use App\User;
use App\Job;
use App\Client;

//おすすめユーザーは本来条件付けしたほうがいい
//おすすめのユーザー5人
// $users = User::take(8)->get();
$id=session()->get('id');
// $jobs1 = Job::where('client_id', $id)->where('job_status', 1)->get();//募集中
// $jobs2 = Job::where('client_id', $id)->where('job_status', 2)->get();//進捗中
// $jobs3 = Job::where('client_id', $id)->where('job_status', 3)->get();//終了（評価待ち）
// var_dump($jobs);
// var_dump($jobs1);
// echo $id;
// var_dump($id);

// $jobs = Job::where('client_id',$id)->get();
// echo $jobs;
// $jobs2= $jobs->where('job_status',2)->get();
// echo $jobs2;

// echo count($jobs);
// echo count($jobs2);
// echo count($jobs1);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>hanpo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
  </head>
<style>
body{
    font-family: 'M PLUS 1p', sans-serif;
    background:#f7fdff;
}
.nav-logo img{
    width: 85px;
    padding:0;
    margin:0;
}
.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,0.8);
}
.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(51, 175, 223); 
}
.pjt_post{
    background-color: transparent;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 0;
        appearance: none;
        color: rgba(0,0,0,0.8);
}
.pjt_post:hover{
    color: rgba(51, 175, 223); 
}
.dropdown-item{
    font-size:13px;
    height: 40px;
    line-height: 30px;
}
.jumbotron {
    background-color: white;
    margin: 30px 0;
    box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
}
.jumbotron h1{
    font-size: 30px;
    padding: 20px;
    font-weight: bold;
}
.lead{
    font-size: 20px;
    padding: 10px 20px 30px;
}
.col-lg-4{
    background-color:white;
    border-radius: 2px;
    box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
    margin: 0 15px 15px;
}
.col-lg-4 p{
    font-size:13px;
}
.col-lg-4 h2{
    font-size: 18px;
    font-weight: bold;
    padding-top: 20px;
    padding-bottom: 20px;
}
.col-lg-4 i{
    color:#33afdf;
    font-size:12px;
}
.container {
    width: 100%;
}
.jumbotron .btn {
    padding: 14px 24px;
    font-size: 21px;
    background-color: rgba(51, 175, 223)!important;
    border-color: rgba(51, 175, 223)!important;
}

.btn{
    padding:15px;
    color:#ffffff;
    border-color:rgba(51, 175, 223); 
    background: rgba(51, 175, 223); 
    box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    margin:20px 0px;
    padding:10px;
}
.btn-primary{
    color: #fff;
    background-color: rgb(160, 160, 160);
    border-color: rgb(160, 160, 160);
}
.btn-primary:hover{
    background-color: gray;
    border-color: gray;
    text-shadow: 1px 1px 1px #5f5f5f;
}

.carousel-item h1{
    font-weight: bold;
    font-size:20px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.9);
}
.carousel-item p{
    text-shadow: 2px 1px 2px rgba(0,0,0,0.4);
}
body{
    background:#f2feff;
    padding-top: 0rem;
    color: #5a5a5a;
    font-family: 'M PLUS 1p', sans-serif;
}
.contains{
    display: flex;
    justify-content: center;
    margin:20px auto;
    width:100%;
}
.contain{
    display:inline-block;
}
.pjts{
    float: left;
    position: relative;
    width:150px;
    text-align: center;
    height:220px;
    margin:20px 10px 30px 10px;
    overflow: hidden;
    box-shadow: 2px 2px 4px rgb(82, 147, 151);
}
.pjts:hover{
    opacity:0.6;
}
.pjt img{
    width:150px;
}
.info{
    position: absolute;
    top: 68%;
    left: 50%;
    width:150px;
    height:150px;
    padding: 10px;
    background: white;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}
.pjt_term{
    font-size: 13px;
    color: rgba(51, 175, 223); 
    margin:5px 0 10px;

}
.pjt_title{
    font-size: 13px;
    margin:5px 0 5px;
}
.pjt_name{
    font-size: 10px;
    margin:5px 0 5px;
}

.line{
    padding-top:20px;
}
.line h1{
    padding-top:20px;
    text-align: center;
    height: 60px;
    line-height: 50px;
    font-size: 18px;
    font-weight: bold;
    letter-spacing:1px;
}

.line h2{
    text-align: center;
    background: rgba(51, 175, 223); 
    height: 5px;
    width:50px;
    margin:  20px auto;
    border-radius: 50px;
}
.carousel-item h1{
    font-weight: bold;
}
.carousel-control-next:hover{
    background: rgb(51, 175, 223, 0.2);
}
.carousel-control-prev:hover{
    background: rgb(51, 175, 223, 0.2);
}
.link{
    color: #575757;
}
.skill{
    position: absolute;
    background: rgba(51, 175, 223); 
    color: white;
    top: -38%;
    left: 29%;
    font-size: 10px;
    border-radius: 10px;
    padding: 6px;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
}

@media screen and (min-width: 781px) {
    .contains{
        display: flex;
        justify-content: center;
        margin:20px auto;
        width:100%
    }
    .pjts{
        float: left;
        position: relative;
        width:255px;
        text-align: center;

        height:220px;
        margin:20px 10px 30px 10px;
        overflow: hidden;
        box-shadow: 2px 2px 4px rgb(82, 147, 151);
    }

    .pjt img{
        width:255px;
    }
    .info{
        position: absolute;
        top: 73%;
        left: 50%;
        width:256px;
        height: 120px;
        padding: 10px;
        background: white;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .skill {
        position: absolute;
        background: rgba(51, 175, 223); 
        color: white;
        top: -67%;
        left: 21%;
        font-size: 11px;
        border-radius: 10px;
        padding: 7px;
        -ms-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }
    .col-lg-4{
        background-color:white;
        border-radius: 2px;
        box-shadow: 0px 0px 3px rgb(82, 147, 151,0.5);
        flex: 0 0 31%;
        max-width: 30%;
        margin: 0 auto;
    }
}
@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
    width:90%;
  }

}
.rounded {
    border-radius: .0rem!important; 
}

</style>

@include('layouts/header')
@extends('layouts.app')
@section('content')

<div class="container">

    <div class="jumbotron">
        <h1>求人動画を投稿する</h1>
        <p class="lead">ユーザーに対してPR動画を投稿</p>
        <p><a class="btn btn-lg btn-success" href="{{ url('jobs/in')}}" role="button">公募する</a></p>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <h2><i class="fas fa-project-diagram"></i> スカウトする</h2>
            <p>求人に当てはまる候補者を探して、スカウトする</p>
            <p><a class="btn btn-primary" href="/jobs/list" role="button">詳しく見る &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2><i class="fas fa-comment-alt"></i> 投稿動画の確認</h2>
            <p>投稿した求人動画を確認・修正する</p>
            <p><a class="btn btn-primary" href="" role="button">詳しく見る &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <h2><i class="fas fa-user-check"></i> 応募者の確認</h2>
            <p>求人に応募している候補者を確認する</p>
            <p><a class="btn btn-primary" href="#recomend_users" role="button">詳しく見る &raquo;</a></p>
        </div>
    </div>
</div>
<!-- JSファイルの指定してください！ -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script> -->

@endsection
