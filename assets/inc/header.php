<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= <?php echo "assets/css/".$cssName.".css"; ?> rel="stylesheet" type="text/css">
    <title><?php echo "Wellesley Island and Alexandria Bay - ".$pageName; ?></title>
</head>

<body>
    <!--Navigation Bar-->
    <nav class="dropdown">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a>Tourist Attractions</a>
                <ul class="submenu">
                    <li><a href="boldt.php">Boldt Castle</a></li>
                    <li><a href="singer.php">Singer Castle</a></li>
                    <li><a href="abay.php">Alexandria Bay</a></li>
                    <li><a href="uncsam.php">Uncle Sam Boat Tours</a></li>
                </ul>
            </li>
            <li>
                <a>At The Parks</a>
                <ul class="submenu">
                    <li><a href="placestostay.php">Places To Stay</a></li>
                    <li><a href="trails.php">Trails</a></li>
                    <li><a href="amenities.php">Park Amenities</a></li>
                    <li><a href="attractions.php">Park Attractions</a></li>
                </ul>
            </li>
            <li><a href="resturaunts.php">Resturaunts</a></li> 
            <li><a href="comments.php">Comments</a></li>
            <li>
                <a>Extras</a>
                <ul class="submenu">
                    <li><a href="sources.php">Sources</a></li>
                    <li><a href="grading.php">Grading</a></li>
                </ul>
            </li> 
        </ul>
    </nav>

    <!--Header-->
    <header>
        <h1>Wellesley Island and Alexandria Bay</h1>
        <h3><?php echo $pageName; ?></h3>
    </header>