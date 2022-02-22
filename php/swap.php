<?php
    header('Content-type: application/json');
    session_start();
    require_once("dbtools.inc.php");
    $link = create_connection();

    $mname = $_POST["mname"];
    $minput = $_POST["minput"];
    $sname = $_POST["sname"];
    $sinput = $_POST["sinput"];
    $email = $_SESSION["Email"];

    $sql="SELECT $mname, $sname FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);

    $row[0] = $row[0] - $minput;
    $row[1] = $row[1] + $sinput;

    $sql="UPDATE accounts SET $mname = '$row[0]', $sname = '$row[1]' WHERE Email='$email'";
	execute_sql("final", $sql, $link);

    $sql="INSERT INTO record(Email, Event) VALUES('$email', '$minput $mname 換成 $sinput $sname')";
    execute_sql("final", $sql, $link);

    mysql_close($link);
    echo 1;
?>