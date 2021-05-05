<?php
header('Content-Type: application/json');

include dirname(dirname(__FILE__)).'/db/Db.class.php';

$db = new Db();

$id = isset($_POST['id']) ? (int) $_POST['id'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$umur = isset($_POST['umur']) ? $_POST['umur'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$gaji = isset($_POST['gaji']) ? $_POST['gaji'] : '';

if (empty($id) OR empty($nama)) {
    $arr = array();
    $arr['info'] = 'error';
    $arr['msg'] = 'ID atau nama Kategori tidak ada';

    echo json_encode($arr);
    exit();
}

$datas = array();
$datas['nama'] = $nama;
$datas['umur'] = $umur;
$datas['alamat'] = $alamat;
$datas['gaji'] = $gaji;
$datas['modified'] = date('Y-m-d H:i:s');

$exec = $db->update('customer', $datas,' where id='.$id);

if (!$exec) {
    $arr = array();
    $arr['info'] = 'error';
    $arr['msg'] = 'Query tidak berhasil dijalankan.';

    echo json_encode($arr);
    exit();
}

$arr = array();
$arr['info'] = 'success';
$arr['msg'] = 'Data berhasil diproses.';
echo json_encode($arr);