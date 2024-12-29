<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<div class="mb-3">
    <label for="content" class="form-label">İçerik</label>
    <textarea class="form-control" id="mdeditor" name="content" rows="10" required>
    <?php
    if (isset($page)) {
        echo $page['content'];
    }
    ?>

    </textarea>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#mdeditor'))
        .catch(error => {
            console.error(error);
        });
</script>