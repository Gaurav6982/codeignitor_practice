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
        <div class="col-md-6 offset-md-3">
            <?php foreach ($news as $news_item): ?>
                <div class="card">
                    <div class="card-body">
                    <h3><?php echo $news_item->title; ?> by <?php echo $news_item->name; ?> </h3>
                    <p><a href="<?php echo site_url('news/'.$news_item->slug); ?>">View article</a></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>