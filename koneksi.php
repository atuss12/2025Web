<?php
$servername = "localhost"; 
$database = "web_2025";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function ambildata($query)
{
    $conn = $GLOBALS['conn'];
    $hasil =mysqli_query($conn, $query);

    $data = [];
    while ($baris = mysqli_fetch_assoc($hasil)) {
     $data[] = $baris;
    }
    return $data;
}
?>