<?php
    require_once("dbtools.inc.php");
    session_start();
    $link = create_connection();
    $email = $_SESSION["Email"];
    $sql="SELECT Time, Event FROM record WHERE Email='$email' ORDER BY Time DESC";
    $result = execute_sql("final", $sql, $link);
    mysql_close($link);
    $data = [];
    while ($row = mysql_fetch_row($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
?>