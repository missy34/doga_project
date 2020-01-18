<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Validator;
use App\User;
use App\Client;
use App\Job;
// use App\Suggestion;
// use App\MessagesRoom;
// use App\AssessmentUser;


class ClientController extends Controller
{

    //クライアントの基本情報（postから）
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_name'    => 'required',
            'client_loginid' => 'required',
            'client_pass'    => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $clients = new Client;
        $clients->client_name = $request->client_name;
        $clients->client_loginid = $request->client_loginid;
        $clients->client_pass = $request->client_pass;

        if ($request->client_pass == $request->client_pass_confirm) {
            $clients->client_pass = $request->client_pass;
        } else {
            return redirect('/clients/register_form');
        }
   
        $clients->save();
        //client_idをセッションに保存
        // $request->session()->put('client_id', $request->client_id);
        $request->session()->put('id', $clients->id);
        return redirect('/clients/post2');
    }



    public function registerForm()
    {
        return view('clients/post');
    }

    public function post2()
    {
        return view('clients/post2');
    }


    
    //クライアントの基本情報（post2から）
    public function profileUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client_loc' => 'required',
            'client_url' => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        //セッションから取得
        $value = $request->session()->get('id');

        // 以下に登録処理を記述（Eloquentモデル）
        $clients = Client::where('id', $value)->first();
        $clients->client_loc = $request->client_loc;
        $clients->client_url = $request->client_url;
        $clients->client_biz = $request->client_biz;
        $clients->client_num_emp = $request->client_num_emp;

        // プロフィール画像保存
        $clients->client_image_url = $request->file('client_image_url')->store('public/client_profile_image');
        $clients->client_image_url = str_replace('public/', '/storage/', $clients->client_image_url);

        $clients->save();
        // $request->session()->put('id', $request->id);
        $request->session()->put('id', $clients->id);
        return redirect('/clients/home');
    }


    public function ClientLogin(Request $request)
    {
        // $this->validate($request,[
        // 'client_id' => 'required',
        // 'client_pass' => 'required|min:4'
        // ]);
       
        $clients = Client::where('client_loginid', $request->client_loginid)->first();

        if ($clients->client_pass === $request->client_pass) {
            $request->session()->put('id', $clients->id);
            return redirect('/clients/home');
        } else {
            return redirect()->back();
        }
       
        // if(Client::attempt(['client_id' => $request->client_id, 'client_pass' => $request->client_pass])){
        // return redirect('/clients/home');
        // }
        // return redirect()->back();
    }

    //clients/homeを表示
    public function clientHome(Request $request)
    {
        $value = $request->session()->get('id');
        $clients = Client::where('id', $value)->first();


        return view('clients/home');
        
        // $jobs = Job::where('client_id', $value)->paginate(5);
        // return view('clients/home', ['jobs' => $jobs,'clients' => $clients]);

        //セッションでclient_idを投げる
        $request->session()->put('id', $request->id);
    }



}
