<!DOCTYPE html>
<html> 
    <head> 
        <title>La clinique vétérinaire</title> 
        <meta charset=’utf-8’>
    </head> 
    <body> 
        
        <?php 
            include("classes/Animal.class"); 
            include("classes/Chien.class");
            
            $chat = new Animal(); 
            $chien = new Chien(); 
            
            $chat->SetNom("Belle"); 
            $chien->SetNom ("Jump");

            echo $chat->getNom(); 
            echo $chien->getNom();
        ?> 
    </body> 
</html>