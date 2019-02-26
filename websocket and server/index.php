<?php

    if(!empty($_SERVER["HTTP CLIENT IP"]))
    {
      $IP = $_SERVER["HTTP CLIENT IP"];

    }
     else if (!empty($IP = $_SERVER["HTTP_X_FORWARDED_FOR"]))
    {

      $IP=$_SERVER["HTTP_X_FORWARDED_FOR"];
	

    }

    else
    {
     $IP=$_SERVER["REMOTE_ADDR"];
    }
    echo $IP;
?>