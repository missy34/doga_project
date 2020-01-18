<?php
use App\User;
use App\Job;
use App\Client;

//おすすめユーザーは本来条件付けしたほうがいい
$users = User::take(8)->get();
$id=session()->get('id');
$jobs1 = Job::where('client_id', $id)->where('job_status', 1)->get();//募集中
$jobs2 = Job::where('client_id', $id)->where('job_status', 2)->get();//進捗中
$jobs3 = Job::where('client_id', $id)->where('job_status', 3)->get();//終了（評価待ち）

// $jobs = Job::where('client_id',$id)->get();
// echo $jobs;
// $jobs2= $jobs->where('job_status',2)->get();
// echo $jobs2;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
    <title>hanpo</title>
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
</head>
<style>
 body{
    font-family: 'M PLUS 1p', sans-serif;
    /* background:#f7fdff; */
 }

.bg-dark {
    background-color: #33afdf!important;
    box-shadow: 1px 1px 20px rgb(66, 90, 97,0.8)!important;
}

.navbar-brand img {
  height: 40px;
}
.tag span{
    color:#33afdf;
    font-size:11px;
    padding:2px 6px;
    border: 0.5px solid #33afdf;
    border-radius: 20px;
}

.jumbotron-heading{
    font-size: 25px;
}

.text-muted{
    font-size: 15px; 
}


/* モーダルここから */
.overlay{
    display:none;
    width:100%;
    height:100%;
    background: rgba(0,0,0,0.6);
    position:fixed;
    z-index:1;
    top:0;
    left:0;
}
.btn_area{
    width:350px;
    height:200px;
    position:absolute;
    top:50%;
    left:50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    border-radius: 5px;
    background-color:#fff;
    z-index:2;
}
.btn_area p{
    padding: 50px 20px 25px;
    text-align: center;
}
.close_btn{
    display: flex;
    justify-content: center;
    margin: 20px auto;
    background: #33afdf;
    width: 200px;
    height: 40px;
    align-items:center;
    color:white;
    border-radius: 5px;
}
/* モーダルここまで */


.line{
    padding-bottom:20px;
}
.line h1{
    line-height: 50px;
    text-align:center;
    font-size: 18px;
    font-weight: bold;
    letter-spacing:1px;
    margin-bottom:20px;
    /* background:linear-gradient(transparent 20%, lightgray 100%) */
}

.line h2{
    text-align: center;
    background: #33afdf;
    height: 5px;
    width:50px;
    margin: 0 auto 20px;
    border-radius: 50px;
}

.col-md-4 .card:hover{
    opacity: 0.8;
}

.link{
    color: rgb(100, 100, 100);
    text-decoration: none;
}
.link:hover{
    text-decoration: none;
}



</style>
<body>

<header>
    <!-- <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About me</h4>
                    <p class="text-muted">仕事選びにおいて、組織の文化や一緒に働く上司・同僚の特徴がわからず、入社後にミスマッチが起こってしまうのが現状です。テキストや写真だけでなく、企業や求人本来の特徴を動画で知ることが出来る、それが「hanpo」です。あなたの新しい半歩を踏み出すことを応援しています。</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">会社概要</a></li>
                        <li><a href="#" class="text-white">サービス概要</a></li>
                        <li><a href="#" class="text-white">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/clients/home" class="navbar-brand d-flex align-items-center">
                <img alt="logo" class="logo" src="{{ asset('/images/hanpo-logo-white.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="line">
                <h1>投稿中の求人動画</h1>
                <h2>　　</h2>
            </div>

            <div class="row">
            @if (count($jobs1) > 0)
            @for ($i=0;$i<@count($jobs1);$i++)
                <div class="col-md-4">

                    <a href="{{ url('jobs/jobUpdate/'.$jobs1[$i]->id)}}" class="link">
                    {{ csrf_field() }}
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{$jobs1[$i]->image_url}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">{{$jobs1[$i]->job_title}}</p>
                            <p class="tag">
                                <span class="mark1">{{$jobs1[$i]->job_position}}</span>
                                <span class="mark2">{{$jobs1[$i]->job_occupation}}</span>
                                <span class="mark3">{{$jobs1[$i]->job_type}}</span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                    </a>

                </div>
                @endfor
                @endif

            </div>

        <div class="container">
            <div class="line">
                <h1>一時停止中の求人動画</h1>
                <h2>　　</h2>
            </div>

            <div class="row">
            @if (count($jobs2) > 0)
            @for ($i=0;$i<@count($jobs2);$i++)
                <div class="col-md-4">

                    <a href="{{ url('jobs/jobUpdate/'.$jobs2[$i]->id)}}" class="link">
                    {{ csrf_field() }}
                    <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{$jobs2[$i]->image_url}}" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">{{$jobs2[$i]->job_title}}</p>
                            <p class="tag">
                                <span class="mark1">{{$jobs2[$i]->job_position}}</span>
                                <span class="mark2">{{$jobs2[$i]->job_occupation}}</span>
                                <span class="mark3">{{$jobs2[$i]->job_type}}</span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                    </a>

                </div>
                @endfor
                @endif

            </div>

        </div>
    </div>
</main>



<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>会社概要</p>
        <p>サービス概要</p>
        <p>お問い合わせ</p>
    </div>
</footer>


<div class="overlay">
    <div class="btn_area">
        <!-- <h2>プロフィールの登録が完了しました！</h2> -->
        <p>プロフィールの登録が完了しました！</p>
        <div class="close_btn">OK</button>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- <script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script type="text/javascript">
    $(function(){
        $(".overlay").show();
        $.cookie('btnFlg') == 'on'?$(".overlay").hide():$(".overlay").show();
        $(".close_btn,.overlay").click(function(){
            $(".overlay").fadeOut();
            $.cookie('btnFlg', 'on', { expires: 30,path: '/' }); //cookieの保存
        });
    });
</script>


</body>

</html>
