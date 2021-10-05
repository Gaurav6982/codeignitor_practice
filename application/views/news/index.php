<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>
<div class="row">
    <div class="col-md-6 offset-md-3">
<div class="card">
    <div class="card-header">
    <a href="<?php echo site_url('news/create')?>">Create a Post</a>
    </div>
    <input type="hidden" id="site_url" value="<?php echo site_url()?>"/>
    <div class="card-body" id="data">

    </div>
</div>
</div>
</div>
<script>
    
    $(document).ready(function(){
        var site_url=$('#site_url').val();
        $.ajax({
            url:'/api/get_news_by_user',
            type:"GET",
            data:"",
            success:function(data){
                console.log(data);
                data=JSON.parse(data);
                var string="";
                $.each(data,function(index,val){
                    string+=' <div class="card">';
                    string+='<h3>'+ val.title+'</h3>';
                    string+='<div class="main">'
                    string+=val.text;
                    string+='</div>';
                    // string+='<p><a href="'+site_url+'news/'+val.slug+'">View article</a></p>';
                    string+='<p ><a style="color:red" href="'+site_url+'/news/delete/'+val.id+'">Delete</a></p>';
                    string+='<p ><a style="color:orange" href="'+site_url+'/news/update/'+val.id+'">Update</a></p>';
                    string+='</div>';
                });
                $('#data').html(string);
            }
        })
    })

</script>