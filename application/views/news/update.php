<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>
<h2><?php echo $title; ?></h2>
<div class="row">
    <div class="col-md-6 offset-md-3">
<?php echo validation_errors(); ?>
<p class="text-success text-center" id="success"></p>
<p class="text-danger text-center" id="error"></p>
<?php //echo form_open('news/update/'.$row->id); ?>
    <input id="news_id" type="hidden" value="<?php echo $row->id?>"/>
    <label for="title">Title</label>
    <input type="text" required name="title" id="title" class="form-control" id="title" value="<?php echo $row->title??""?>"/><br />

    <label for="text">Text</label>
    <textarea name="text" required class="form-control" id="text" id="text" ><?php echo $row->text??""?></textarea><br />

    <input type="submit" id="submit" name="submit"  class="btn btn-secondary"  value="Update news" />

<!-- </form> -->
</div>
</div>
<script>
   
    $('#submit').click(function(){
        
        $.ajax({
            url:'/api/update_news/'+$('#news_id').val(),
            type:"POST",
            data:{
                "_method":"PUT",
                "title":$('#title').val(),
                "text":$('#text').val(),
            },
            success:function(data){
                $('#success').html(JSON.parse(data).success);
                
            },
            error:function(err){
                $('#error').html(JSON.parse(err).success);
            }
        })
    })
</script>
