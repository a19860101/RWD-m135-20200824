<?php
    session_start();
    // if(isset($_POST["validate"]) && $_POST["validate"]==$_SESSION['captcha']["code"]){
    if(isset($_POST["validate"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $addr = $_POST["addr"];
        $desc = nl2br($_POST["desc"]);


        #收件者
        $to = "a098905581346@gmail.com";
		$to = "a19860101@gmail.com";
        #信件主旨
        $subject = "聯絡諮詢";
        
        #訊息內容
        $msg = 
            "\n姓名：".$name.
            "\nEMAIL：".$email.
            "\n聯絡電話：".$phone.
            "\n地址：".$addr.
            "\n物件描述：\n".$desc;

        if(mail("$to","$subject","$msg","$email")){
            header("Refresh:3;url=form.php");
            echo "諮詢已送出，3秒後跳轉";
        }else{
            header("Refresh:3;url=form.php");
            echo "發送失敗，3秒後跳轉";
        }

        // echo $msg;
    }else{
        header('Location:form.php?error');

    }

    ?>
