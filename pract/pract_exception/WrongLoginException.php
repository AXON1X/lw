<?php
    class WrongLoginException extends Exception {
        public function __construct()
        {
            parent::__construct();
        } 
    }