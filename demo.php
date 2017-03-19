<?php
$news = simplexml_load_file('http://feeds.feedburner.com/ndtvnews-top-stories');

$feeds = array();

$i = 0;

foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $feeds[$i]['title'] = (string) $item->title;
    $feeds[$i]['link'] = (string) $item->link;
    $feeds[$i]['description'] = (string) $item->description;


    $i++;
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>News Feed</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html">News Feed</a>
            </div>
    </div>
    <div id="page-wrapper">
    <div class="container-fluid">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <strong>Source: NDTV NEWS
                            <BR>
                                TOP STORIES!</strong>
                        <?php
foreach ($feeds as $feeds)
{
                                ?>
        <div class="alert alert-info">
                    
                    <a href="<?php echo $feeds['link'];?>"><strong><?php echo $feeds['title'];?></strong>
                    <?php echo $feeds['description'];?> </a>
                </div>                         
   

    
   
   <?php

}

  $news = simplexml_load_file('http://feeds.feedburner.com/ndtvnews-world-news');

$feeds = array();

$i = 0;

foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $feeds[$i]['title'] = (string) $item->title;
    $feeds[$i]['link'] = (string) $item->link;
    $feeds[$i]['description'] = (string) $item->description;
    $i++;
}
?>
<strong> Source: NDTV NEWS
<BR>
WORLD NEWS!
</strong>

<?php
foreach ($feeds as $feeds)
{
                                ?>
        <div class="alert alert-info">
                    
                    <a href="<?php echo $feeds['link'];?>"><strong><?php echo $feeds['title'];?></strong> </a>
                    <?php echo $feeds['description'];?>
                </div>                         
   
<? 

}
?>
  
   
                    </div>
                </div>
               
                </div>






        </div>
    </div>
</div>
   


</body>
</html>