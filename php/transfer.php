<?php
    require_once("dbtools.inc.php");
    session_start();
    $link = create_connection();
    $tname = $_POST["tname"];
    $tinput = $_POST["tinput"];
    $oemail = $_POST["oemail"];
    $email = $_SESSION["Email"];
    $sql="SELECT * FROM accounts WHERE Email='$oemail'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);
    if ($row[0]==null){
        mysql_close($link);
        echo 0;
    }        
    else {
        $sql="SELECT $tname FROM accounts WHERE Email='$email'";
        $row = mysql_fetch_row(execute_sql("final", $sql, $link));    
        $row[0] = $row[0] - $tinput;    
        $sql="UPDATE accounts SET $tname = '$row[0]' WHERE Email='$email'";
        execute_sql("final", $sql, $link);  
        $sql="SELECT $tname FROM accounts WHERE Email='$oemail'";
        $row = mysql_fetch_row(execute_sql("final", $sql, $link));
        $row[0] = $row[0] + $tinput; 
        $sql="UPDATE accounts SET $tname = '$row[0]' WHERE Email='$oemail'";
        execute_sql("final", $sql, $link);
        $sql="INSERT INTO record(Email, Event) VALUES('$email', '轉出 $oemail $tinput $tname')";
        execute_sql("final", $sql, $link);
        $sql="INSERT INTO record(Email, Event) VALUES('$oemail', '$email 轉入 $tinput $tname')";
        execute_sql("final", $sql, $link);
        mysql_close($link);
        echo 1;
    }
    
?>