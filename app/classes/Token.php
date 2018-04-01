<?php

    class Token {
        /*
            The token is used for security purpous 
        */
      public static function generate() {/* Generate a unique token */}

      public static function check($token) {/* Verify the token with the session token*/}
    }
?>