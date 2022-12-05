<html>
    <head>
        <link rel="stylesheet" href="style.css"></link>
</head>
    <body>
<?php

$conn = mysqli_connect('localhost', 'root', '', 'wędkowanie');

$query = "SELECT nazwa,akwen,wojewodztwo FROM ryby,lowisko WHERE ryby.id = lowisko.Ryby_id
AND lowisko.rodzaj = 3;";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){
    echo $row[0]. ' Pływa w rzece ' . $row[1]. ' '. $row[2]."<br>";
}

$query2 = "SELECT id,nazwa,wystepowanie FROM ryby WHERE styl_zycia = 1";
$sql = mysqli_query($conn, $query2);
?>
<div class='elo'>
    <table>
    <tr>
        <th>L.p</th>
        <th>Ryba</th>
        <th>Srodowiska</th>
    </tr>
    <?php
    while($row = mysqli_fetch_row($sql)){
        echo '<tr>';
        echo '<td>'. $row[0]. '</td>'. '<td>'.$row[1]. '</td>'.'<td>'.$row[2]. '</td>';
        echo '</tr>';
    }
    ?>
</table>
</div>
    </body>
</html>