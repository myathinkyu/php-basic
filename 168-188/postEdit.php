<?php

include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";
include_once "sysgern/postGenerator.php";

if(isset($_GET["pid"])){
    $pid = $_GET["pid"];
    $result = getSinglePost($pid);
    $posts = [];

    foreach($result as $item){
        $posts ["title"] = $item["title"];
        $posts ["writer"] = $item["writer"];
        $posts ["imglink"] = $item["imglink"];
        $posts ["content"] = $item["content"];
        
    }
}
if(isset($_POST["submit"])){
    $file = $_FILES["file"];
    if(count($file) > 0){
        echo "Image Exist";
    }else{
        echo "Image Exist";
    }

}
?>

<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
    <section class="col-md-9">
    <form method="post" action="postedit.php" enctype="multipart/form-data" class="mb-5 table-bordered p-5">
        <h3 class="text-center text-danger english">Post Edit Here</h3>
        <div class="form-group">
            <label for="posttitle" class="english">Post Title</label>
            <input type="text" class="form-control english" id="posttitle" name="posttitle" 
             value = "<?php echo  $posts ["title"]; ?>">
        </div>
        <div class="form-group">
            <label for="posttype" class="english">Post Type</label>
            <select class="form-control" id="posttype" name="posttype">
                <option value="1">Free Post</option>
                <option value="2">Paid Post</option>
            </select>
        </div>
        <div class="form-group">
            <label for="postwriter" class="english">Post Writer</label>
            <input type="text" class="form-control english" id="postwriter" name="postwriter"
             value = "<?php echo  $posts ["writer"]; ?>">
        </div>

        <div class="form-group">
            <label class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="file" multiple>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </label>
        </div>

        <div class="form-group">
            <label for="postcontent" class="english">Content</label>
            <textarea type="text" class="form-control" id="postcontent"
            rows="12" name="postcontent" >
            <?php echo  $posts ["content"]; ?></textarea>              
        </div>
        
        <div class="row no-gutters justify-content-end">
            <button class="btn btn-outline-primary mr-2">Cancel</button>
            <button type="submit" name="submit" class="btn btn-primary">Post</button>
        </div>
        <img src="uploads/<?php echo  $posts["imglink"]; ?>" alt="" class="img-fluid">
    </form>
    </section>
  </div>
</div>

<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>
