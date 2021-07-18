<?php

  if(isset($_POST['create_post'])){
    $post_title = $_POST['title'];
    $post_author = $_POST['post_author'];
    $post_category_id = $_POST['post_category_id'];
    $post_status = $_POST['post_status'];

    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    $post_date= date('d-m-y');
    $post_comment_count = 4;

    move_uploaded_file($post_image_temp, "../images/$post_image");

  }

?>

<form action="" method="post" enctype="multipart/form-data">

   <!-- Post Title -->
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
  </div>

  <!-- Post Category -->
  <div class="form-group">
    <label for="post_category">Post Category</label>
    <input type="text" class="form-control" name="post_category_id">
  </div>

  <!-- Post Author -->
  <div class="form-group">
    <label for="post_author">Post Author</label>
    <input type="text" class="form-control" name="post_author">
  </div>

  <!-- Post Status -->
  <div class="form-group">
    <label for="post_status">Post Status</label>
    <input type="text" class="form-control" name="post_status">
  </div>

  <!-- Post Image -->
  <div class="form-group">
    <label for="post_image">Post Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <!-- Post Tags -->
  <div class="form-group">
    <label for="post_tags">Post Tags</label>
    <input type="text" class="form-control" name="post_tags">
  </div>

  <!-- Post Content-->
  <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10">
    </textarea>

  <!--Submit Button-->
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" Value="Publish Post">
  </div>


  </div>










</form>