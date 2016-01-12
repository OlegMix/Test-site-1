<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

	public function action_login() 
    { 
        // Проверям, вдруг пользователь уже зашел 
         if(Auth::instance()->logged_in()) 
            { 
            // И если это так, то отправляем его сразу на страницу пользователей 
            return $this->request->redirect('member/view'); 
            } 
 
        // Если же пользователь не зашел, но данные на страницу пришли, то: 
        if ($_POST) 
        { 
            // Создаем переменную, отвечающую за связь с моделью данных User 
            $user = ORM::factory('user'); 
            // в $status помещаем результат функции login 
            $status = Auth::instance()->login($_POST['username'], $_POST['password']); 
            // Если логин успешен, то 
            if ($status) 
            { 
                // Отправляем пользователя на его страницу 
                $this->request->redirect('member/view'); 
            } 
            else 
            { 
                // Иначе ничего не получилось, пишем failed 
                echo 'failed'; 
            } 
        } 
        // Грузим view логина 
            $this->response->body(View::factory('login')); 
    } 

} // End