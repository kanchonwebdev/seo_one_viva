<?php
include_once 'lib/Admin.php';
$ad = new Admin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $id = $_POST['info_id'];
    $img = $_FILES["img"]["name"];
    $upImg = $_FILES['img']['tmp_name'];

    move_uploaded_file($upImg, "uploaded_file/".$img);
    $data = $ad->addInfo($name, $img, $id);
    echo "New task added successfully";
}
