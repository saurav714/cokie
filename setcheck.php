<?php
if(isset($_COOKIE["somename"]))
   {
     $name = $_COOKIE["somename"];
         if($name==100)
         {
             echo "<script> location.href='http://www.google.com'; </script>";
                 
         }
       
   }
else
       {
          echo "<script> location.href='cookieset.php'; </script>";
       }
    ?>