<!-- namaGudangSudahAda -->
<?php
    if(isset($_SESSION['namaGudangSudahAda'])) {
?>
        <script>
            let namaGudang = "<?= $_SESSION['namaGudangSudahAda'] ?>";
            Swal.fire({
                title: `${namaGudang} already exists!`,
                text: "Please enter another Nama Gudang",
                icon: "warning",
                confirmButtonColor: '#dc3545',
                confirmButtonText: "OK"
            }).then((result) => {
                // Kembalikan fokus ke NIK
                document.getElementById('namaGudang').focus();
            });
        </script>
<?php
        unset($_SESSION['namaGudangSudahAda']);
    }
?>
<!-- END namaGudangSudahAda -->