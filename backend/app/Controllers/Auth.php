<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $validation;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->validation = \Config\Services::validation();
    }

    public function login()
    {
        if ($this->request->getMethod() === 'POST') {
            return $this->processLogin();
        }

        $data = [
            'title' => 'Login - SacredAQ Reborn',
            'currentUser' => null
        ];

        return view('templates/header', $data)
             . view('auth/login', $data)
             . view('templates/footer', $data);
    }

    public function register()
    {
        if ($this->request->getMethod() === 'POST') {
            return $this->processRegister();
        }

        $data = [
            'title' => 'Create Your Hero - SacredAQ Reborn',
            'currentUser' => null
        ];

        return view('templates/header', $data)
             . view('auth/register', $data)
             . view('templates/footer', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/')->with('message', 'Successfully logged out!');
    }

    private function processLogin()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if ($this->validate($rules)) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->userModel->where('Email', $email)->first();

            if ($user && password_verify($password, $user['Hash'])) {
                // Update last login
                $this->userModel->update($user['id'], [
                    'LastLogin' => date('Y-m-d H:i:s'),
                    'CurrentServer' => 'Online'
                ]);

                $session = session();
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['Name'],
                    'access_level' => $user['Access'],
                    'logged_in' => true
                ]);

                return redirect()->to('/')->with('message', 'Welcome back, ' . $user['Name'] . '!');
            } else {
                $data = [
                    'title' => 'Login - SacredAQ Reborn',
                    'currentUser' => null,
                    'error' => 'Invalid email or password'
                ];

                return view('templates/header', $data)
                     . view('auth/login', $data)
                     . view('templates/footer', $data);
            }
        } else {
            $data = [
                'title' => 'Login - SacredAQ Reborn',
                'currentUser' => null,
                'validation' => $this->validator
            ];

            return view('templates/header', $data)
                 . view('auth/login', $data)
                 . view('templates/footer', $data);
        }
    }

    private function processRegister()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[32]|is_unique[users.Name]',
            'email' => 'required|valid_email|is_unique[users.Email]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]',
            'age' => 'required|integer|greater_than[12]',
            'gender' => 'required|in_list[M,F]',
            'country' => 'required|max_length[2]'
        ];

        if ($this->validate($rules)) {
            $userData = [
                'Name' => $this->request->getPost('username'),
                'Email' => $this->request->getPost('email'),
                'Hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'Age' => $this->request->getPost('age'),
                'Gender' => $this->request->getPost('gender'),
                'Country' => $this->request->getPost('country'),
                'HairID' => 1,
                'Access' => 1,
                'Level' => 1,
                'Gold' => 1000,
                'Coins' => 1000,
                'Diamonds' => 0,
                'Crystal' => 0,
                'Exp' => 0,
                'DateCreated' => date('Y-m-d H:i:s'),
                'LastLogin' => date('Y-m-d H:i:s'),
                'CurrentServer' => 'Online',
                'ClassID' => 1
            ];

            $userId = $this->userModel->insert($userData);

            if ($userId) {
                $session = session();
                $session->set([
                    'user_id' => $userId,
                    'username' => $userData['Name'],
                    'access_level' => 1,
                    'logged_in' => true
                ]);

                return redirect()->to('/')->with('message', 'Welcome to SacredAQ Reborn, ' . $userData['Name'] . '!');
            } else {
                $data = [
                    'title' => 'Create Your Hero - SacredAQ Reborn',
                    'currentUser' => null,
                    'error' => 'Failed to create account. Please try again.'
                ];

                return view('templates/header', $data)
                     . view('auth/register', $data)
                     . view('templates/footer', $data);
            }
        } else {
            $data = [
                'title' => 'Create Your Hero - SacredAQ Reborn',
                'currentUser' => null,
                'validation' => $this->validator
            ];

            return view('templates/header', $data)
                 . view('auth/register', $data)
                 . view('templates/footer', $data);
        }
    }
}