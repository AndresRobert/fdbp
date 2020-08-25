<?php

require_once MDL.'UserModel.php';

use Base\Response;
use Kits\Auth;
use Kits\Text;
use Kits\Session;

class Users extends Response {

    public function register (array $newUser): array {
        $response = [
            'status' => 'fail',
            'message' => 'Password must be a min of 8 chars, at least 1 number, 1 lowercase char and 1 uppercase char',
            'id' => '',
        ];
        if (isset($newUser['password']) && Text::IsPassword($newUser['password'])) {
            $newUser['password'] = Auth::Hash($newUser['password']);
            $User = new User();
            if (isset($newUser['email']) && Text::IsEmail($newUser['email']) && !$User->exists('email', $newUser['email'])) {
                $User->set($newUser);
                if ($User->create()) {
                    $response = [
                        'status' => 'success',
                        'message' => 'User successfully registered',
                        'id' => $User->get('id'),
                    ];
                } else {
                    $response['message'] = 'User could not be registered';
                }
            } else {
                $response['message'] = 'Email is already taken';
            }
        }
        return $response;
    }

    public function login (array $credentials): array {
        $response = [
            'response_code' => 400,
            'message' => 'Invalid data',
            'credentials' => $credentials,
            'token' => NULL
        ];
        if (isset($credentials['password'], $credentials['email'])) {
            $User = new User();
            if ($User->readBy(['email' => $credentials['email']])) {
                if (Auth::Match($credentials['password'], $User->get('password'))) {
                    $tokenData = Auth::JWToken($User);
                    Session::Create('token', $tokenData['token']);
                    Session::Create('user', $User->get('id'));
                    $response = [
                        'response_code' => 200,
                        'message' => 'Successful login',
                        'token' => $tokenData['token']
                    ];
                }
                else {
                    $response['response_code'] = 401;
                    $response['message'] = 'Wrong password';
                }
            }
            else {
                $response['response_code'] = 401;
                $response['message'] = 'User not found';
            }
        }
        return $response;
    }

    public function logout () {
        Session::Delete('token');
        return [
            'response_code' => 200,
            'message' => 'Logged Out',
            'status' => 'success',
        ];
    }

    public function checkToken (array $token) {
        return [
            'response_code' => 200,
            'message' => 'Token Checked',
            'status' => $token['key'] === Session::Read('token') ? 'success' : 'fail',
        ];
    }

}