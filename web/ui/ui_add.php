<?php
include '../inc.php';

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';

if (!empty($nama)) {
    //proses submit ke API

    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $gaji = isset($_POST['gaji']) ? $_POST['gaji'] : '';

    $url = $api_url.'/ui/create.php';
    $postdata = array();
    $postdata['nama'] = $nama;
    $postdata['umur'] = $umur;
    $postdata['alamat'] = $alamat;
    $postdata['gaji'] = $gaji;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($postdata,'','&'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response = curl_exec ($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_error = curl_error($ch);
    curl_close ($ch);

    $arr_response = json_decode($response, true);
    $info = isset($arr_response['info']) ? $arr_response['info'] : 'error';
    $msg = isset($arr_response['msg']) ? $arr_response['msg'] : 'tidak diketahui';

    header('location:ui_add.php?info='.$info.'&msg='.$msg);
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Add Karyawan Baru</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Add Karyawan Baru</h1>

    <?php
    $info = isset($_GET['info']) ? $_GET['info'] : '';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';

    if (!empty($info)) {
        echo 'Info: '.$info;
        echo '<br />Msg: '.$msg;
        echo '<br />';
    }
    ?>
    <p><a href="ui.php">&laquo; Back</a> | <a href="ui_add.php">Reload</a></p>
    <form method="POST" action="">     
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="umur">
            </div>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat">
            </div>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Gaji</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="gaji">
            </div>
        </div>
        <p>
            <input type="submit" name="sbm" value="Submit" />
        </p>
    </form>
</body>
</html>