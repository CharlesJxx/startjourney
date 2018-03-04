<?php
    
    date_default_timezone_set('prc');
    $date = date("y/m/d", time());
    
    require("conn.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if($name!=null){
        if($email!=null){
            if($subject!=null){
                if($message!=null){
                    $document = array(
                        "name"=>$name,
                        "email"=>$email,
                        "subject"=>$subject,
                        "message"=>$message,
                        "date"=>$date,
                        "isRead"=>"no"
                    );
                    $mongo->insert("feedback",$document);
                    echo "您的反馈我们已经收到，我们会尽快答复您！";
                }
            }
        }
    }

    
?>