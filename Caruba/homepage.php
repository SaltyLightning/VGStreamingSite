<?php
    include_once 'includes/display_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caruba</title>
   
    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">

    <!-- Include styling -->
    <link href="homepage-styling.css" rel="stylesheet">

  </head>

<body>
    <?php include 'includes/base.php'; ?>

    <div class="display">
        <?php $featuredVideo = getFeaturedVideo(); ?>
        <h2 class="">Featured Video: <?php echo $featuredVideo->getTitle() ?></h2>
        <div class="row homepage-img">
<!--        <div class="col-md-8">-->
            <a href="viewer.php?video=<?php echo $featuredVideo->getVideoID() ?>"><img src="images/Thumbnails/<?php echo $featuredVideo->getThumbnail()?>" class="featured img-responsive center-block" /></a>
<!--        </div>-->
        </div>
        <div class="left-p">
        <?php
            generateVideoWell(getVideosFromQuery(""), false, 5);
        ?>
        </div>
    </div>
  </body>
</html>