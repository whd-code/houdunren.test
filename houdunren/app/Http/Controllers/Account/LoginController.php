<?php

namespace App\Http\Controllers\Account;


use App\Rules\AccountRule;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct (){
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function index()
    {
        return view('account.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,UserService $userService)
    {
        // return 'login';
         $request->validate([
            'account'=>['required',$this->accountValidate()],
            'password'=>['required','min:3'],
            'captcha'=>['required','captcha'],
        ]
        );

       $islogin= Auth::attempt([$this->username()=>$request->account,'password'=>$request->password],(bool) $request->remember);
    //    dd($islogin);
    if($islogin){
        return redirect()->intended('/');
    }
    return back()->with('danger','账号密码错误');
    }


    public function show($id)
    {
        //
    }
    public function logout(){
        // dd(123);
        Auth::logout();
        return redirect('/');
    }


}
