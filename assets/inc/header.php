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
                    <li><a href="Boldt.php">Boldt Castle</a></li>
                    <li><a href="Singer.php">Singer Castle</a></li>
                    <li><a href="ABay.php">Alexandria Bay</a></li>
                    <li><a href="UncSam.php">Uncle Sam Boat Tours</a></li>
                </ul>
            </li>
            <li>
                <a>At The Parks</a>
                <ul class="submenu">
                    <li><a href="PlacesToStay.php">Places To Stay</a></li>
                    <li><a href="Trails.php">Trails</a></li>
                    <li><a href="Amenities.php">Park Amenities</a></li>
                    <li><a href="Attractions.php">Park Attractions</a></li>
                </ul>
            </li>
            <li><a href="Resturaunts.php">Resturaunts</a></li> 
            <li>
                <a>Extras</a>
                <ul class="submenu">
                    <li><a href="Sources.php">Sources</a></li>
                    <li><a href="Grading.php">Grading</a></li>
                </ul>
            </li> 
           
        </ul>
    </nav>

    <!--Header-->
    <header>
        <h1>Wellesley Island and Alexandria Bay</h1>
        <h3><?php echo $pageName; ?></h3>
    </header>
