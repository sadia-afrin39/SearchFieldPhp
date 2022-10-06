<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['message'];
    $message = $_POST['message'];
    
    $mailTo = "dani@mmtuts.net";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
        
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.php?mail=send");
}