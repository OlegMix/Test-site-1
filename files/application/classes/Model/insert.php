<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Insert extends Model
{
	public function create_respondents($full_name, $email, $during_questioning)
	{
	    DB::insert('respondents', array('full_name', 'email', 'during_questioning'))
        	->values(array($full_name, $email, $during_questioning))
        	->execute();
                $id = mysql_insert_id();
                return $id;
        }

        public function create_survey($id, $key, $value)
        {
                DB::insert('survey_results', array('id_questions', 'id_user', 'result'))
                        ->values(array($key, $id, $value))
                        ->execute();
	}

        public function create_question($fullname, $age, $locations, $gender, $mail, $question)
        {
                if (!empty($fullname)&&!empty($age)&&!empty($locations)&&!empty($gender)&&!empty($mail)) {
                        DB::insert('questions', array('full_name','age','location','gender','email','question'))
                                ->values(array($fullname, $age, $locations, $gender, $mail, $question))
                                ->execute();  
                } else {
                        DB::insert('questions', array('question'))
                                ->values(array($question))
                                ->execute();
                }
                
        }
}