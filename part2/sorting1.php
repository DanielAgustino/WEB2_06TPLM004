<?php

$koneksi = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$hasil = mysqli_query($koneksi, "SELECT * FROM data_customers ORDER BY customerNumber DESC");

if (!$hasil) {
    die("Query failed: " . mysqli_error($koneksi));
}

echo "<html>
<head>
    <title>Customers Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>";

echo "<table>
<tr>
<th>Customer Number </th>
<th>Customer Name</th>
<th>Phone</th>
<th>Address Line 1</th>
<th>City</th>
</tr>";

while ($data = mysqli_fetch_array($hasil)) {
    echo "<tr>
    <td>" . $data['customerNumber'] . "</td>
    <td>" . $data['customerName'] . "</td>
    <td>" . $data['phone'] . "</td>
    <td>" . $data['addressLine1'] . "</td>
    <td>" . $data['city'] . "</td>
    </tr>";
}

echo "</table>
</body>
</html>";

mysqli_close($koneksi);
?>
