<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?>



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Buranın içindekiler yan yana gelicek -->
<div class="row">
        <?= view('components/counter') ?>
        <a class="fa fa-plus" href="javascript:void(0);" id="showFormBtn">Add</a>
        <div class="row" id="addForm" style="display:none; ">
            <?= view('components/addcounter') ?>    
        </div>
</div>

        <script>
                const showFormBtn = document.getElementById('showFormBtn');
                const addForm = document.getElementById('addForm');

                showFormBtn.addEventListener('click', function() {
                        if (addForm.style.display === "none" || addForm.style.display === "") {
                                addForm.style.display = "block";
                        } else {
                                addForm.style.display = "none";
                        }
                });
        </script>



        <?= $this->endSection() ?>