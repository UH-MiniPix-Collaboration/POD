<?php
require_once 'db_connection.php';

function SingleQuery($queri)
{
    $conn = OpenCon();

    if(mysql_query($queri))
    {
        return "Success\n";
    }

#    else
#    {
#        return $conn -> error;
#    }
}
?>
