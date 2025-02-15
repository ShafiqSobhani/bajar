<?php


include_once 'config.php';


class Database{
    
    //properties
    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $database = DATABASE;
    
    public $error;
    public $link;
    
    
    
    //behaviour
    public function __construct(){
        
        $this->dbConnect();
    }
    
    public function dbConnect(){
        
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        
        if(!$this->link){
            
            $this->error = "Database Connection Failed";
            return false;
        }
   
    }
    
    
    
    //insert function
    public function insert($query){
        
        $result = mysqli_query($this->link, $query) or die($this->link->error.__LINE__);
        
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }
    
    //select function
    public function select($query){
        
        $result = mysqli_query($this->link, $query) or die($this->link->error.__LINE__);
        
        if(mysqli_num_rows($result) > 0){
            
            return $result;
            
        }else{
            
            return false;
        }
 
        
    }
    
    //update function
    public function update($query){
        
        $result = mysqli_query($this->link, $query) or die($this->link->error.__LINE__);
        
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }
    
    
    //delete function
    public function delete($query){
        
        $result = mysqli_query($this->link, $query) or die($this->link->error.__LINE__);
        
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }
    
    
    
    
}





?>

