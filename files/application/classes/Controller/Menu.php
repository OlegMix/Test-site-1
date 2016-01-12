<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public $template = 'global/basic';

	public function action_institutions()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Общяя информация','Устав','Диклорации','Цели и задачи','Структура учреждения','Нормативные документы');
		$this->template->title = 'Учреждения';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_population()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Запись на прием к врачу','Последняя информация');
		$this->template->title = 'Населению';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_vacancies()
	{
		$content = View::factory('menu/vacancies') ->bind('vacancies', $vacancies);
		$vacancies = Model::factory('select') ->vacancies();

		$this->template->styles = array('style','menu/table');
		$this->template->title = 'Вакансии';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_nocorruption()
	{
		$content = View::factory('menu/nocorruption');
		$this->template->styles = array('style','menu/nocorruption');
		$this->template->title = 'Противодействие коррупции';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_news()
	{
		$id = $this->request->param('id');
 		$this->template->styles = array('style','menu/news');
 		$this->template->description = 'Стоматология';

        if($id) {
            $content = View::factory('pages/news') ->bind('news', $news);
            $news = Model::factory('select')->news_one($id);
            $this->template->title = $news['title'];
            $content->article = $id;
            
        }
        else {
            $this->template->title = 'Новости';

			$content = View::factory('menu/news') ->bind('news', $news);
			$news = Model::factory('select')->news_m();
        }
 
       	$this->template->content = $content;
	}

	public function action_quality()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Анкета','Вопрос ответ (форум)');
		$this->template->title = 'Качество работы';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_questionnaire()
	{
		$articles = array();
		$content = View::factory('menu/questionnaire') ->bind('articles', $articles);
		$articles = Model::factory('select')->questions();

		$this->template->styles = array('style','menu/questionnaire');
		$this->template->title = 'Анкета';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_contacts()
	{
		$content = View::factory('menu/contacts');
		$this->template->styles = array('style','menu/contacts');
		$this->template->title = 'Контактная информация';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

	public function action_employees()
	{
		$content = View::factory('menu/employees') ->bind('employees', $employees);
		$employees = Model::factory('select')->employees();

		$this->template->styles = array('style','menu/table');
		$this->template->title = 'Наши специалисты';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}
} // End