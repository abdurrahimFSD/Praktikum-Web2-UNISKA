<!-- nikSudahAda -->
<?php
    if(isset($_SESSION['nikSudahAda'])) {
?>
        <script>
            let nik = "<?= $_SESSION['nikSudahAda'] ?>";
            Swal.fire({
                title: `NIK ${nik} already exists!`,
                text: "Please enter another NIK",
                icon: "warning",
                confirmButtonColor: '#dc3545',
                confirmButtonText: "OK"
            }).then((result) => {
                // Kembalikan fokus ke NIK
                document.getElementById('nik').focus();
            });
        </script>
<?php
        unset($_SESSION['nikSudahAda']);
    }
?>
<!-- END nikSudahAda -->