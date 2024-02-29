<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="100">NIK</td>
                    <td><input type="text" name="no_induk"></td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="30"></td>
                </tr>

                <tr>
                    <td>Jabatan</td>
                    <td><select name="id_jab">
                        <option>----</option>
                        <?php
                        include "koneksi.php";                        
                        $query = mysqli_query($koneksi,"select * from jabatan") or die (mysqli_error($koneksi));
                        while($data = mysqli_fetch_array($query)){
                            echo"<option value=$data[id_jab]> $data[nama_jab]</option>";
                        }
                        ?>
                    </select>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
            </table>
        </form>
    </body>
</html>