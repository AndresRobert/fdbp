<?php

require_once MDL.'UserModel.php';

use Base\Response;
use Kits\Auth;
use Kits\Text;

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
            'status' => 'fail',
            'message' => 'Invalid data',
            'email' => NULL,
            'token' => NULL,
            'expiration' => NULL
        ];
        if (isset($credentials['password'], $credentials['user_name'])) {
            $User = new User();
            if ($User->readBy(['email' => $credentials['email']])) {
                if (Auth::Match($credentials['password'], $User->get('password'))) {
                    $tokenData = Auth::JWToken($User);
                    $response = [
                        'response_code' => 200,
                        'status' => 'success',
                        'message' => 'Successful login',
                        'email' => $User->get('email'),
                        'token' => $tokenData['token'],
                        'expiration' => $tokenData['expire_at']
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

    public function getByFilter (array $filter = []): array {
        return self::RequiresAuthorization(
            static function () use ($filter) {
                return (new User())->filter(['*'], $filter);
            }
        );
    }

}