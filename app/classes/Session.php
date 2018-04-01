<?php

    class Session {
        /*
            This class manages sessions 
        */
      public static function exists($name) {/* Verify the existance of session variable $name*/}

      public static function put($name, $value){/* create a new session variable with name $name and value of $value */}

      public static function get($name) {/* return the variable $name of session */}

      public static function delete($name) {/*delete the current session*/}
      }
    }
?>
