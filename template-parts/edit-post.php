<?php
/* Template Name: Edit Post */
   get_header();
?>


<?php if (isset ($_GET['post-id'])) {
        $postid = $_GET['post-id'];
      }        
      $post_complete = get_post($postid);

      $title = $post_complete->post_title;
      $content = $post_complete->post_content;
      $categories = get_the_terms($post_complete, 'portfolio_category');
          foreach ($categories as $category) {
            $category_name = $category->name;
          }
      $portfolio_image=wp_get_attachment_url(get_post_thumbnail_id($post_complete));   
 ?>




 <?php if(isset($_POST['update'])){
$check_title=get_page_by_title($title, 'OBJECT', 'portfolio');
    $new_post = array(
        'ID'  =>  $check_title->ID,
        'post_title' => $_POST['post_title'],
        'post_content' => $_POST['post_content'],
        'post_status' => 'publish',
        'post_type' => 'portfolio',
        'post_category' => array($_POST['cat']),
        'taxonomy'  =>  'portfolio_category'
    );
    $post_id = wp_update_post($new_post);
    wp_set_post_terms($post_id, $_POST['cat'], 'portfolio_category', false );

        // featured image //
            $filename = $_FILES['image']['name'];
            $file = $_FILES['image']['tmp_name']; 
                $upload_file = wp_upload_bits( $filename, null, @file_get_contents( $file ) );
                $wp_filetype = wp_check_filetype($filename, null );
                 
                  $attachment = array(
                    'post_mime_type' => $wp_filetype['type'],
                    'post_parent'    => $post_id,
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $filename ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                  );  
                  $attachment_id = wp_insert_attachment( $attachment, $upload_file['file'], $post_id );
                 
                    wp_update_attachment_metadata( $attachment_id,  $attachment_data );
                    set_post_thumbnail( $post_id, $attachment_id ); 
}

?>
<div class="container">
<div id="wrap">
  <form action="" method="post" enctype="multipart/form-data">

    <table border="0" width="100%">
      <tr>
        <td><label for="post_title">Post Title</label></td>
        <td><input name="post_title" type="text" value="<?php echo $title; ?>"></td>
      </tr>
      <tr>
        <td><label for="post_content">Post Content</label></td>
        <td><textarea name="post_content" cols="50" rows="6"> <?php echo $content; ?> </textarea></td>
      </tr>
      <tr>
        <td><label for="category">Category</label></td>     
        <td><?php wp_dropdown_categories(array('taxonomy'=> 'portfolio_category', 'show_option_none' => $category_name, 'hide_empty' => 0, 'name' => 'cat'));?></td> 
      </tr>
      <tr>
          <td><label for="image">Featured Image</label></td>
          <td><input type="file" size="20" name="image" value=""> <img src='<?php echo $portfolio_image; ?>'> </td>
      </tr>
      <tr> 
        <td><input name="update" type="submit" value="Update"></td>
      </tr>
   </table>

  </form>
</div>
</div>













