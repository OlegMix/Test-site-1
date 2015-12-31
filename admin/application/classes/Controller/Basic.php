<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basic extends Controller_Template {

	public $template = 'global/basic';

	public function action_index()
	{
		$content = View::factory('home');
		$this->template->scripts = array('jquery-1.6.1.min','slides');
		$this->template->styles = array('style','home');
		$this->template->title = 'ГОБУЗ "Маловишерская стоматологическая поликлиника"';
        $this->template->content = $content;
	}
} // 