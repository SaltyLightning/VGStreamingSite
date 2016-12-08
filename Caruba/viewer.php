<?php
    include_once "../Classes/Video.php";
    $video = new Video($_GET["video"]);
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

    <div class="video">

    </div>
  </body>
</html>