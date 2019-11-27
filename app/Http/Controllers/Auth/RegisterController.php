<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\RegisterRequest;
use App\Model\User\Entity\User;
use Illuminate\Http\Request;
use App\UseCases\Auth\RegisterService;

class RegisterController extends Controller
{

//    use RegistersUsers;
//    protected $redirectTo = '/home';

    private $service;

    public function __construct(RegisterService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }


    public function redirectTo()
    {
        return app()->getLocale() . '/';
    }


    public function showPersonRegistrationForm(Request $request)
    {
        return view('auth.register-person');
    }

    public function showOrganizationRegistrationForm(Request $request)
    {
        return view('auth.register-organization');
    }

    public function register(RegisterRequest $request)
    {
        $this->service->register($request);

        return redirect()->route('login', app()->getLocale())
            ->with('success', trans('auth/register.Check your email and click on the link to verify.'));
    }


    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login', app()->getLocale())
                ->with('error', trans('auth/register.Sorry your link cannot be identified.'));
        }


        try {
            $this->service->verify($user->id);
            return redirect()->route('login', app()->getLocale())->with('success', trans('auth/register.Your e-mail is verified. You can now login.'));
        } catch (\DomainException $e) {
            return redirect()->route('login', app()->getLocale())->with('error', $e->getMessage());
        }
    }
}
