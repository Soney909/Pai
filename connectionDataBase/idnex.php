<?php
     require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM fantasy";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Autor: ' .$row['autor'] .'<br>';
        echo 'Tytuł: ' .$row['nazwa'] .'<br>';
        echo 'Rok: ' .$row['rok'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
?>