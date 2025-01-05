<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <script src="/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body>
    <div class="container mt-5">
        
      <form action="/test" method="post">
        <textarea id="editor" name="editor"></textarea>
        <button type="submit" class="btn btn-primary mt-3">Save Content</button>
      </form>

      <?php if(session()->get('message')): ?>
        <div class="alert alert-success mt-3">
          <?= session()->get('message') ?>
        </div>
      <?php endif; ?>
    </div>

    <script>
      tinymce.init({
        selector: "#editor",
        plugins: "advlist link image table code fullscreen wordcount paste contextmenu",
        toolbar:
          "undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image table | fullscreen | code",
        contextmenu: "undo redo | inserttable | cell row column deletetable | bold italic underline | link",
        width: "100%",
        height: 400,
      });
    </script>
  </body>
</html>
