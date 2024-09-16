<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminHandleLoginRequest;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Http\Requests\Admin\AdminHandleLoginRequest;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('admin.Auth.login');
    }

    public function handleLogin(AdminHandleLoginRequest $request)
    {
        $request->authenticate();
//        toast(__('You have  been login successfully!'), 'success');

        return redirect()->route('admin.dashboard');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
//            toast('Your have been logout successfully!' , 'success');


    }

}
