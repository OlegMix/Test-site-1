<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Insert extends Controller_Template {

	public $template = 'global/basic';

	public function action_respondents()
	{
		if (Arr::get($_POST, 'anonym') == "on") {
			$fullname = "anonym";
        	$mail = "anonym";
        	$content = View::factory('menu/error');
		}
		else {
			$post = Validation::factory($_POST);
			$post -> rule(TRUE, 'not_empty')
      			-> rule('mail', 'email');
      		if ($post -> check()) {
      			$fullname = Arr::get($_POST, 'family')." ".Arr::get($_POST, 'name')." ".Arr::get($_POST, 'lastname');
        		$mail = Arr::get($_POST, 'mail');
        		$content = View::factory('menu/error');
      		} else {
      			$content = $post -> errors();
      		}
		}
        $during_questioning = date("Y-m-d H:i:s");

        $assessment = Arr::get($_POST, 'assessment');

        Model::factory('insert')->create_respondents($fullname, $mail, $during_questioning, $assessment);
        $this->template->title = 'Анкета';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

} // End 