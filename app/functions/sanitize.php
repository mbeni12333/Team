<?php 
    function escape($string){
        // this function will help us prevent xss
        return htmlentities($string, ENT_QUOTES, 'UTF-8');
    }
?>