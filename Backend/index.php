<h1>Sleep at these times plz</h1>
<?php
echo "<pre>";
// print_r($_SERVER);
print_r($_POST);
echo "</pre>";
// echo $_POST["Hours"];


// sleep for 
function Sleep_At_These_Hours()
{
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