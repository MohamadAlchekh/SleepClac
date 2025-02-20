<?php
// echo "<pre>";
// print_r($_SERVER);
// print_r($_POST);
// echo "</pre>";
// echo $_POST["Hours"];

if ($_POST['type'] == "sleep") 
{
   // sleep for 
   function Sleep_At_These_Hours()
   {
       echo "<h1>Sleep at these times plz</h1>";
       $Hour = $_POST["Hours"];
       $Minutes = $_POST["Minutes"];
       $AmPm = $_POST["AmPm"];
   
       echo "If you want to walk up at ${Hour}:${Minutes} ${AmPm} consider sleeping at these times";
       echo "<br>";
   
       if($_POST["Hours"] and $_POST["Minutes"] and $_POST["AmPm"])
    {
   
       $time = "${Hour}:${Minutes}";
       // sleep for 9 hours - 6 Cycles
       echo date("g:i A",strtotime($time . "- 9 hours"));
   
       echo "<br>";
   
       // sleep for 7 and a half hours - 5 Cycles
       echo date("g:i A",strtotime($time . "- 7 hours - 30 minutes"));
   
       echo "<br>";
   
       // sleep for 6 hours - 4 Cycles
       echo date("g:i A",strtotime($time . "- 6 hours"));
   
       echo "<br>";
   
       // sleep for 4 and a half hours - 3 Cycles
       echo date("g:i A",strtotime($time . "- 4 hours - 30 minutes"));
   
    }
   }
   Sleep_At_These_Hours();
}
else if ($_POST['type'] == "wake")
{
   function Wake_Up_At_These_Hours()
   {
      echo "<h1>Wake up at these times plz</h1>";
      $Hour = $_POST["Hours"];
      $Minutes = $_POST["Minutes"];
      $AmPm = $_POST["AmPm"];
  
      echo "If you want to sleep at ${Hour}:${Minutes} ${AmPm} consider waking up at these times";
      echo "<br>";
  
      if($_POST["Hours"] and $_POST["Minutes"] and $_POST["AmPm"])
      {
  
         $time = "${Hour}:${Minutes}";
         
         // sleep for 4 and a half hours - 3 Cycles
         echo date("g:i A",strtotime($time . "+ 4 hours + 30 minutes"));
         
         echo "<br>";
         
         // sleep for 6 hours - 4 Cycles
         echo date("g:i A",strtotime($time . "+ 6 hours"));
         
         echo "<br>";

         // sleep for 7 and a half hours - 5 Cycles
         echo date("g:i A",strtotime($time . "+ 7 hours + 30 minutes"));
         
         echo "<br>";
         
         // sleep for 9 hours - 6 Cycles
         echo date("g:i A",strtotime($time . "+ 9 hours"));
  
   }
}
   Wake_Up_At_These_Hours();
}
else if ($_POST['type'] == "sleepNow")
{

   function SleepNow()
   {
      echo "<h1>Wake up at these times plz</h1>";
      $Hour = $_POST["Hours"];
      $Minutes = $_POST["Minutes"];
      $AmPm = $_POST["AmPm"];

      echo "If you want to sleep now ${Hour}:${Minutes} ${AmPm} consider waking up at these times";
      echo "<br>";
  
      if($_POST["Hours"] and $_POST["Minutes"] and $_POST["AmPm"])
      {
  
         $time = "${Hour}:${Minutes}";
         
         // sleep for 1 and a half hours - 1 Cycle
         echo date("g:i A",strtotime($time . "+ 1 hours + 30 minutes"));
         
         echo "<br>";
         
         // sleep for 3  hours - 2 Cycles
         echo date("g:i A",strtotime($time . "+ 3 hours"));
         
         echo "<br>";

         // sleep for 4 and a half hours - 3 Cycles
         echo date("g:i A",strtotime($time . "+ 4 hours + 30 minutes"));
         
         echo "<br>";
         
         // sleep for 6 hours - 4 Cycles
         echo date("g:i A",strtotime($time . "+ 6 hours"));
         
         echo "<br>";
         
         // sleep for 7 and a half hours - 5 Cycles
         echo date("g:i A",strtotime($time . "+ 7 hours + 30 minutes"));
         echo "<br>";
         
         // sleep for 9 hours - 6 Cycles
         echo date("g:i A",strtotime($time . "+ 9 hours"));
  
   }
   }
   SleepNow();
}

