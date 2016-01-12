<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Select extends Model
{

    public function questions()
    {
        $sql = "SELECT * FROM questionnaire";
        return DB::query(Database::SELECT, $sql) -> execute();
    }
    
}