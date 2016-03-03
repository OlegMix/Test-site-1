<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basic extends Controller_Template {

	public $template = 'global/basic';

	public function action_index()
	{
		$content = View::factory('login');
		$this->template->styles = array('style');
		$this->template->title = 'Вход';
        $this->template->content = $content;
	}

	public function action_home()
	{
		$content = View::factory('home');
		$this->template->styles = array('style','home');
		$this->template->title = 'ГОБУЗ "Маловишерская стоматологическая поликлиника"';
        $this->template->content = $content;
	}
} 