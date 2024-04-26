<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check if the login view exists
        if(View::exists('index.v1.admin.auth.login')){
            // If exists, return the login view
            return view('index.v1.admin.auth.login');
        }else{
            // If not exists, abort with 404 error
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {   
        // Validate the request data
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required'
        ]);

        try{
            // Get user credentials
            $credentials = $request->only('email', 'password');
            // Retrieve user by email
            $user = Admin::where('email', $credentials['email'])->first();
            // Check if password is correct
            $passok=$user->password;
            $passhashed=Hash::make($credentials['password']);
            if (Auth::guard('admins')->attempt(['email' => $credentials['email'] , 'password' => $credentials['password']])) {
                // Generate and send verification code
                $pin = Str::random(6);
                $body = "verify code:";
                $req = $request->email;
        
                Mail::send('index.v1.admin.auth.email', ['pin' => $pin, 'body' => $body], function ($message) use ($request) {
                    $message->from('test@example.com', 'Your App');
                    $message->to($request->email, 'Your Name')->subject('verifay code');
                });
        
                // Store pin, email, and password in session
                session()->put('pin', $pin);
                session()->put('req', $req);
                session()->put('pass', $request->password);
        
                // Redirect to verification code page
                return redirect()->route('show.verifay.code');
                
        
            }
        }catch(\Exception $er){
            // Return error message
            return $er;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function verifayCode(Request $request)
    {
        // Validate verification code
        $request->validate([
            'code' => 'required'
        ]);

        // Get verification code from session
        $pin = session()->get('pin');

        if($request->code == $pin){

            $email = session()->get('req');
            $pass = session()->get('pass');
            $user = Admin::where('email', $email)->first();
            if (Auth::guard('admins')->attempt(['email' => $email , 'password' => $pass])) {
            
                Auth::guard('admins')->login($user);
    
                // Redirect to admin dashboard with success message
                return redirect()->route('admin-dashboard')->with('success', 'موفقیت آمیز');
               
            } else {
                // Redirect back with error message
                return back()->with('error', 'ناموفق');

            }

        }else{
            // Return 0 if verification code is incorrect
            return 0;
        }

    }

    /**
     * Display the specified resource.
     */
    public function showVerifayCode()
    {
        // Check if the verification code view exists
        if(View::exists('index.v1.admin.auth.verifay-code')){
            // If exists, return the verification code view
            return view('index.v1.admin.auth.verifay-code');
        }else{
            // If not exists, abort with 404 error
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function showDashboard()
    {
        // Check if the dashboard view exists
        if(View::exists('dashboard')){
            // If exists, return the dashboard view
            return view('dashboard');
        }else{
            // If not exists, abort with 404 error
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Not implemented
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Not implemented
    }
}

