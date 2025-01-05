

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url(); ?>/static/css/sb-admin-2.min.css" rel="stylesheet">
    <?= view('components/links') ?>

</head>

<body>
<div class="container mt-5">
        <?= view('components/errors') ?>
        <?= view('components/alert-session') ?>
        <h2 class="mb-4 text-center">Create Page</h2>
        <div><a href="/page">Go back</a></div>
        <form action="<?= base_url() ?>page/store" method="post">
            <input type="hidden" name="id">
            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>

            <!-- Slug -->
            <div class="mb-3">
                <label for="slug" class="form-label">slug</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="text" class="form-control"  name="slug"  required placeholder="Enter slug">
                </div>
            </div>


            <!-- Content --> <textarea id="content" name="content"></textarea>

            <!-- Role Selection -->
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <select class="form-select"  name="status" required>
                    <option hidden selected value="draft" >draft</option>
                    <option value="published">published</option>
                    <option value="draft">draft</option>
                    <option value="archived">archived</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary">GO</button>
            </div>
        </form>
    </div>


    <script src="<?= base_url() ?>tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: "#content",
            plugins: "advlist link image table code fullscreen wordcount paste contextmenu",
            toolbar: "undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image table | fullscreen | code",
            contextmenu: "undo redo | inserttable | cell row column deletetable | bold italic underline | link",
            width: "100%",
            height: 400,
        });
    </script>
</body>

</html>