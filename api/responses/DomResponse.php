<?php

use Base\Response;
use Kits\Database\MySQL;
use Kits\Session;

class Dom extends Response {

    public function info (): array {
        $status = [
            'jwt_secret' => ['status' => 'success', 'message' => 'Secret changed'],
            'routes' => ['status' => 'success', 'message' => ''],
            'database' => ['status' => 'success', 'message' => ''],
        ];
        if (JWT_SECRET === 'wLdkrBuQ36auUFzEd2mv9KyznwtLgaBXgoUUAMJvSXGN4uvy3OjnBUDbgT-gh27fl3AmDS2SdnVZ5KnHcWrWFrd8C13RXIbso4tDg1BVOEVgTZnUxIdiDm0csn--HRqEG-xbB8RZokBZeHTq53Uh0TkuUSPeb_tkfuhmYttIHZU') {
            $status['jwt_secret'] = ['status' => 'fail', 'message' => 'You must change the secret'];
        }
        if (count(Session::Read('Routes')) > 1) {
            $status['routes'] = ['status' => 'success', 'message' => 'You have sucessfully configured routes', 'routes' => Session::Read('Routes')];
        }
        else {
            $status['routes'] = ['status' => 'fail', 'message' => 'You have no routes defined'];
        }
        $status['database'] = MySQL::Check();
        return [
            'company' => 'Funeraria del Buen Pastor',
            'contact' => [
                'website' => 'http://www.funerariadelbuenpastor.cl',
                'api' => 'https://fdbp.acode.cl/api/home'
            ],
            'status' => $status,
        ] + ABOUT;
    }

}