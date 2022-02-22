
<?php
    require_once("dbtools.inc.php");
    $link = create_connection();

    $sql="SELECT * FROM accounts";
	$result=execute_sql("final", $sql, $link);	
    $first=$_POST["first"];
    $last=$_POST["last"];
    $nkname=$_POST["nkname"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql = "SELECT Email FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);
    if($row[0]!=null){
        mysql_close($link);
        echo "<script>alert('Email 已存在'); location.href='..';</script>";
    }
    else {//新增使用者
        $sql =  "INSERT INTO accounts(FirstName, LastName, Nickname, Email, Password) VALUES ('$first', '$last', '$nkname', '$email',  '$pass')";
        $result = execute_sql("final", $sql, $link);
        $sql="INSERT INTO record(Email, Event) VALUES('$email', '註冊')";
        execute_sql("final", $sql, $link);
        mysql_close($link);
        echo "<script>alert('註冊成功'); location.href='..';</script>";
    }	
    
?>