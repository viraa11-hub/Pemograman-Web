<a href="index.php?page=buku">Kembali ke Data Buku</a>
<br /><br />
<?php
    include "../koneksi.php";
    $idbuku = $_GET['idbuku'];
    $ambildata = mysqli_query($sambung, "select * from tbl_buku where idbuku='$idbuku'");
    while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

    <form action="halaman/buku/bukuubah_aksi.php" method="post" name="formubah">
        <table>
            <tr>
                <td>ID Buku</td>
                <td><input type="text" name="idbuku" value="<?php echo $tampildata['idbuku'] ?>" readonly></td>
            </tr>

            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $tampildata['judul'] ?>"></td>
            </tr>

            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $tampildata['pengarang'] ?>"></td>
            </tr>

            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $tampildata['penerbit'] ?>"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="tombolubah" value="Ubah" onclick="return confirm('Apa Anda yakin akan mengubah data buku?')>
            </tr>
        </table>
    </form>

<?php
}
?>