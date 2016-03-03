<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Menu extends Controller_Template {

	public $template = 'global/basic';

	public function action_regulations()
	{
		$content = View::factory('menu/regulations') ->bind('regulations', $regulations);
		$this->template->title = 'Нормативные документы';
        $regulations = Model::factory('select') ->regulations();
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_pricelist() 
	{
		$content = View::factory('menu/pricelist');
		$this->template->title = 'Прейскурант';
		$this->template->styles = array('menu/pricelist');
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_list_services() 
	{
		$content = View::factory('menu/list_services');
		$this->template->title = 'Перечень оказываемых услуг';
		$this->template->styles = array('menu/list_services');
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}


	public function action_charter()
	{
		$content = View::factory('menu/charter') ->bind('charter', $charter);
		$this->template->title = 'Устав учреждения';
        $charter = Model::factory('select') ->charter();
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_general_information()
	{
		$content = View::factory('menu/infgeneral');
		$this->template->title = 'Общая информация';
		$this->template->styles = array('menu/table');
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_structure()
	{
		$content = View::factory('menu/structure');
		$this->template->title = 'Структура учреждения';
		$this->template->styles = array('menu/structure');
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_forum()
	{
		$content = View::factory('menu/forum');
		$this->template->title = 'Форум';
		$this->template->styles = array('menu/forum');
		$total_items = 12; //Это вы как будто посчитали количество элементов
		$content->pagination = Pagination::factory(array('total_items' => $total_items));
		$this->template->link = Model::factory('select') ->fast_link();
		$content->questions = Model::factory('select') ->question();
		$this->template->scripts = array('locking2');
        $this->template->content = $content;
	}

	public function action_goals_and_objectives()
	{
		$content = View::factory('menu/goalsobj');
		$this->template->title = 'Декларация целей и задач';
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
        $this->template->content = $content;
	}

	public function action_nocorruption()
	{
		$content = View::factory('menu/nocorruption');
		$this->template->styles = array('menu/nocorruption');
		$this->template->title = 'Противодействие коррупции';
        $this->template->link = Model::factory('select') ->fast_link();
        $this->template->content = $content;
	}

	public function action_news()
	{
		$id = $this->request->param('id');
 		

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
        $this->template->content = $content;
	}

	public function action_questionnaire()
	{
		$articles = array();
		$content = View::factory('menu/questionnaire') ->bind('articles', $articles);
		$articles = Model::factory('select')->questions();

		// if($_POST)
  //       {
  //           $fullname = Arr::get($_POST, 'family')." ".Arr::get($_POST, 'name')." ".Arr::get($_POST, 'lastname');
  //           $mail = Arr::get($_POST, 'mail');
  //           $during_questioning = date("Y-m-d H:i:s");

  //           Model::factory('insert')->create_respondents($fullname, $mail, $during_questioning);
  //       }

        $this->template->link = Model::factory('select') ->fast_link();
		$this->template->scripts = array('locking');
		$this->template->styles = array('menu/questionnaire','menu/table');
		$this->template->title = 'Анкета';
        $this->template->content = $content;
	}

	public function action_contacts()
	{
		$content = View::factory('menu/contacts');
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->styles = array('menu/table');
		$this->template->title = 'Контактная информация';
        $this->template->content = $content;
	}

	public function action_employees()
	{
		$content = View::factory('menu/employees') ->bind('employees', $employees);
		$employees = Model::factory('select')->employees();
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->styles = array('menu/table');
		$this->template->title = 'Наши специалисты';
        $this->template->content = $content;
	}
} // End