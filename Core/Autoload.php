<?php 
class Autoload
{
    public static function autoloader($classes)
    {
        // var_dump($classes);
        $classes =str_replace("\\", "/", $classes); 
        require ROOT."/$classes.php"; 
    }

    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoloader')); 
    }
}
?>