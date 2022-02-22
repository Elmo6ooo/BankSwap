<?php
    require_once("dbtools.inc.php");
    session_start();
    $link = create_connection();
    $wname = $_POST["wname"];
    $winput = $_POST["winput"];
    $email = $_SESSION["Email"];
    $sql="SELECT $wname FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);

    $row[0] = $row[0] - $winput;

    $sql="UPDATE accounts SET $wname = '$row[0]' WHERE Email='$email'";
    $result=execute_sql("final", $sql, $link);

    $sql="INSERT INTO record(Email, Event) VALUES('$email', '提領 $winput $wname')";
    execute_sql("final", $sql, $link);

    mysql_close($link);
    echo 1;
?>