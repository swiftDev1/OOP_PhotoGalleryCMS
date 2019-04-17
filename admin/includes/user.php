<?php 
class User{
    public $user_id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;


    public static function find_all_users(){
       return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($user_id){
        
        $the_result_array = self::find_this_query("SELECT * FROM users WHERE user_id = $user_id LIMIT 1");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;    
    }

    public static function find_this_query($sql){
        global $database;
        $query_result = $database->query($sql);
        $the_object_array =array();
        while($row = mysqli_fetch_array($query_result)){
            $the_object_array[] = self::instantiation($row);
        }
        return $the_object_array;
    }

    public static function instantiation($row){
        $the_object = new self; //creates an instance of the class

        //note that the instantiation method is doing the previous job of $username = $row['username']
        foreach($row as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);//get_object_vars gets the properties of this object
        return array_key_exists($the_attribute,$object_properties);//returns true if the attribute appears in the array of object_prperties 

    }

}





?>