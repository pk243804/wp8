<?php
/* Template Name: Test Page */
 get_header();
?>



<?php 
    $cat = array( $_POST['cat'] );

if(isset($_POST['submit'])){
    global $user_ID;

    $new_post = array(
        'post_title' => $_POST['post_title'],
        'post_content' => $_POST['post_content'],
        'post_status' => 'publish',
        'post_author' => $user_ID,
        'post_type' => 'portfolio',
        'post_category' => $cat,
        'taxonomy'  =>  'portfolio_category'
    );
    $post_id = wp_insert_post($new_post,$wp_error);
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
        <td><input name="post_title" type="text" /></td>
      </tr>
      <tr>
        <td><label for="post_content">Post Content</label></td>
        <td><textarea id="post_content" name="post_content" cols="50" rows="6"></textarea></td>
      </tr>
      <tr>
        <td><label for="category">category</label></td>
        <td><?php wp_dropdown_categories(array('taxonomy'=> 'portfolio_category','hide_empty' => 0, 'name' => 'cat'));?></td>
      </tr>
      <tr>
          <td><label for="image">Featured Image</label></td>
          <td><input type="file" size="20"  name="image" /></td>
      </tr>
      <tr> 
        <td><input name="submit" type="submit" value="submit" /></td>
      </tr>
   </table>

  </form>
</div>
</div>








<!---------Display part---------------------->
<?php
  $args = array(  
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' =>-1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'taxonomy' => 'portfolio_category'
    );
    $result = new WP_Query( $args );       
?>
<section class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php $i = 1;
        while ($result->have_posts()) : $result->the_post(); 
            $categories = get_the_terms(get_the_ID(), "portfolio_category")[0];
            $cat_slug=$categories->slug;
            $cat_name=$categories->name; 
            $portfolio_image=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php the_title();?></td>
      <td><?php echo $cat_name;?></td>
      <td><?php the_content();?></td>
      <td> <img src="<?php echo $portfolio_image;?>" width='200'> </td>
   
      <td><?php echo '<a href="'.site_url('index.php/edit-post').'?post-id='.get_the_ID().'" class="btn btn-warning"> Edit</a>'; ?>  &nbsp;&nbsp;    <a href="<?php echo get_delete_post_link(get_the_ID()); ?>" class="btn btn-danger">Remove</a></td>
    </tr>
    <?php $i++;  endwhile; 
    wp_reset_postdata();?>
  </tbody>

</table>
</section>