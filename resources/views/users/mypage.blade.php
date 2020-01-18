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


</style>
<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
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
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">

                <img alt="logo" class="logo" src="{{ asset('/images/hanpo-logo-white.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">求人の特徴を動画で見る</h1>
            <p class="lead text-muted">企業や求人本来の特徴をリアルに知れる。<br>それが「hanpo」です。<br>あなたの新しい半歩を応援しています。</p>
            <p>
                <a href="#" class="btn btn-primary my-2">求人を探す</a>
                <a href="#" class="btn btn-secondary my-2">自己PR動画を投稿</a>
            </p>
        </div>
    </section>



    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <!-- <iframe  class="card-img-top" src="https://www.youtube.com/embed/3vLgwLb9IUQ?autoplay=1" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <!-- <video src="https://www.youtube.com/watch?v=x0jALfq_tn0" class="card-img-top" loop autoplay muted></video> -->
                    <img class="card-img-top" src="https://den8lgfpmzfo0.cloudfront.net/photo/3935/480/275809" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社CDC</p>
                            <p class="tag">
                                <span class="mark1">#法人営業</span>
                                <span class="mark2">#リーダー</span>
                                <span class="mark3">#エモい</span>
                                <span class="mark4">#VISION</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://den8lgfpmzfo0.cloudfront.net/photo/3935/normal/303001" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社キャリアITパートナーズ</p>
                                <p class="tag">
                                    <span class="mark1">#マーケティング</span>
                                    <span class="mark2">#働くママ</span>
                                    <span class="mark3">#職場環境</span>
                                    <span class="mark4">#オフィス</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://www.starbucks.co.jp/recruit/employment/images/shinsotsu/p1_sp.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社グローカル</p>
                                <p class="tag">
                                    <span class="mark1">#社長</span>
                                    <span class="mark2">#経営理念</span>
                                    <span class="mark3">#職場環境</span>
                                    <span class="mark4">#地方創生</span>
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
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://den8lgfpmzfo0.cloudfront.net/photo/3935/normal/275237" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社UNIAS</p>
                                <p class="tag">
                                    <span class="mark1">#チームワーク</span>
                                    <span class="mark2">#仕事内容</span>
                                    <span class="mark3">#最先端</span>
                                    <span class="mark4">#オフィス</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://s3-ap-northeast-1.amazonaws.com/paiza-webapp/recruiters/photo_mains/000/004/260/medium/%E3%83%A1%E3%83%87%E3%82%A3%E3%82%A2%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0.jpg?1559095728" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">セットアップ株式会社</p>
                            <p class="tag">
                                <span class="mark1">#管理職</span>
                                <span class="mark2">#VISION</span>
                                <span class="mark3">#プログラマー</span>
                                <span class="mark4">#オフィス</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://den8lgfpmzfo0.cloudfront.net/photo/3935/480/121087" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社リンクワン</p>
                                <p class="tag">
                                    <span class="mark1">#スタートアップ</span>
                                    <span class="mark2">#社風</span>
                                    <span class="mark3">#プログラマー</span>
                                    <span class="mark4">#職場環境</span>
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
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiwBVoSvhwlKthRtblwlRdDQ3iUxk-UswAZthX0hW1qPQCqXdV&s" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社三島物産</p>
                                <p class="tag">
                                    <span class="mark1">#老舗</span>
                                    <span class="mark2">#ロボット</span>
                                    <span class="mark3">#グローバル</span>
                                    <span class="mark4">#職場環境</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://www.studio-woofoo.net/wp-content/uploads/DSC_5242_3-1-960x639.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社キャリアデザインセンター</p>
                                <p class="tag">
                                    <span class="mark1">#スタートアップ</span>
                                    <span class="mark2">#人事</span>
                                    <span class="mark3">#オフィス</span>
                                    <span class="mark4">#職場環境</span>
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
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="https://lh4.googleusercontent.com/ZNpxL0cYW6_s3HgujW-av-Of7IkbBhLeM0XSqVZG-ST8ZBxqkVxiyMNocfyeQu06IrjH2cq1xHhDJ-EP6CPe8cR8ykqpVCEEsDnrdm2gnQRSgGqPgddZVq3Aidpq4fE1yKk3lDN3" alt="Card image cap">
                        <div class="card-body">
                            <p class="company">株式会社グロース・コンサルティング</p>
                                <p class="tag">
                                    <span class="mark1">#コンサルタント</span>
                                    <span class="mark2">#仕事内容</span>
                                    <span class="mark3">#オフィス</span>
                                    <span class="mark4">#職場環境</span>
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
                </div>
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
