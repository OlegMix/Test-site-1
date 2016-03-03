<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	public function action_login() 
    {
        $login = Arr::get($_POST, 'username');
        $password = Arr::get($_POST, 'password');
        if (Auth::instance()->login($login, $password)) {
            $internal_request = Request::factory('Basic/home') ->execute()->body();
            $this->response->body($internal_request);
        } else {
            echo 'failed';
        }
    } 

} // End