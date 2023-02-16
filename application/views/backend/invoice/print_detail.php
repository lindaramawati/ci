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
            <th>TANGGAL PENGIRIMAN</th>
            <th>JUMLAH PENGIRIMAN</th>
            <th>Jumlah</th>
        </tr>

        <?php 
        $no=1;
        foreach ($invoice as $invoice): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $invoice->nama_mitra ?></td>
            <td><?php echo $invoice->tanggal_pengiriman ?></td>
            <td><?php echo $invoice->jumlah_pengiriman ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>