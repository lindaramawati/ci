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
        $no=1;
        foreach ($produk as $produk): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $produk->kode_produk ?></td>
            <td><?php echo $produk->nama_produk ?></td>
            <td><?php echo $produk->type ?></td>
            <td><?php echo $produk->Jenis ?></td>
            <td><?php echo $produk->merk_produk ?></td>
            <td><?php echo $produk->seri_produk ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>