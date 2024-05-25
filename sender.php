<?php
if(isset($_GET['subject']) && isset($_GET['msg']) && isset($_GET['to']) && isset($_GET['name']) && isset($_GET['from'])) {
    $subject = $_GET['subject'];
    $message = $_GET['msg'];
    $to = $_GET['to'];
    $name = $_GET['name'];
    $from = $_GET['from'];
    $headers = "From: $name <$from>\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    try {
        if(mail($to, $subject, $message, $headers)) {
            echo "Доставлено;
        } else {
            echo "Ошибка;
        }
    } catch (Exception $e) {
        echo "Ошибка | $e->getMessage();
    }
} else {
    echo "Ошибка запроса;
}
?>