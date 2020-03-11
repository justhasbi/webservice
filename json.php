<?php

$konek = mysqli_connect("localhost", "id12804335_hasboo", "coba123", "id12804335_akademik");
 
$query = "SELECT * from outlet_owner";
$result = mysqli_query($konek, $query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    "id_owner" => $row["id_owner"],
    "nama" => $row["nama"], 
    "alamat" => $row["alamat"],
    "jenis_kelamin" => $row["j_kelamin"],
    "no_telp" => $row["no_telp"],
    "no_kk" => $row["no_kk"],
    );
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA OWNER\":" . $data . "}";

?>