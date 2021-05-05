<?php
header('Content-Type: application/json');

include dirname(dirname(__FILE__)).'/db/Db.class.php';

$db = new Db();

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$customer_detail = $db->row('select * from customer where id='.$id);

$arr = array();
$arr['info'] = 'success';
$arr['result'] = $customer_detail;
echo json_encode($arr);