<?php

$errors = [];

$result = '';

$data = $_POST;
if( isset($data['do'])) {
    
    $name = strip_tags($_POST['name']);
    $phone = strip_tags($_POST['phone']);
    $count = strip_tags($_POST['count']);
    $date = strip_tags($_POST['date']);
    $time = strip_tags($_POST['time']);
   

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
    if (empty($phone)) {
        $errors[] = 'Phone is empty';
    }
    if (empty($count)) {
        $errors[] = 'Count is empty';
    }
    if (empty($date)) {
        $errors[] = 'Date is empty';
    }
    if (empty($time)) {
        $errors[] = 'Time is empty';
    }
   
    

    
    if (empty($errors)) {
        $mess =  'Повідомлення було отримано' . '<br/>' . 'Дата: '. date('Y-m-d') . '<br/>' . 'Замовлення на '. $count. ' персон(у) на '. $date . ' на ' .$time. ' на ім\'я '. $name;
        $result = "<p style='color: green; font-size:2.0em;'>{$mess}</p><br>";
    
    } else {
        $allErrors = join('<br/>', $errors);
        $result = "<p style='color: red; font-size:2.0em;'>{$allErrors}</p><br>";
    }

    echo $result;
}

?>