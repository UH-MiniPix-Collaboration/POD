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

$py_output = system("python3 ~/Desktop/POD/cpu_temp.py");

$sql = "INSERT INTO pi_temps(date, time, temp) VALUES ('2018-30-01', '9:57:43', '49.5')";

$result = SingleQuery($sql);

if ($result === true)
{
    echo "Successful Query";
}
else
{
    echo $result;
}

#echo $result;

?>
