<?php
    session_start();
    require_once("dbtools.inc.php");
    $link = create_connection();
    $email=$_SESSION["Email"];

    $sql =  "SELECT * FROM accounts WHERE Email='$email'";
    $result = execute_sql("final", $sql, $link);
    $row = mysql_fetch_row($result);
    $_SESSION["TWD"] = $row[5];
    $_SESSION["USD"] = $row[6];
    $_SESSION["HKD"] = $row[7];
    $_SESSION["GBP"] = $row[8];
    $_SESSION["AUD"] = $row[9];
    $_SESSION["CAD"] = $row[10];
    $_SESSION["SGD"] = $row[11];
    $_SESSION["CHF"] = $row[12];
    $_SESSION["JPY"] = $row[13];
    $_SESSION["ZAR"] = $row[14];
    $_SESSION["SEK"] = $row[15];
    $_SESSION["NZD"] = $row[16];
    $_SESSION["THB"] = $row[17];
    $_SESSION["PHP"] = $row[18];
    $_SESSION["IDR"] = $row[19];
    $_SESSION["EUR"] = $row[20];
    $_SESSION["KRW"] = $row[21];
    $_SESSION["VND"] = $row[22];
    $_SESSION["MYR"] = $row[23];
    $_SESSION["CNY"] = $row[24];
    mysql_free_result($result);
    mysql_close($link);    

    echo json_encode(array('TWD'=>$_SESSION["TWD"], 'USD'=>$_SESSION["USD"], 'HKD'=>$_SESSION["HKD"], 'GBP'=>$_SESSION["GBP"], 'AUD'=>$_SESSION["AUD"], 'CAD'=>$_SESSION["CAD"], 
    'SGD'=>$_SESSION["SGD"], 'CHF'=>$_SESSION["CHF"], 'JPY'=>$_SESSION["JPY"], 'ZAR'=>$_SESSION["ZAR"], 'SEK'=>$_SESSION["SEK"], 'NZD'=>$_SESSION["NZD"], 'THB'=>$_SESSION["THB"],
    'PHP'=>$_SESSION["PHP"], 'IDR'=>$_SESSION["IDR"], 'EUR'=>$_SESSION["EUR"], 'KRW'=>$_SESSION["KRW"], 'VND'=>$_SESSION["VND"], 'MYR'=>$_SESSION["MYR"], 'CNY'=>$_SESSION["CNY"]));
?>