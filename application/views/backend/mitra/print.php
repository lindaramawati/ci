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
            <th>TYPE</th>
            <th>ALAMAT MITRA</th>
            <th>NOMER TELEPON</th>
        </tr>

        <?php 
        $no=1;
        foreach ($mitra as $mitra): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $mitra->nama_mitra ?></td>
            <td><?php echo $mitra->type ?></td>
            <td><?php echo $mitra->alamat_mitra ?></td>
            <td><?php echo $mitra->no_telepon ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>