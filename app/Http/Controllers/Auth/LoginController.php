<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        // Auth::login($authUser, true);
        // return redirect($this->redirectTo);
        if ($authUser == false){
          return redirect('Inupoi11.index')->with('warning','WARNING!');
        }else{
          Auth::login($authUser, true);
          return redirect()->route('Inupoi.index');
        }
    }


    public function findOrCreateUser($user, $provider)
    {
      $authUser = User::where('provider_id', $user->id)->first();
      if ($authUser) {
        return $authUser;
      }else{
        return User::create([
          'name' => $user->name,
          'email'  => $user->email,
          'jabatan'  => 'member',
          'provider'  => $provider,
          'provider_id'  => $user->id,
          'avatar'         => $user->avatar,
          'avatar_original'  => $user->avatar_original,
        ]);

      }
    }

    public function logout(Request $request) {
      if (Auth::user()->jabatan == 'member') {
        Auth::logout();
        return redirect('/Inupoi');
      }else {
        Auth::logout();
        return redirect('/');
      }
    }


}
