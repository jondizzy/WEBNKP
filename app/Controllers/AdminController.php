<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function loginForm()
    {
        return view('pages/admin/login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == 'admin123') {
            session()->set('logged_in', true);
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau Password salah.');
        }
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('pages/admin/dashboard', ['title' => 'Dashboard']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
