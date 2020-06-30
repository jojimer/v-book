<?php
if(isset($_POST['chapter']) && isset($_POST['title']) && isset($_POST['file']) && isset($_POST['bookkey'])){
$chapter = $_POST['chapter'];
$title = $_POST['title'];
$file = $_POST['file'];
$bookkey = $_POST['bookkey'];

$part = $chapter - 1;

?>
<div class="modal" id="vb-modal-section" tabindex="-1" role="dialog" style="display:block">
  <div class="modal-section-wrap" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="vb-section">
      <div class="p-4">
        <form action="POST" method="POST">
        <div class="form-group">
            <span class="vb-chapter0">
                <label for="Section">Add New Section</label>
                <input name="name" class="content-name form-control" type="text">
                <input type="hidden" data-chapter="<?php echo $chapter; ?>" data-title="<?php echo $title; ?>" value="<?php echo $file; ?>">
            </span>
            <button class="btn btn-primary px-3 float-right vb-new-content" style="margin-top:-38px;">Submit</button>
        </div>
        </form>
      </div>
      <div class="vbcontent-lightbox"></div>
      </div>
      <div class="modal-footer">       
        <!-- <input id="vbcc-text" type="hidden" value="<?php //echo $text; ?>"> -->
              
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop show"></div>

<script type="text/javascript">
jQuery(document).ready(function($){
    
    // window.addSection = function (file,section,chapter,book,bookkey){
    //     $.ajax({
    //         method: "POST",
    //         url: "../model/content.php",
    //         data: {id:bookkey,name:section,chapter:chapter,title:book,action:"add"},
    //         dataType: "text",
    //         success: function(data){
    //             let key = data - 1;
    //             loadChapterPart(chapter);                
    //             showEditor(chapter,key,section,file);    
    //             //alert(data);
    //         }
    //     });
    // }

    loadChapterPart(<?php echo $part; ?>, 1);
});
</script>

<?php } ?>