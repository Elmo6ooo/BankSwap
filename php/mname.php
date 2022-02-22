<?php
    session_start();
    $mname = $_POST["mname"];
    $sname = $_POST["sname"];
    $dname = $_POST["dname"];
    $wname = $_POST["wname"];
    $tname = $_POST["tname"];
    echo json_encode(array('mname'=>$_SESSION[$mname], 'sname'=>$_SESSION[$sname], 'dname'=>$_SESSION[$dname], 'wname'=>$_SESSION[$wname], 'tname'=>$_SESSION[$tname]));

?>