<?php
    include_once 'includes/display_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
   
    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">
    <link href="results-styling.css" rel="stylesheet">

  </head>

  <body>
  	<?php
    include 'includes/base.php';
    ?>
    <div class="display container-fluid">
        <?php
        $search_query ="";
        if (isset($_POST["query"])){
            $search_query = $_POST["query"];
        }
        else
        {
            if (isset($_GET["query"])){
                $search_query = $_GET["query"];
            }
        }
        $videos = getVideosFromQuery($search_query);
        if (empty($videos))
            echo "<h2>No videos yet. Maybe it's time to make your own!</h2>";
        else
            generateVideoWell($videos);
        ?>
    </div>

  </body>
</html>