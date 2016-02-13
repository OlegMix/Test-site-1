<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basic extends Controller_Template {

	public $template = 'global/basic';

	public function action_index()
	{
		$content = View::factory('home');
		$this->template->styles = array('style','home','menu/table');
		$this->template->link = Model::factory('select') ->fast_link();
		$this->template->title = 'ГОБУЗ "Маловишерская стоматологическая поликлиника"';
        $this->template->content = $content;
	}

	public function action_search()
	{
		$content = View::factory('search');
		$this->template->styles = array('style');
		$this->template->title = 'ГОБУЗ "Маловишерская стоматологическая поликлиника"';
        $this->template->content = $content;
	}
} 