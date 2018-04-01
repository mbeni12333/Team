<?php

    class Validate {

      private $_passed = false,// result of the validation
              $_errors = array(),// array of errors
              $_db = null;// instance of the database

      public function __construct() { // constructor
        $this->_db = DB::getInstance();
      }

      public function check($source, $items = array()) {/**/}

      private function addError($error) {/* Add error (what caused it) to tthe errors array */}

      public function errors() { // get
        return $this->_errors;
      }

      public function passed() { // get
        return $this->_passed;
      }


}
