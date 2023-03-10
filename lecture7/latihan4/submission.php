<?php

    $data['Name'] = $_POST['firstName'] . " " . $_POST['lastName'];
    $data['Email'] = $_POST['email'];
    $data['Message'] = $_POST['message'];

    echo json_encode($data);
    exit;