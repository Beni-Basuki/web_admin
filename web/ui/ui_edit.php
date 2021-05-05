<?php
include '../inc.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (empty($id)) {
    header('location:ui.php');
    exit();
}

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';

if (!empty($nama)) {
    //proses submit ke API

    $id = isset($_POST['id']) ? (int) $_POST['id'] : '';
    $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    $gaji = isset($_POST['gaji']) ? $_POST['gaji'] : '';
    
    $url = $api_url.'/ui/update.php';
    $postdata = array();
    $postdata['id'] = $id;
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

    header('location:ui_edit.php?id='.$id.'&info='.$info.'&msg='.$msg);
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Edit Data Karyawan</h1>

    <?php
    $info = isset($_GET['info']) ? $_GET['info'] : '';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';

    if (!empty($info)) {
        echo 'Info: '.$info;
        echo '<br />Msg: '.$msg;
        echo '<br />';
    }
    $api_ui_detail = $api_url.'/ui/detail.php?id='.$id;
    $json_detail = @file_get_contents($api_ui_detail);

    $arr_detail = json_decode($json_detail, true);
    $result = isset($arr_detail['result']) ? $arr_detail['result'] : array();    
    ?>
    <p><a href="ui.php">&laquo; Back</a> | <a href="ui_edit.php?id=<?php echo $result['id']; ?>">Reload</a></p>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>" />
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>" />
            </div>
        </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Umur</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="umur" value="<?php echo $result['umur']; ?>" />
            </div>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>" />
            </div>
        </div>
        <div class="form-group row">
                <label for="staticEmail" class="col-sm-1 col-form-label">Gaji</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="gaji" value="<?php echo $result['gaji']; ?>" />
            </div>
        </div>
        <p>
            <input type="submit" name="sbm" value="Submit" />
        </p>
    </form>
</body>
</html>