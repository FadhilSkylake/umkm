<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        $this->session = service('session');

        $this->config = config('Auth');
        $this->auth   = service('authentication');
    }
    public function index()
    {
        return view('login/login', ['config' => $this->config]);
    }
    public function cobaLogin()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('login');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            $pass = $data['password_hash'];
            $cek = password_verify($password, $pass);
            if ($cek) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'role_id' => $data['role_id'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                if ($data['role_id'] == 1) {
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->to('/kelola');
                }
            } else {
                $session->setFlashdata('error', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashData('error', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }
}
