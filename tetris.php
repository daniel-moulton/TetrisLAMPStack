<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="tetris.js"></script>
    <title>Play Tetris</title>
</head>
<body>
    <?php 
        // session_start();
        // if (!($_SESSION['loggedIn']==true)){
        //     header('Location: index.php');
        // }
    ?>
    <ul class="navbar">
        <li><a href="index.php" >Home</a></li>
        <li><a style="float:right" href="tetris.php" class="active">Play Tetris</a></li>
        <li><a style="float:right" href="leaderboard.php">Leaderboard</a></li>
        <li><a style="float:right; <?php if (isset($_SESSION['loggedIn'])) {echo 'display: inline;';} else {echo 'display: none;';}?>" href="logout.php">Logout</a></li>
    </ul> 
    <hr>
    <div class="main">
        <div class="grey-container"> 
            <button class="btnStart" id="startBtn">Start game!</button>
            <h2>Score: <span id="Score">0</span></h2>
            <div id="tetris-bg">
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row1"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row2"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row3"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row4"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row5"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row6"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row7"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row8"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row9"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row10"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row11"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row12"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row13"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row14"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row15"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row16"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row17"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row18"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row19"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="row20"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
                <div class="taken hidden-row"></div>
            </div>
            <div id="game-over-screen">
                <h2></h2>
            </div>
        </div>
    </div>
    
</body>
</html>