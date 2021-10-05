<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <input type="hidden" id="site_url" value="<?php echo site_url()?>"/>
        <div class="col-md-6 offset-md-3" id="data">
            
        </div>
    </div>
    <script>
    
    $(document).ready(function(){
        $.ajax({
            url:'/api/get_all_news',
            type:"GET",
            data:"",
            success:function(data){
                data=JSON.parse(data);
                var string="";
                $.each(data,function(index,val){
                    
                    string+='<div class="card">';
                    string+='<div class="card-body">';
                    string+='<h3>'+val.title+' by '+val.name+' </h3>';
                    string+='<p><a href="'+site_url+'/news/'+val.slug+'">View article</a></p>';
                    string+='</div>';
                    string+='</div>';
            
                });
                $('#data').html(string);
            }
        })
    })

</script>
</body>
</html>