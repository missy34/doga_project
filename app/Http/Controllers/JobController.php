<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

use Validator;
use App\User;
use App\Client;
use App\Job;



class JobController extends Controller
{
    //jobsを保存
    public function jobIn(){
        return view('jobs/post');
    }


    public function jobPost(Request $request){
        //セッションから取得
        $value = $request->session()->get('id');

        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_occupation' => 'required',
            'job_position' => 'required',
            'job_type' => 'required',
        ]);
    
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $jobs = new Job;
        $jobs->job_title      = $request->job_title;
        $jobs->job_occupation = $request->job_occupation;
        $jobs->job_position   = $request->job_position;
        $jobs->job_type       = $request->job_type;

        $jobs->image_url = $request->file('image_url')->store('public/job_profile_image');
        $jobs->image_url = str_replace('public/', '/storage/', $jobs->image_url);
 
        //job_statusに1（募集中）を代入
        $jobs->job_status = 1;
        
        //セッションで受け取ったclient_idをJobテーブルに保存
        $jobs->client_id = $value;
        $jobs->save();
        return view('/jobs/list');
    }


    public function jobUpdate(Job $jobs){
        // $value = $jobs->client_id;
        // $clients = Client::where('id', $value)->first();
        return view('jobs/jobUpdate',['job'=>$jobs]);
    }


    public function jobEdit(Job $jobs){
        return view('jobs/jobEdit', ['job' => $jobs]);
    }


    public function jobNew(Request $request){
        
        $validator = Validator::make($request->all(), [
            'job_title' => 'required',
            'job_occupation'   => 'required',
            'job_position' => 'required',
            'job_type' => 'required',
        ]);
            if ($validator->fails()) {
                return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
        }
        // 以下に登録処理を記述（Eloquentモデル）
        $jobs = Job::find($request->id);
        $jobs->job_title     = $request->job_title;
        $jobs->job_occupation= $request->job_occupation;
        $jobs->job_position  = $request->job_position;
        $jobs->job_type      = $request->job_type;
        $jobs->image_url     = $request->file('image_url')->store('public/job_profile_image');
        $jobs->image_url     = str_replace('public/', '/storage/', $jobs->image_url);
        $jobs->save();
        // $request->session()->put('id', $request->id);
        // $request->session()->put('id', $jobs->id);
        // $value = $request->session()->get('id');
        $value = $request->session()->get('id');
        //セッションで受け取ったclient_idをJobテーブルに保存
        $jobs->client_id = $value;
        $jobs->save();
        return view('/jobs/list');
    }


    public function jobStop(Request $request){

        $jobs = Job::find($request->id);
        $jobs->job_status = 2;
        $jobs->save();

        $value = $request->session()->get('id');
        $jobs->client_id = $value;
        $jobs->save();
        return view('/jobs/list');
    }
    

    public function jobDelete(Request $request){

        $jobs = Job::find($request->id);
        $jobs->job_status = 3;
        $jobs->save();

        $value = $request->session()->get('id');
        $jobs->client_id = $value;
        $jobs->save();
        return view('/jobs/list');
    }

}