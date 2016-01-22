<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public $template = 'global/basic';

	public function action_regulations()
	{
		$content = View::factory('menu/regulations') ->bind('regulations', $regulations);
		$this->template->title = 'Нормативные документы';
        $this->template->description = 'Стоматология';
        $regulations = Model::factory('select') ->regulations();
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_charter()
	{
		$content = View::factory('menu/charter') ->bind('charter', $charter);
		$this->template->title = 'Устав учреждения';
        $this->template->description = 'Стоматология';
        $charter = Model::factory('select') ->charter();
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_general_information()
	{
		$content = View::factory('menu/infgeneral');
		$this->template->title = 'Общая информация';
		$this->template->styles = array('menu/table');
        $this->template->description = 'Стоматология';
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_structure()
	{
		$content = View::factory('menu/structure');
		$this->template->title = 'Структура учреждения';
		$this->template->styles = array('menu/table');
        $this->template->description = 'Стоматология';
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_goals_and_objectives()
	{
		$content = View::factory('menu/goalsobj');
		$this->template->title = 'Декларация целей и задач';
        $this->template->description = 'Стоматология';
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_vacancies()
	{
		$content = View::factory('menu/vacancies') ->bind('vacancies', $vacancies);
		$vacancies = Model::factory('select') ->vacancies();
		$this->template->link = Model::factory('select') ->fast_link();

		$this->template->styles = array('menu/table');
		$this->template->title = 'Вакансии';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_nocorruption()
	{
		$content = View::factory('menu/nocorruption');
		$this->template->styles = array('menu/nocorruption');
		$this->template->title = 'Противодействие коррупции';
        $this->template->description = 'Стоматология';
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_news()
	{
		$id = $this->request->param('id');
 		
 		$this->template->description = 'Стоматология';

        if($id) {
            $content = View::factory('pages/news') ->bind('news', $news);
            $news = Model::factory('select')->news_one($id);
            $this->template->title = $news['title'];
            $content->article = $id;
            $this->template->styles = array('pages/news');
            
        }
        else {
            $this->template->title = 'Новости';

			$content = View::factory('menu/news') ->bind('news', $news);
			$news = Model::factory('select')->news_m();
			$this->template->styles = array('menu/news');
        }

 		$this->template->link = Model::factory('select') ->fast_link();
       	$this->template->content = $content;
	}

	public function action_quality()
	{
		$content = View::factory('menu');
		$this->template->title = 'Качество работы';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_questionnaire()
	{
		$articles = array();
		$content = View::factory('menu/questionnaire') ->bind('articles', $articles);
		$articles = Model::factory('select')->questions();

		if($_POST)
        {
            $fullname = Arr::get($_POST, 'family')." ".Arr::get($_POST, 'name')." ".Arr::get($_POST, 'lastname');
            $mail = Arr::get($_POST, 'mail');

            Model::factory('insert')->create_comment($fullname, $mail);
        }

        $this->template->link = Model::factory('select') ->fast_link();
		$this->template->scripts = array('locking');
		$this->template->styles = array('menu/questionnaire');
		$this->template->title = 'Анкета';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_contacts()
	{
		$content = View::factory('menu/contacts');
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->styles = array('menu/table');
		$this->template->title = 'Контактная информация';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_employees()
	{
		$content = View::factory('menu/employees') ->bind('employees', $employees);
		$employees = Model::factory('select')->employees();
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->styles = array('menu/table');
		$this->template->title = 'Наши специалисты';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}
} // End