<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public $template = 'global/basic';

	public function action_questions() // Редактирование анкеты
	{
		$articles = array();

		$article = new Model_Select();
        $articles = $article->questions();

		$this->template->styles = array('style','menu/questionnaire');
		$content = View::factory('menu/question') ->bind('articles', $articles);
		$this->template->title = 'Редактирование анкеты';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
	}

    public function action_employees() // Сотрудники
    {
        $content = View::factory('menu/employees');
        $this->template->styles = array('style','menu/employees');
        $this->template->title = 'Сотрудники';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
    }

    public function action_vacancies() // Вакансии
    {
        $content = View::factory('menu/vacancies');
        $this->template->styles = array('style','menu/vacancies');
        $this->template->title = 'Вакансии';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
    }

    public function action_answered() // Отвеченные анкеты
    {
        $content = View::factory('menu/answered');
        $this->template->styles = array('style','menu/answered');
        $this->template->title = 'Просмотр ответов';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
    }

    public function action_news() // Новости
    {
        $content = View::factory('menu/news');
        $this->template->styles = array('style','menu/news');
        $this->template->title = 'Редактирование новостей';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
    }

    public function action_linkset() // Меню быстрых ссылок
    {
        $content = View::factory('menu/linkset');
        $this->template->styles = array('style','menu/linkset');
        $this->template->title = 'Быстрые ссылки';
        $this->template->description = 'Стоматология';
        $this->template->content = $content;
    }

} // End