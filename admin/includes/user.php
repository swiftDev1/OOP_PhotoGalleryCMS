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
        
        $result = self::find_this_query("SELECT * FROM users WHERE user_id = $user_id LIMIT 1");
        $found_user = mysqli_fetch_array($result);
        return $found_user;
    }

    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        $the_object_array =array();
        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = self::instantiation($row);
        }
        return $the_object_array;
    }

    public static function instantiation($the_record){
        $the_object = new self;

        // $the_object->user_id = $found_user['user_id'];
        // $the_object->username = $found_user['username'];
        // $the_object->password = $found_user['password'];
        // $the_object->first_name = $found_user['first_name'];
        // $the_object->last_name = $found_user['last_name'];


        //note that the instantiation method is doing the previous job of $username = $row['username]
        foreach($the_record as $the_attribute => $value){
            if($the_object->has_the_attribute($the_attribute)){
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;

    }

    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute,$object_properties);


    }

}





?>