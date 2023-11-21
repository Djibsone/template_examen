<?php
require_once('../models/connexion.php');

if(isset($_POST['update'])){

        if (!empty($_POST['id']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST[''])) {
                
                // $id = htmlspecialchars($_POST['id']);
                // $ = htmlspecialchars($_POST['']);
                // $ = htmlspecialchars($_POST['']);
                // $ = htmlspecialchars($_POST['']);

                //$stmt = update();

                if ($stmt) {

                        $msg= "Modifié avec succès.";
                        $url="../";		
                        header("location:../msg/message.php?msg=$msg&color=v&url=$url");

                } else {

                        $msg= "Erreur de modification.";
                        $url="../views/page_edit.php";		
                        header("location:../msg/message.php?msg=$msg&color=r&url=$url");

                } 
                
        } else {

                $msg= "Renseignez les champs.";
                $url="../views/page_edit.php";		
                header("location:../msg/message.php?msg=$msg&color=r&url=$url");

        }
         
}