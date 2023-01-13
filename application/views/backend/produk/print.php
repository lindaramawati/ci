<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <table>
        <tr>
            <th>NO</th>
            <th>KODE PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>TYPE</th>
            <th>JENIS</th>
            <th>MERK</th>
            <th>SERI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($produk as $b) : ?>

        <tr>
            <td><?= $b['id_produk']; ?></td>
            <td><?= $b['kode_produk']; ?></td>
            <td><?= $b['nama_produk']; ?></td>
            <td><?= $b['type']; ?></td>
            <td><?= $b['nama_kategori']; ?></td>
            <td><?= $b['merk_produk']; ?></td>
            <td><?= $b['seri_produk']; ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>