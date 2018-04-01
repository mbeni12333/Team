<?php 

class DB{
    // class data base blabla 
    // everything is explained bellow

    private static $_instance;//instance of the Db object 
    private $_query,//
            $_results,// store the result of a query
            $_pdo,//store the pdo object
            $_count = 0,//store the count of the last query
            $_error = false;// where ther any errros ?

    private function __construct(){
        // this is the constructor 
        // مكاش وش يتفهم هنا 
        // بيدييو نورمال ستعملنا فاريابل غلوبال
        try {
           $this->_pdo = new PDO('mysql:host='.Config::get("mysql/host").';dbname='.Config::get("mysql/dbname"),                                    Config::get("mysql/username"), Config::get("mysql/password"));
           echo 'bonjour';
        }
        catch( Exception $e ) {
            echo $e->getMessage();
        }
    }

    public function getInstance(){
        // this functions returns a DB object 
        // if this object is already instanciated we return the instance so that we connect to the DB just once
        // هاذي الفونكيون تروتورني أوبجي و إذا خدمت من قبل أوبجي تروتورنيه باش ما يبقاش 
        // يدير فالكونيكسيون مع الباز في باتل 
        if(!isset(self::$_instance)){
           self::$_instance = new DB();
        }
        return self::$_instance;
    }
    private function query($sql, $param = array()){
        // this function simplify the use of te database 
        // by using prepared queries , counting the results checking errors and storing th actual results
        // escaping sql injections and other security stuff
        // usage of this function is .. 
        // DB.getInstance()->query('Select username FROM users Where username = ?', array('boujem3a'));
    }
    
    
?>