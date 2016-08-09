<?php

namespace App\Http\Controllers\Auth;

use App\Helper\PageDescription;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    protected $resetView = 'auth.passwords.reset';


    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('guest');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        $this->page->setTitle('Request Link');
        if (property_exists($this, 'linkRequestView')) {
            return view($this->linkRequestView)->with([
                'page' => $this->page
            ]);
        }

        if (view()->exists('auth.passwords.email')) {
            return view('auth.passwords.email')->with([
                'page' => $this->page
            ]);
        }

        return view('auth.password')->with([
            'page' => $this->page
        ]);
    }

    public function showResetForm(Request $request, $token = null)
    {
        if (is_null($token)) {
            return $this->getEmail();
        }

        $email = $request->input('email');
        $this->page->setTitle('Reset Password');
        if (property_exists($this, 'resetView')) {
            return view($this->resetView)->with([
                'email' => $email,
                'token' => $token,
                'page' => $this->page
            ]);
        }

        if (view()->exists('auth.passwords.reset')) {
            return view('auth.passwords.reset')->with([
                'email' => $email,
                'token' => $token,
                'page' => $this->page
            ]);
        }

        return view('auth.reset')->with([
            'email' => $email,
            'token' => $token,
            'page' => $this->page
        ]);
    }
}
