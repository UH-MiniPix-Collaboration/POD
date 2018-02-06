<?php
include "cad.php";
include "crud.php";

#Creates a table
#$sql = "CREATE TABLE pi_temps(
#id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
#date VARCHAR(10) NOT NULL,
#time VARCHAR(8) NOT NULL,
#temp VARCHAR(4)
#)";

#$result = ExecuteQuery($sql, "Table Created Successfully\n");
#$result = DropTable("pi_temps");

while(TRUE)
{

    $py_output = system("python3 ~/Desktop/POD/cpu_temp.py");
    $vars = explode(" ", $py_output);
    $date = $vars[0];
    $time = $vars[1];
    $temp = $vars[2];

    $sql = "INSERT INTO pi_temps(date, time, temp) VALUES ('$date', '$time', '$temp')";

    $result = SingleQuery($sql);  #Automatically prints to terminal

}
?>
