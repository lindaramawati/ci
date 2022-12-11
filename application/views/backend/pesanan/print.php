<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA MITRA</th>
            <th>TANGGAL PEMESANAN</th>
            <th>JUMLAH PESANAN</th>
            <th>NAMA PRODUK</th>
        </tr>

        <?php 
        $no=1;
        foreach ($pesanan as $pesanan): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $pesanan->nama_mitra ?></td>
            <td><?php echo $pesanan->tanggal_pemesanan ?></td>
            <td><?php echo $pesanan->jumlah_pesanan ?></td>
            <td><?php echo $pesanan->nama_produk ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>