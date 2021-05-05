<?php
include '../inc.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Analyst</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
    <script type="text/javascript">
        function deleteData(id) {
            var cfm = confirm("Apakah anda yakin akan menghapus data ini?");
            if (cfm) {
                window.location.href='data_delete.php?id='+id;
            }
        }
    </script>
    <body>
    <?php
    $api_data_list = $api_url.'/data/list.php';
    $json_list = @file_get_contents($api_data_list);
    ?>
    <h1>Daftar Karyawan Data Analyst</h1>
    <?php
    $info = isset($_GET['info']) ? $_GET['info'] : '';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    if (!empty($info)) {
        echo 'Info: '.$info;
        echo '<br />Msg: '.$msg;
        echo '<br />';
    }
    ?>
    <p><a href="data_add.php">Add New</a> | <a href="data.php">Reload</a> | <a href="../home.php">Home</a></p>
    <table class="table">
        <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Alamat</th>
        <th scope="col">Gaji</th>
        <th scope="col">Created</th>
        <th scope="col">Modified</th>
        <th scope="col">Action</th>
    </tr>
        </thead>
        <tbody>
    <?php
        $array = json_decode($json_list, true);
        $result = isset($array['result']) ? $array['result'] : array();
        $no = 0;
        foreach($result as $arr) {
            $no++;
            $link_edit = '<a href="data_edit.php?id='.$arr['id'].'">[Edit]</a>';
            $link_delete = '<a href="javascript:void:;" onclick="deleteData(\''.$arr['id'].'\')">[Delete]</a>';
            echo '
            <tr>
                <td>'.$no.'</td>
                <td>'.$arr['nama'].'</td>
                <td>'.$arr['umur'].'</td>
                <td>'.$arr['alamat'].'</td>
                <td>'.$arr['gaji'].'</td>
                <td>'.date('d M Y H:i', strtotime($arr['created'])).'</td>
                <td>'.date('d M Y H:i', strtotime($arr['modified'])).'</td>
                <td>'.$link_edit.' '.$link_delete.'</td>
            </tr>
            ';
        }
        ?>
        </tbody>
</table>
    </body>
</html>