<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\RegistrasiRequest;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Cek apakah email mengandung kata "mhs" atau "dsn"
        if (strpos($data['email'], 'mhs') !== false) {
            $role = 'mahasiswa';
        } else if (strpos($data['email'], 'dsn') !== false) {
            $role = 'dosen';
        } else if (strpos($data['email'], 'adm') !== false) {
            $role = 'Admin';
        } else {
            $role = 'user';
        }

        // Buat user baru dengan role yang telah ditentukan
        try {
            return User::create([
                'name' => $data['name'],
                'npm' => $data['npm'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $role,
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) { // error code for unique constraint violation
                throw ValidationException::withMessages([
                    'npm' => 'npm/nip sudah dipakai',
                ]);
            } else {
                throw $e;
            }
        }
    }

    public function register(RegistrasiRequest $request)
    {
        $user = $this->create($request->all());

        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }
}
