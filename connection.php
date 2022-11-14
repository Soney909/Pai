<html>
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
echo '<table>';
echo '<td>'. 'id' .'</td>'. '<td>'. 'ryba' . '</td>'. '<td>' . 'srodowisko' . '</td>';
while($row = mysqli_fetch_row($sql)){
    echo '<tr>';
    echo '<td>'. $row[0]. '</td>'. '<td>'.$row[1]. '</td>'.'<td>'.$row[2]. '</td>';
    echo '</tr>';
}
echo '</table>';
?>
    </body>
</html>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>