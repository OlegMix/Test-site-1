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
		$content->messege = $messege;
		$this->template->content = $content;
	}

	public function action_question()
	{
		$content = View::factory('global/messege');
		if (Arr::get($_POST, 'anonym') == "on") {
			$post = Validation::factory($_POST);
			$post -> rule('question', 'not_empty');
			if ($post -> check()) {
				$fullname = 'anonym';
				$age = '0';
				$locations = 'anonym';
				$gender = 'a';
				$mail = 'anonym';
				$messege = "Спасибо, ваш вопрос будет рассмотрен специалистами!";
				$question = Arr::get($_POST, 'question');
				Model::factory('insert')->create_question($fullname, $age, $locations, $gender, $mail, $question);
				$content->type = "done";
			} else {
				$messege = $post -> errors('comments');
				$content->type = "error";
			}
		}
		else {
			$post = Validation::factory($_POST);
			$post -> rule('fullname', 'not_empty')
				-> rule('age', 'not_empty')
				-> rule('locations', 'not_empty')
				-> rule('gender', 'not_empty')
				-> rule('mail', 'not_empty')
				-> rule('question', 'not_empty')
				-> rule('mail', 'email');
			if ($post -> check()) {
				$fullname = Arr::get($_POST, 'fullname');
				$age = Arr::get($_POST, 'age');
				$locations = Arr::get($_POST, 'locations');
				$gender = Arr::get($_POST, 'gender');
				$mail = Arr::get($_POST, 'mail');
				$question = Arr::get($_POST, 'question');
				$messege = "Спасибо, ваш вопрос будет рассмотрен специалистами.<br>После рассмотрения вопроса вам на почту будет отправлено оповещение.";
				Model::factory('insert')->create_question($fullname, $age, $locations, $gender, $mail, $question);
				$content->type = "done";
			} else {
				$messege = $post -> errors('comments');
				$content->type = "error";
			}
		}
		$this->template->styles = array('messege');
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->title = 'Форум';
		$content->messege = $messege;
		$this->template->content = $content;
	}

} // End 