<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username()
    {
        return 'PRO_RUN';
    }

    public function authenticated(Request $request, $user)
    {//{{ Auth::user()->PRO_RUN }}


    $this->validate($request, [
        'nombre' => 'required',
        'paterno' => 'required',
        'materno' => 'required',
        'rut' => 'required|unique:PRO_PROVEEDOR,PRO_RUN',
        'fecha' => 'required',
        'genero' => 'required',
        'estado' => 'required',
        'email' => 'required|email|unique:PRO_PROVEEDOR,PRO_EMAIL',
        'nacionalidad' => 'required',
        'contrasena' => 'required|min:6',
        'telefono' => 'required',
        'direccion' => 'required',
        'pais' => 'required',
        'region' => 'required',
        'provincia' => 'required',
        'ciudad' => 'required',
        'pago' => 'required',
        'fechapago' => 'required',
        'ncuenta' => 'required',
        'banco' => 'required',
        'bancocuenta' => 'required',
        'medico' => 'required',
        'afp' => 'required'
    ]);

        if ($user->PRO_ALTA === 0) {
            auth()->logout();
            return back()->with('warning', 'Tu cuenta no ha sido activada por el administrador');
        }
        return redirect()->intended($this->redirectPath());
    }
}
