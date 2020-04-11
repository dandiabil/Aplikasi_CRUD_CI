<?php
defined('BASEPATH') OR exit('No direct script access allowed')
?>
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
            <th>Pilihan</th>
        </tr>

        <?php 
            $no = 1;
            foreach($v_tampildata as $data){ ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->id_barang ?></td>
                <td><?php echo $data->nama_barang ?></td>
                <td><?php echo $data->jenis_barang ?></td>
                <td><?php echo $data->harga ?></td>
                <td><?php echo $data->stok ?></td>
                <td>
                    <a href="<?php echo base_url() ?>crud/edit_data/<?php echo $data->id_barang ?>">Edit</a>
                    <a href="<?php echo base_url() ?>crud/delete_data/<?php echo $data->id_barang ?>">Hapus</a>
                </td>
            </tr>

            <?php } ?>
    </table>
    
</body>
</html>