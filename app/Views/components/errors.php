<link href="<?php echo base_url(); ?>/static/css/sb-admin-2.min.css" rel="stylesheet">
<?php if (isset($errors) && !empty($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= esc($error); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (!isset($error) && isset($error) && !empty($error)): ?>
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
        <?= esc($error); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>



<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>/static/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>