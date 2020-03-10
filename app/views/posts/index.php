<?php require_once APPROOT.'/views/inc/header.php';?>
<?php foreach ($data as $post):?>
<?php //print_r($post);?>
<h1><?php echo $post->title;?></h1>
    <h8><?php echo $post->created_at, $post->user_id;?></h8>
 <p><?php echo $post->content;?></p>

<hr>
<?php endforeach;?>
Blog posts
<?php require_once APPROOT.'/views/inc/footer.php';?>