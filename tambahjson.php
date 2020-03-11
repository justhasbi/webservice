<html>
<head>
    <title>Rest Web Services</title>
</head>
<body>
    <?php
        if (isset ($_POST['names'])) {
            $url = 'https://hasboo.000webhostapp.com/webserv/jsonmhsw.php';
            //$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"prodi\":\".$_POST['progdi'].\"}]";//
            $data="{\"nama\":\"".$_POST['names']."\",\"alamat\":\"".$_POST['address']."\",\"Jenis_Kelamin\":\"".$_POST['sex']."\",\"No_telp\":\"".$_POST['phone_num']."\", \"no_KK\":\"".$_POST['kk_num']."\"}";
            echo "datanya ".$data;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $response = curl_exec($ch);
            echo "response ".$response;
            curl_close($ch);
        }
    ?>
<form method="POST" action="">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="names" id="names"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="address" id="address"></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td><input type="text" name="sex" id="sex"></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td><input type="text" name="phone_num" id="phone_num"></td>
        </tr>
        <tr>
            <td>No KK</td>
            <td><input type="text" name="kk_num" id="kk_num"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="submit" value="Tambah"></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>