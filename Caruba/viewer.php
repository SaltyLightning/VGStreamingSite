<?php
    include_once "../Classes/Video.php";
    include_once "includes/display_functions.php";
    $video = new Video($_GET["video"]);
    $relatedVideos = getVideosFromQuery($video->getUploader());

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $video->getTitle()?></title>
   
    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">

    <!-- Include styling -->
    <link href="viewer-styling.css" rel="stylesheet">

  </head>

  <body>
  	<?php include 'includes/base.php'; ?>

    <div class="video container-fluid">
        <h2 class="video col-md-9 "><?php echo $video->getTitle() ?></h2>
        <div class="player col-md-9">
            <a href="#" class="player"></a>
        </div>
        <div class="col-md-3">
            <?php if (count($relatedVideos) > 1){

            echo '<h4 class="video">More videos from ' . $video->getUploader() . '</h4>';
//    <!--        <img src="images/play.png" id="playerImage" />-->


                generateVideoWell($relatedVideos, $video->getVideoID(), 2   );
            }
            ?>
        </div>
    </div>
  </body>
</html>