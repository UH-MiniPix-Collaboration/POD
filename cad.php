<?php
include "db_connection.php";

function ExecuteQuery($sql, $name)
{
    $conn = OpenCon();

    if (mysql_query($sql))
    {
        return $name;
    }
}

function ModifyColumn($table, $columnname, $datatype)
{
    $query = "ALTER TABLE ". $table."
    MODIFY COLUMN ". $columnname ." ".$datatype;

    $result = ExecuteQuery($query, "Column Successfully Modified\n");
    return $result;
}

function AddColumn($table, $columnname, $datatype)
{
    $query  = "ALTER TABLE ". $table."
    ADD ". $columnname ." ".$datatype;

    $result = ExecuteQuery($query, "Column Added Successfully\n");
    return $result;
}

function DropColumn($table, $columnname)
{
    $query = "ALTER TABLE ". $table."
    DROP COLUMN ". $columnname;

    $result = ExecuteQuery($query, "Column Deleted Successfully\n");
    return $result;
}

function DropTable($table)
{
    $query = "DROP TABLE ". $table;

    $result = ExecuteQuery($query, "Table Deleted Successfully\n");
    return $result;
}
?>
