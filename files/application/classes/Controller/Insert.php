<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Insert extends Controller_Template {

	public $template = 'global/basic';

	public function action_respondents()
	{
		$content = View::factory('global/messege');
		if (Arr::get($_POST, 'anonym') == "on") {
			$fullname = "anonym";
			$mail = "anonym";
			$messege = "Спасибо, ваша анкета отправлена!";
			$during_questioning = date("Y-m-d H:i:s");
			$assessment = Arr::get($_POST, 'assessment');
			$id = Model::factory('insert')->create_respondents($fullname, $mail, $during_questioning);
			foreach ($assessment as $key => $value) {
				Model::factory('insert')->create_survey($id, $key, $value);
			}
			$content->type = "done";
		}
		else {
			$post = Validation::factory($_POST);
			$post -> rule('name', 'not_empty')
				-> rule('family', 'not_empty')
				-> rule('lastname', 'not_empty')
				-> rule('mail', 'not_empty')
				-> rule('mail', 'email');
			if ($post -> check()) {
				$fullname = Arr::get($_POST, 'family')." ".Arr::get($_POST, 'name')." ".Arr::get($_POST, 'lastname');
				$mail = Arr::get($_POST, 'mail');
				$messege = "Спасибо, ваша анкета отправлена!";
				$during_questioning = date("Y-m-d H:i:s");
				$assessment = Arr::get($_POST, 'assessment');
				$id = Model::factory('insert')->create_respondents($fullname, $mail, $during_questioning);
				foreach ($assessment as $key => $value) {
					Model::factory('insert')->create_survey($id, $key, $value);
				}
				$content->type = "done";
			} else {
				$messege = $post -> errors('comments');
				$content->type = "error";
			}
		}
		$this->template->styles = array('messege');
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->title = 'Анкета';
		$this->template->description = 'Стоматология';
		$content->messege = $messege;
		$this->template->content = $content;
	}

} // End 