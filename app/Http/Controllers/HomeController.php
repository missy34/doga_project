<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
// use App\Job;
// use App\Suggestion;
// use App\Client;
// use App\AssessmentClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout()
    {
        Auth::logout();
        return redirect('index.html');
    }

    public function index()
    {
        return view('home');
    }

    public function profile_view(Request $request)
    {
        $uid = Auth::id();
        return view('users/profile2', ['uid'=>$uid]);
    }

    public function profile3(Request $request)
    {
        //バリデーション
        // $validator = Validator::make($request->all(), [
        //     ‘id’ => ‘required’,
        // ]);
        //バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect(‘welcome’)
        //         ->withInput()
        //         ->withErrors($validator);
        // }
        $uid = Auth::id();
        $users = User::find($uid);

        // $users->prefectures = $request->prefectures;
        $users->exp_business = $request->exp_business;
        $users->exp_job = $request->exp_job;
        // $users->phone = $request->phone;
        $users->exp_company = $request->exp_company;
        $users->exp_department = $request->exp_department;
        $users->exp_position = $request->exp_position;
        $users->exp_start = $request->exp_start;
        $users->exp_end = $request->exp_end;
        $users->current = $request->current;
        $users->save();

        return view('users/profile3', ['uid'=>$uid,'user'=>$users]);
    }

    //profile3を保存
    public function profile3Store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        //   'last_company' => 'required',
        //   'last_company_dept' => 'required',
        //   'last_company_position' => 'required',
        //   'last_company_since' => 'required',
        //   'last_company_since' => 'required',
        //   'last_company_until' => 'required',
        //   'birthday' => 'required',
        //   'last_degree' => 'required',
        //   'last_school'=> 'required',
        //   'last_school_dept' => 'required',
        //   'gender' => 'required',
        //   'language' => 'required',
        //   'licence' => 'required',
        //   'last_company_exp' => 'required'

    ]);
        $uid = Auth::id();
        $users = User::find($uid);
        
        $users->birthday = $request->birthday;
        $users->last_degree = $request->last_degree;
        $users->gender = $request->gender;

        // $users->last_company = $request->last_company;
        // $users->last_company_dept = $request->last_company_dept;
        // $users->last_company_position = $request->last_company_position;
        // $users->last_company_since = $request->last_company_since;
        // $users->last_company_since = $request->last_company_since;
        // $users->last_company_until = $request->last_company_until;
        // $users->last_school = $request->last_school;
        // $users->last_school_dept = $request->last_school_dept;
        // $users->language = $request->language;
        // $users->licence = $request->licence;
        // $users->last_company_exp = $request->last_company_exp;
        
        $users->image_url = $request->file('image_url')->store('public/user_profile_image');
        $users->image_url = str_replace('public/', '/storage/', $users->image_url);
        
        
        $users->save();
        return view('users/mypage', ['uid'=>$uid,'user'=>$users]);
        // return redirect('/home');
    }


}
