<?php

namespace app\http\Controllers;

use Illuminate\Http\Request;

class authenController extends Controller
{
    public function getLogin(){

    	return view('auth.login');
}
  public function postLogin(){

  	if (Auth::attempt([
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ], $request->get('remember'))) {
            return redirect()
                ->intended('/tasks')
                ->with('message', 'Logged in successfully');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('message', 'Wrong email or password');
    }

    /**
     * Logout.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        authen::logout();

        return redirect('/')
            ->with('message', 'Logged out successfully');
    
  }
}