<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <?php foreach ($news as $news_item): ?>
    <hr>
        <h3><?php echo $news_item->title; ?> by <?php echo $news_item->name; ?> </h3>
        <p><a href="<?php echo site_url('news/'.$news_item->slug); ?>">View article</a></p>
    <hr>
<?php endforeach; ?>
</body>
</html>