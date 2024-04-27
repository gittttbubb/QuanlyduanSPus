
<form action="index.php?act=tintuc" method="POST">

<div style="max-width: 900px; margin: 0px auto;">
        <h2>Bài viết</h2>
        
            <input type="text" name="title" id="" placeholder="Nhập tiêu đề"></input>
            <textarea class="tinyMCE" name="content" id="" cols="30" rows="10"></textarea>
            <input type="button" value="Thêm bài viết" name="index.php?act=addpost">
        
    </div>
    </form>
    <script src="https://cdn.tiny.cloud/1/3fq7jpuo0qcjrn8ra23sn8bofk90bgz40s9jyl676uuwubog/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.tinyMCE',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
      });
    </script>