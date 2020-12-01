<?php
spl_autoload_register(function($class){
    include $class.".php";
});

//Singleton Test
/* echo '<pre style=text-align:left,direction:ltr>';
print_r(Framework\Test\Singleton::getInstance());
echo '</pre><hr>'; */

//Registry Test
/* class User{

}
Class Post{

}
echo '<pre style=text-align:left,direction:ltr>';
print_r(Framework\Test\Registry::set('one',new User()));
echo '</pre><hr>';
echo '<pre style=text-align:left,direction:ltr>';
print_r(Framework\Test\Registry::get('one',new Post));
echo '</pre><hr>'; */

//Factory Test
/* try {
    echo '<pre style=text-align:left,direction:ltr>';
    print_r(Framework\Test\Factory::initialize('ggg'));
    echo '</pre><hr>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
 */


