<?php
namespace Framework\Test
{
    class Factory{
        public function __construct(){
            // Do Nothing
        }
        public static function initialize($type){
            switch ($type) {
                case 'sin':
                    return new \Singleton;
                    break;
                case 'reg':
                    return new \Registry;
                    break;
                default:
                    throw new \Exception("Invalid Type ...");
                    break;
            }
        }
    }
}