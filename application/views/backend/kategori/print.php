<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <table>
        <tr>
            <th>NO</th>
            <th>KODE KATEGORI</th>
            <th>NAMA KATEGORI</th>
        </tr>

        <?php 
        $no = 1;
        foreach ($kategori as $k) :
            ?>
            <tbody>
              <td><?php echo $no++?></td>
              <td><?php echo $k->kode_kategori ?></td>
              <td><?php echo $k->nama_kategori ?></td>

        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
            window.print();
        </script>