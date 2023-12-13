<div class="menu">
    <ul class="list_menu">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=buku">Data Buku</a></li>
        <li><a href="index.php?page=siswa">Siswa</a></li>
        <li><a href="index.php?page=pinjam">Peminjaman</a></li>
        <li><a href="index.php?page=petugas">Petugas</a></li>
    </ul>
<div class="konten">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'buku':
                include "halaman/buku/buku.php";
                break;
            case 'siswa':
                include "halaman/siswa/siswa.php";
                break;
            case 'pinjam':
                include "halaman/pinjam/pinjam.php";
                break;
            case 'petugas':
                include "halaman/petugas/petugas.php";
                break;
            case 'bukutambah':
                include "halaman/buku/bukutambah.php";
                break;
            default:
                echo "Maaf halaman yang anda tuju tidak ada";
                break;
        }
    }
    ?>
</div>
</div>