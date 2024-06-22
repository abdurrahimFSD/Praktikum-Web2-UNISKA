<!-- karyawanSudahTerdistribusi -->
<?php
    if(isset($_SESSION['karyawanSudahTerdistribusi'])) {
?>
        <script>
            let nik = "<?= addslashes($_SESSION['karyawanSudahTerdistribusi']) ?>";
            Swal.fire({
                title: `NIK ${nik} already exists!`,
                title: `Karyawan dengan nik ${nik} sudah pernah didistribusikan`,
                icon: "warning",
                confirmButtonColor: '#dc3545',
                confirmButtonText: "OK"
            });
        </script>
<?php
        unset($_SESSION['karyawanSudahTerdistribusi']);
    }
?>
<!-- END karyawanSudahTerdistribusi -->


<!-- doneAddDistribusi -->
<?php
    if(isset($_SESSION['doneAddDistribusi'])) {
?>
        <script>
            Swal.fire({
                title: "Success",
                text: "Distribution data added successfully",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/distribusi_data.php';
                }
            });
        </script>
<?php
        unset($_SESSION['doneAddDistribusi']);
    }
?>
<!-- END doneAddDistribusi -->