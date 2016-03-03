<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Select extends Model
{
	public function regulations()
	{
		return DB::select()
			->from("regulations")
			->execute();
	}

	public function charter()
	{
		return DB::select()
			->from("charter")
			->execute();
	}

	public function questions()
	{
		return DB::select()
			->from("questionnaire")
			->execute();
	}

	public function news_m()
	{
		return DB::select()
			->from("news")
			->execute();
	}

	public function news_one($id_news)
	{
		$nw = DB::select()
			->from('news')
			->where('id_news', '=', $id_news)
			->execute()
			->as_array();

		if($nw)
            return $nw[0];
        else
            return FALSE;                      
	}
	
	public function vacancies()
	{
		return DB::select()
			->from("vacancies")
			->execute();
	}

	public function employees()
	{
		return DB::select()
			->from("employees")
			->execute();
	}

	public function fast_link()
    {
        return DB::select()
            ->from("quick_links")
            ->where('active', '=', "1")
            ->execute();
    }

    public function question()
    {
        return DB::select()
            ->from("questions")
            ->where('status', '=', "1")
            ->execute();
    }
}

