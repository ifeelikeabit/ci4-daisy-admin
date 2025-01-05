<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<div id="editor-container"></div>
<input type="hidden" name="content" id="content" />
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    document.querySelector('form').onsubmit = function() {
        var content = quill.root.innerHTML;
        document.getElementById('content').value = content;
    }
</script>