<?php 
if(isset($_POST['submit'])){
    $to = "russvityaz30@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $company = $_POST['company'];
    $subject = "Отправка формы";
    $subject2 = "Копия вашей формы";
    $message = $first_name . " " . $company . " написал:" . "\n\n" . $_POST['message'];
    $message2 = "Копия " . $first_name . "\n\n" . $_POST['message'];

    $headers = "От:" . $from;
    $headers2 = "Для:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Форма отправлена. Благодарим вас " . $first_name . ", мы свяжемся с Вами в ближайшее время.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>