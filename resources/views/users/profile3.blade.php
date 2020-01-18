@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
</head>

<!-- CSSファイルの指定をしてください〜 -->
<style>
body{
    background:#f7fdff;
    font-family: 'M PLUS 1p', sans-serif;
}
.col-sm-6{
    display: flex;
    justify-content: center;
}
.col-sm-6 p{
    line-height: 32px; 
}

.item-title{
    padding:5px;
    margin: 12px;
    font-size: 15px;
}

select,input{
    height: 35px;
    font-size: 15px;
    outline: none;
    resize: none;
    padding:5px;
    margin: 12px;
    border-radius: 4px;
    border: 1px solid rgb(168, 168, 168);
    width: 280px;
}

textarea{
    font-size: 15px;
    height:100px;
    padding:5px;
    margin: 12px;
    border-radius: 4px;
    border: 1px solid rgb(168, 168, 168);
    outline: none;
    resize: none;
    width:92%;
}

input[type=radio] {
    display: none;
}

label{
    display: block;
    float: left;
    width: 40px;
    height: 35px;
    line-height: 32px;
    padding-left: 5px;
    padding-right: 5px;
    margin:10px;
    color: gray;
    text-align: center;
    align-items:center;
    cursor: pointer;
    border: 1px solid rgba(128, 128, 128, 0.473);
    border-radius: 4px;
    background: #ffffff;
}
label:hover {
    background: #33afdf;
    color:lightgray;
}
input[type="radio"]:checked + label {
    background: #33afdf;
    color: #ffffff; 
    border: 1px solid rgb(240, 240, 240);
}
button{
    display: flex;
    justify-content: center;
    width: 400px;
    height: 60px;
    border-radius: 5px;
    background: #33afdf;
    font-size: 15px;
    font-weight: bold;
    letter-spacing:3px;
    color:#ffffff;
    margin: 30px auto 80px;
    user-select: none;
    outline: none;
    box-shadow: 1px 1px 4px rgb(66, 90, 97,0.8);
    cursor: pointer;
    font-family: 'M PLUS 1p', sans-serif;
}
button:hover{
    box-shadow: none;
    background: #33afdf;
}
.req{
    font-size: 8px;
    color:white;
    background:crimson;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    margin-top:3px;
    height: 12px;
    border-radius: 4px;
}
.opt{
    font-size: 8px;
    color:white;
    background:gray;
    letter-spacing:0px;
    padding:2px;
    margin-left:3px;
    margin-top:3px;
    height: 12px;
    border-radius: 4px;
}

tr{
    height: 30px;
    margin: 20px auto;
    letter-spacing:1px;
}

th{
    background:#c5e5f3;
    vertical-align: middle;
    height:50px;
    border-bottom: 1px solid rgba(21, 130, 163, 0.1);
    padding: 0 15px;

}

td{
    background:white;
    padding:20px 10px;
    vertical-align: middle;
    display: table-cell;
    text-align:left;
    align-items:center;
    border-bottom: 1px solid rgba(21, 130, 163, 0.1);
}
table{
    margin: 0 auto;
    display: flex;
    justify-content: center;
    border: 1px solid rgb(21, 130, 163, 0.3);
    border-radius: 5px;
    border-collapse: separate;
    box-shadow: 1px 1px 4px rgb(66, 90, 97,0.8);
    overflow: hidden;
    width:60%;
}

.container{
    margin: 20px auto;
    display: flex;
    justify-content: center;
}
.line img {
  width: 60%;
  display: flex;
  margin: 0 auto 35px;
}
.user_profile_preview {
    height: 70px;
    width: 70px;
    vertical-align: middle;
    border-radius: 35px;
    border: solid 1px #ddd;
}

@media screen and (max-width:800px) { 
    table {
        width:88%;
        font-size: 11px;
    } 
    tr{
        height: 30px;
        margin: 10px auto;
        letter-spacing:0px;
        }

    th{
        background:rgb(67,196,207,0.3);
        vertical-align: middle;
        border-bottom: 1px solid rgb(21, 163, 75,0.1);
        padding: 0 8px;
        line-height: 16px; 
    }

    td{
        background:white;
        padding: 10px;
        vertical-align: middle;
        display: table-cell;
        text-align:left;
        align-items:center;
        border-bottom: 1px solid rgb(67,196,207,0.3);
        width:65%;
    }
    select,input{
        height: 30px;
        outline: none;
        resize: none;
        padding:5px;
        margin: 5px;
        border-radius: 4px;
        border: 1px solid rgb(168, 168, 168);
        width: 95%;
    }

    textarea{
        height:130px;
        padding:5px;
        margin: 5px;
        border-radius: 4px;
        border: 1px solid rgb(168, 168, 168);
        outline: none;
        resize: none;
        width:92%;
    }

    label{
        font-size:13px;
        margin:0 10px 0 0;
        height: 30px;
        line-height: 30px;
    }
    form{
        margin: 0 auto;
    }
    .line img {
        width: 90%;
        display: flex;
        margin: 0 auto 15px;
    }
    button{
        font-size: 12px;
    width: 300px;
    height: 40px;
    }

    .user_profile_preview {
    height: 50px;
    width: 50px;
    vertical-align: middle;
    border-radius: 25px;
    margin: auto;
    text-align: center;
    }

    .preview_center {
        text-align: center;
    }

}
</style>

<!-- CSSファイルの指定をしてください〜 -->
@section('content')
@include('layouts/header')


<div class="container">
    <!-- この中にコンテンツ -->

    <div class="line">
        <img src="{{ asset('images/pic3.png') }}" alt="">
    </div>
<form action="{{ url('profile3Store') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}
    <table>
        <tr>
            <th>プロフィール画像<span class="opt">任意</span></th>        
            <td class="preview_center"><input id="user_profile" type="file" name="image_url" value=""><img id="user_profile_preview" class="user_profile_preview" src="/images/user_default.png"></td>
            
        </tr>
        <!-- <tr>
            <th>前職の会社名<span class="opt">任意</span></th>
            <td><input type="text" name="last_company" value="" placeholder="前職の会社名"></td>
        </tr>

        <tr>
            <th>前職の部署名<span class="opt">任意</span></th>
            <td><input type="text" name="last_company_dept" value="" placeholder="前職の部署名"></td>
        </tr>

        <tr>
            <th>前職の役職<span class="opt">任意</span></th>
            <td><input type="text" name="last_company_position" value="" placeholder="前職の役職"></td>
        </tr>

        <tr>
            <th>前職の就業(開始)<span class="opt">任意</span></th>
            <td><input type="date" name="last_company_since" value="" placeholder="期間年・期間月から"></td>
        </tr>
        
        <tr>
            <th>前職の就業(終了)<span class="opt">任意</span></th>
            <td><input type="date" name="last_company_until" value="" placeholder="期間年・期間月まで"></td>
        </tr> -->

        <tr>
            <th>生年月日<span class="opt">任意</span></th>
            <td><input type="date" name="birthday" value="" placeholder="生年月日"></td>
        </tr>

        <tr>
            <th>最終学歴<span class="opt">任意</span></th>
            <td><input type="text" name="last_degree" value="" placeholder="最終学歴"></td>
        </tr>

        <!-- <tr>
            <th>学校名<span class="opt">任意</span></th>
            <td><input type="text" name="last_school" value="" placeholder="学校名"></td>
        </tr>

        <tr>
            <th>学部・学科<span class="opt">任意</span></th>
            <td><input type="text" name="last_school_dept" value="" placeholder="学部・学科"></td>
        </tr> -->

        <tr>
            <th>性別<span class="opt">任意</span></th>
            <td>
                <input id="gender1" type="radio" name="gender" value="男性"><label for="gender1" class="label">男性</label>
                <input id="gender2" type="radio" name="gender" value="女性"><label for="gender2" class="label">女性</label>
            </td>
        </tr>

        <!-- <tr>
            <th>言語(日本語以外)<span class="opt">任意</span></th>
            <td><input type="text" name="language" value="" placeholder="得意な言語（日本語以外）"></td>
        </tr>

        <tr>
            <th>資格・免許<span class="opt">任意</span></th>
            <td><input type="text" name="licence" value="" placeholder="資格・免許"></td>
        </tr>

        <tr>
            <th>簡単な経歴<span class="opt">任意</span></th>
            <td><textarea name="last_company_exp" value="" placeholder="例) 自社が運営するWebサービスのデジタルマーケティングを行ってきました。（SEO/SEMの企画からSNSの運用まで）"></textarea></td>
        </tr> -->

        </table>
    <button type="submit" class="">次へ　＞</button>
</form>   

</div>



<!-- JSファイルの指定してください！ -->

<script src="{{ asset('js/profile3.js') }}"></script>

<!-- JSファイルの指定してください！ -->

@endsection
