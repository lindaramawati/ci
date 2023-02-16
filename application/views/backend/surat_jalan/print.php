<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <table>
        <tr>
            <th>NO</th>
            <th>METODE PENGIRIMAN</th>
            <th>NOMER KENDARAAN</th>
        </tr>

        <?php 
        $no=1;
        foreach ($suratjalan as $suratjalan): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $suratjalan->metode_pengiriman ?></td>
            <td><?php echo $suratjalan->nomer_kendaraan ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>