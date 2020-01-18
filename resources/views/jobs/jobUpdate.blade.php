<?php
use App\Job;

$id=session()->get('id');
// $jobs1 = Job::where('client_id', $id)->where('job_status', 1)->first();


?>

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
    margin: 50px auto;
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
.button{
    display: flex;
    justify-content: center;
    width: 45%;
    height: 50px;
    border-radius: 4px;
    background: rgb(113, 188, 223);
    font-size: 16px;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
.button:hover{
    box-shadow: none;
    background: rgb(51, 175, 223);
    font-weight: bold;
}

.btn{
    display: flex;
    justify-content: center;
    width: 45%;
    height: 50px;
    border-radius: 4px;
    background: rgb(180, 180, 180);
    font-size: 16px;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto;
    user-select: none;
    outline: none;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
.btn:hover{
    box-shadow: none;
    background: rgb(160, 160, 160);
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
.wrap_profile img{
    width: 100%;
    padding-bottom: 30px;
}
@media screen and (min-width: 781px) {
    .wraps{
        width: 45%;

    }
    .wrap{
        margin-bottom:30px;
    }
    body,label{
        font-size:14px;
    }
    input{
        display: flex;
        justify-content: center;
        height: 40px;
        font-size: 14px;
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
}

@media screen and (min-width: 1040px) {
  .container {
    width: 1040px;
    margin: auto;
  }
}

h3{
    font-size: 18px;
    font-weight: bold;
}
.tag span{
    color:#33afdf;
    font-size:11px;
    padding:2px 6px;
    border: 0.5px solid #33afdf;
    border-radius: 20px;
}

</style>


@section('content')

    <div class="wraps">

        <div class="wrap">
            <p class="title">タイトル</p>
            <h3>{{$job->job_title}}</h3>
        </div>

        <div class="wrap_profile">
            <!-- <p class="photo">動画</p> -->
            <img src="{{$job->image_url}}" alt="">
        </div>

        <div class="tag">
            <span class="mark1">{{$job->job_position}}</span>
            <span class="mark2">{{$job->job_occupation}}</span>
            <span class="mark3">{{$job->job_type}}</span>
        </div>

        <input type="hidden" name="client_id" value="{{old('client_id')}}" placeholder="">
    </div>


    <form action="{{ url('jobs/jobEdit/'.$job->id)}}" method="POST">
        {{ csrf_field() }}
        <button type="submit" class="button btn-primary">
            求人動画の編集
        </button>
    </form>


    <form action="{{ url('jobs/jobStop/'.$job->id)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$job->id}}" placeholder="">
        <button type="submit" class="btn btn-primary">
            求人掲載を一時停止する
        </button>
    </form>

    <form action="{{ url('jobs/jobDelete/'.$job->id)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$job->id}}" placeholder="">
        <button type="submit" class="btn btn-primary">
            この動画を削除する
        </button>
    </form>








<!-- JSファイルの指定してください！ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="">
</script>



@endsection