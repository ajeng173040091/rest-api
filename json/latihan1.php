<?php

// $mahasiswa = [

// [
//     "nama" => "Ajeng Tri Gustina",
//     "nrp" => "173040091",
//     "email" => "173040091@mail.unpas.ac.id"
// ],

// [
//     "nama" => "Naysila Qiana Assyofa",
//     "nrp" => "173040092",
//     "email" => "173040092@mail.unpas.ac.id"
// ]

// ];



$dbh = new PDO('mysql:host=localhost;dbname=makananindo', 'root', '');
$db = $dbh->prepare('SELECT * FROM makananindo');
$db->execute();
$makananindo = $db->fetchAll(PDO::FETCH_ASSOC);



$data = json_encode($makananindo);
echo $data;

?>