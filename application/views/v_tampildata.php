<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data</title>
</head>
<body>

    <table border="1px solid black" style="border-collapse:collapse">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
        </tr>

        <?php 
            $no = 1;
            foreach($v_tampildata as $data){
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$data['id_barang']."</td>";
                echo "<td>".$data['nama_barang']."</td>";
                echo "<td>".$data['jenis_barang']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td>".$data['stok']."</td>";
                echo "</tr>";
                $no++;
            }
        ?>
    </table>
    
</body>
</html>