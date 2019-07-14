<?php
require 'koneksi.php';
$id = $_GET["id"];
if (hapus($id) > 0) {
  echo " <script>
          alert('Data Berhasil Dihapus');
          document.location.href = 'delete.php';
        </script>";
} else {
  echo " <script>
          alert('Data Gagal Dihapus');
        </script>";
}
