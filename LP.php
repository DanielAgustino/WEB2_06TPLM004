<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian 12</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Angka</th>
        <th>Hasil Perkalian</th>
    </tr>
    <?php
    $i = 15;
    while ($i <= 45) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>" . (12 * $i) . "</td>";
        echo "</tr>";
        $i += 2;
    }
    ?>
</table>

</body>
</html>
