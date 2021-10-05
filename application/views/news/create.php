<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>

<div class="row">
<div class="col-md-6 offset-md-3">
<?php echo validation_errors(); ?>
<p class="text-success text-center" id="success"></p>
<p class="text-danger text-center" id="error"></p>
<?php //echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" /><br />

    <label for="text">Text</label>
    <textarea name="text" id="text" class="form-control" ></textarea><br />

    <input type="submit"  id="submit" name="submit"  class="btn btn-secondary" value="Create news item" />

<!-- </form> -->
</div>
</div>
<script>
   
    $('#submit').click(function(){
        $.ajax({
            url:'/api/set_news',
            type:"POST",
            data:{
                "title":$('#title').val(),
                "text":$('#text').val(),
            },
            success:function(data){
                $('#title').val(" ");
                $('#text').val(" ");
                $('#success').html(JSON.parse(data).success);
            },
            error:function(err){
                $('#error').html(JSON.parse(err).success);
            }
        })
    })
</script>