<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>
<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('news/create')?>">Create a Post</a>
<?php foreach ($news as $news_item): ?>
    <hr>
        <h3><?php echo $news_item->title; ?></h3>
        <div class="main">
                <?php echo $news_item->text; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item->slug); ?>">View article</a></p>
        <p ><a style="color:red" href="<?php echo site_url('news/delete/'.$news_item->id) ?>">Delete</a></p>
        <p ><a style="color:orange" href="<?php echo site_url('news/update/'.$news_item->id) ?>">Update</a></p>
    <hr>
<?php endforeach; ?>