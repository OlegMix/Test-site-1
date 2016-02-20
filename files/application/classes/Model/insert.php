<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Insert extends Model
{
	public function create_respondents($full_name, $email, $during_questioning, $assessment)
	{
	    return DB::insert('respondents', array('full_name', 'email', 'during_questioning'))
        	->values(array($full_name, $email, $during_questioning))
        	->execute();

        $id = mysql_insert_id();

        foreach ($assessment as $key => $value) {
        	return DB::insert('survey_results', array('id_questions', 'id_user', 'result'))
        		->values(array($key, $id, $value))
        		->execute();
        }

        
	}
}