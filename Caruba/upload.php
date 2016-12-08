<?php
include_once 'includes/display_functions.php';
if (isset($_GET["title"])){
    $length = date("h:i:s", strtotime($_GET["length"]));
    $sql = sprintf("INSERT INTO videos (VideoName, Thumbnail, VideoURl, VideoLength, Uploader, GameID, VideoID) VALUES ('%s', '%s_tn.jpg', '%s', '%s', '%s','%d', NULL)",
        $_GET["title"], $_GET["title"], $_GET["title"] . ".php" , $length, $_GET["uploader"], $_GET["ID"]);
    $con = mysqli_connect("localhost", "cs", "", "videogamestreaming");
    if (mysqli_connect_errno($con)) {

    }
    else {
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "<p>error. $sql</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>

    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">
    <link href="results-styling.css" rel="stylesheet">

</head>
<body>
    <?php include 'includes/base.php'; ?>
    <div class="display">
    <form action="" method="GET">
        <div>
            <label>Title</label>
            <input class="field" type="text" name="title"/>
            <br/>
            <label>Length</label>
            <input class="field" type="text" name="length"/>
            <br/>
            <label>Uploader</label>
            <input class="field" type="text" name="uploader"/>
            <br/>
            <label>GameID</label>
            <input class="field" type="text" name="ID"/>

            <input type="submit"/>
        </div>
    </form>
    </div>
</body>
</html>