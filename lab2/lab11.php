<?php
  
   if(isset($_GET['firstname']) && isset($_GET['lastname'])){
         $firstname=$_GET["firstname"];
         $lastname=$_GET["lastname"];
         echo "Welcome".$firstname.$lastname;
   }else{
         echo "Enter first name and last name";
   }
?>