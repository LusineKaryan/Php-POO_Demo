<!DOCTYPE html>
<html> 
    <head> 
        <title>La clinique vétérinaire</title> 
        <meta charset=’utf-8’>
    </head> 
    <body> 
        
        <?php 
            include("classes/Animal.class");
            $chien = new Animal(); 
            $chien->setNom("Jump"); 
            echo $chien->getNom();
        ?> 
    </body> 
</html>