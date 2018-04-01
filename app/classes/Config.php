<?php

class Config{
    // this is a helper class to access global variables declared in init.php
    // هاذي كلاس تسهل إستعمال فاريابل غلوبال لي ديكلاريناهم فال لإنيت.بهب XD
    
    function get($directory){
        //basicly it prevents us from wrinting "$GLOBALS["mysql"]["HOST"]"
        //we just write Config::get('mysql/host') and the function returns the result
        // بزاف الكتبة بالعربية لازم واحد يتطوع و يديرها
        $file = explode('/', $directory);
        $config = $GLOBALS['config'];
        foreach($file as $element){
            if(isset($config[$element])){
              $config = $config[$element];   
            }
        }
        return (string)$config;
    }
}

?>