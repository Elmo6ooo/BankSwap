<?php
    session_start();
    require_once("dbtools.inc.php");
    $link = create_connection();

    $email=$_POST["email"];
    $pass=$_POST["pass"];
				
    $sql =  "SELECT * FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);

    $row = mysql_fetch_row($result);

    if($row[3]==$email && $row[4] == $pass) { //查詢結果拿來判斷
        $_SESSION["Nickname"] = $row[2];
        $_SESSION["Email"] = $email;
        $sql="INSERT INTO record(Email, Event) VALUES('$email', '登入')";
        execute_sql("final", $sql, $link);
        mysql_free_result($result);
        mysql_close($link);
        echo '<meta http-equiv=REFRESH CONTENT=1;url=..>';
    }
    else{
        mysql_free_result($result);
        mysql_close($link);
        header("Location: ..?error=0");
    }
    
?>