<?php
    require_once("dbtools.inc.php");
    session_start();
    $link = create_connection();
    $dname = $_POST["dname"];
    $dinput = $_POST["dinput"];
    $email = $_SESSION["Email"];
    $sql="SELECT $dname FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);

    $row[0] = $row[0] + $dinput;

    $sql="UPDATE accounts SET $dname = '$row[0]' WHERE Email='$email'";
    $result=execute_sql("final", $sql, $link);

    $sql="INSERT INTO record(Email, Event) VALUES('$email', '存入 $dinput $dname')";
    execute_sql("final", $sql, $link);

    mysql_close($link);
    echo 1;
?>