<?php

    class User {

      private $_db,// the database instance
              $_data,// the users' tuple from the database
              $_sessionName,// session name
              $_cookieName,// cookie name
              $_isLoggedIn;

      public function __construct($user = null) {/* initialise variables */}

      public function create($fields = array()) {/* Add a new user to the data base*/}

      public function find($user = null) {/* Check if certain user exists (id or name)*/}

      public function login($username = null, $password = null, $remember = false) {
          /*
            - create session
            - manage cookie
            - check hashed password with stred one 
          */
      }

      public function exists() {
        return (!empty($this->_data)) ? true : false;
      }

      public function logout() {
          /*
            - delete user from user_session
            - delete session data
            - delete cookie
          */
      }

      public function update($fields = array(), $id = null) {/* update user info */}

      public function data() {// get 
        return $this->_data;
      }
      public function isLoggedIn() {// get
        return $this->_isLoggedIn;
      }

      public function hasPermission($key) {/* Check if user has certain permission , permission are stored as json 
                                        file in the database*/}

    }

?>