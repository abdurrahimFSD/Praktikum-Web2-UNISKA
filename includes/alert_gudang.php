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


<!-- doneTambahGudang -->
<?php
    if(isset($_SESSION['doneTambahGudang'])) {
?>
        <script>
            Swal.fire({
                title: "Success",
                text: "Warehouse data added successfully",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/gudang_data.php';
                }
            });
        </script>
<?php
        unset($_SESSION['doneTambahGudang']);
    }
?>
<!-- END doneTambahGudang -->


<!-- doneDeleteGudang -->
<?php
    if(isset($_SESSION['doneDeleteGudang'])) {
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
        unset($_SESSION['doneDeleteGudang']);
    }
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-gudang');

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
<!-- END doneDeleteGudang -->


<!-- doneEditGudang -->
<?php
    if(isset($_SESSION['doneEditGudang'])) {
?>
        <script>
            Swal.fire({
                title: "Success",
                text: "Warehouse data updated successfully",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../pages/gudang_data.php';
                }
            });
        </script>
<?php
        unset($_SESSION['doneEditGudang']);
    }
?>
<!-- END doneEditGudang -->