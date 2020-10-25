<?php

    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once 'vendor/autoload.php';
    $mail = new PHPMailer(true);                  
    $mail->SMTPDebug = 0;                                
    $mail->isSMTP();                            
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;  
    //ganti dengan email dan password yang akan di gunakan sebagai email pengirim                  
    $mail->Username = 'ngopiterus07@gmail.com';       
    $mail->Password = 'akucakep123';                       
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                  
    //ganti dengan email dan nama kamu
    $mail->setFrom($_POST['email'], $_POST['nama']);

    $mail->addAddress('muhari07@gmail.com', "Ilham Bahari");     
    $mail->isHTML(true);                                 
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "<h3>Pesan dari portofolio</h3><br> ".$_POST['pesan'];
    $mail->send();

    // $_SESSION['berhasil'] = 'Terima kasih sudah mengirim pesan :)';

    echo "<script>
    alert('Terima kasih sudah mengirim pesan :)');
    window.location.href='index';
    </script>";