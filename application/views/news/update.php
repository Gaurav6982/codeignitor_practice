<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>
<h2><?php echo $title; ?></h2>
<div class="row">
    <div class="col-md-6 offset-md-3">
<?php echo validation_errors(); ?>

<?php echo form_open('news/update/'.$row->id); ?>

    <label for="title">Title</label>
    <input type="text" name="title" class="form-control"  value="<?php echo $row->title??""?>"/><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control" ><?php echo $row->text??""?></textarea><br />

    <input type="submit" name="submit"  class="btn btn-secondary"  value="Update news" />

</form>
</div>
</div>