<?php
namespace Framework\Test
{
    //Singleton Design Pattern
    class Singleton{
        private static $_instance;
        public function __construct(){
            //Do Nothing
        }
        public static function getInstance(){
            if(!isset(self::$_instance)){
                self::$_instance = new self();
            }
                return self::$_instance;
        }
    }
}
