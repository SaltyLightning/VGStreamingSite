<?php
include_once 'includes/display_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>

    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">


</head>

<body>
<?php
include 'includes/base.php';
?>
<div class="display">
    <?php
    $search_query ="";
    generateGameWell();
    ?>
</div>

</body>
</html>