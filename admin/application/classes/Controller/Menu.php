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

	public function action_specialists()
	{
		$content = View::factory('menu');
		$this->template->styles = array('style');
		$content->section = array('Вакансии','Полезная информация');
		$this->template->title = 'Специалистам';
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
		$content = View::factory('menu/news');
		$this->template->styles = array('style','menu/news');
		$this->template->title = 'Новости';
        $this->template->description = 'Стоматология';
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
		$content = View::factory('menu/questionnaire') ->bind('articles', $articles);

		$articles = array();

		$article = new Model_Article();
        $articles = $article->get_all();

		// $articles = Model::factory('article')->get_all();

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
		$content = View::factory('menu/employees');
		$this->template->styles = array('style','menu/employees');
		$this->template->title = 'Наши специалисты';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}
} // End