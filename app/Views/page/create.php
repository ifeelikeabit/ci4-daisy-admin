<?= $this->extend('layouts/elder') ?>

<?= $this->section('content') ?>

<?= $this->section('title') ?>
Pages
<?= $this->endSection() ?>

<div class="container mt-5">
    <?= view('components/alert-session') ?>
    <?= view('components/alert-data') ?>
    <?= view('components/errors') ?>

    <?php if(isset($lan)){ echo $lan; } ?>
    <?php if(isset($error)){ echo $error; } ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" required>
        </div>
        <?= view('components/texteditor') ?>
        <div class="mb-3">
            <label for="status" class="form-label">Durum</label>
            <select class="form-select" name="status" required>
                <option value="draft">draft</option>
                <option value="published">published</option>
                <option value="archived">archived</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
</div>


<!-- CKEditor Initialization -->

<?= $this->endSection() ?>