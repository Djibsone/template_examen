<?php
require_once('../models/connexion.php');

if(isset($_POST['add'])){

        if (!empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST[''])) {

                // $ = htmlspecialchars($_POST['']);
                // $ = htmlspecialchars($_POST['']);
                // $ = htmlspecialchars($_POST['']);
                // $ = htmlspecialchars($_POST['']);

                //$stmt = add();

                if ($stmt) {

                        $msg= "Ajouté avec succès.";
                        $url="../";		
                        header("location:../msg/message.php?msg=$msg&color=v&url=$url");

                } else {

                        $msg= "Erreur d\'ajout.";
                        $url="../views/page_create.php";		
                        header("location:../msg/message.php?msg=$msg&color=r&url=$url");

                }
                
        } else {

                $msg= "Renseignez les champs.";
                $url="../views/page_create.php";	
                header("location:../msg/message.php?msg=$msg&color=r&url=$url");

        }
        
}