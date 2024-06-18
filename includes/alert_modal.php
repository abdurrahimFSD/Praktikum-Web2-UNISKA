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
                // Kembalikan fokus ke NIK dan letakkan kursor di akhir angka
                let nikInput = document.getElementById('nik');
                nikInput.focus();
                nikInput.setSelectionRange(nikInput.value.length, nikInput.value.length);
            });
        </script>
<?php
        unset($_SESSION['nikSudahAda']);
    }
?>
<!-- END nikSudahAda -->


<!-- doneTambahKaryawan -->
<?php
    if(isset($_SESSION['doneTambahKaryawan'])) {
?>
        <script>
            Swal.fire({
                title: "Success",
                text: "Employee data added successfully",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/karyawan_data.php';
                }
            });
        </script>
<?php
        unset($_SESSION['doneTambahKaryawan']);
    }
?>
<!-- END doneTambahKaryawan -->


<!-- doneDeleteKaryawan -->
<?php
    if(isset($_SESSION['doneDeleteKaryawan'])) {
?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: "Deleted!",
                    text: "This data has been deleted.",
                    icon: "success"
                });
            });
        </script>
<?php
        unset($_SESSION['doneDeleteKaryawan']);
    }
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const href = button.getAttribute('href');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });
        });
    });
});
</script>
<!-- END doneDeleteKaryawan -->


<!-- doneEditKaryawan -->
<?php
    if(isset($_SESSION['doneEditKaryawan'])) {
?>
        <script>
            Swal.fire({
                title: "Success",
                text: "Employee data updated successfully",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/karyawan_data.php';
                }
            });
        </script>
<?php
        unset($_SESSION['doneEditKaryawan']);
    }
?>
<!-- END doneEditKaryawan -->