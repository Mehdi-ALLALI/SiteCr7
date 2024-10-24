<?php
 class DescriptionController{

    static function descriptionRoute(){
        $controller = 'description';
        $view = 'description';
        $pagetitle = 'Cristiano Ronaldo - Description';
        $description ='Page description de mon site';
        require File::build_path(array("View", "base.php"));
    }

}