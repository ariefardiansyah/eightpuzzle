<?php

$nav = $_GET['nav'];
$b1 = $_GET['b1'];
$b2 = $_GET['b2'];
$b3 = $_GET['b3'];
$b4 = $_GET['b4'];
$b5 = $_GET['b5'];
$b6 = $_GET['b6'];
$b7 = $_GET['b7'];
$b8 = $_GET['b8'];
$b9 = $_GET['b9'];
$savenav = $_GET['savenav'];

//perubahan nilai box
if ($b1 == 9) {
    if ($nav == "down") {
        $b4temp = $b1;
        $b1 = $b4;
        $b4 = $b4temp;
    } else if ($nav == "right") {
        $b2temp = $b1;
        $b1 = $b2;
        $b2 = $b2temp;
    }
} else if ($b2 == 9) {
    if ($nav == "left") {
        $b1temp = $b2;
        $b2 = $b1;
        $b1 = $b1temp;
    } else if ($nav == "right") {
        $b3temp = $b2;
        $b2 = $b3;
        $b3 = $b3temp;
    } else if ($nav == "down") {
        $b5temp = $b2;
        $b2 = $b5;
        $b5 = $b5temp;
    }
} else if ($b3 == 9) {
    if ($nav == "left") {
        $b2temp = $b3;
        $b3 = $b2;
        $b2 = $b2temp;
    } else if ($nav == "down") {
        $b6temp = $b3;
        $b3 = $b6;
        $b6 = $b6temp;
    }
} else if ($b4 == 9) {
    if ($nav == "up") {
        $b1temp = $b4;
        $b4 = $b1;
        $b1 = $b1temp;
    } else if ($nav == "right") {
        $b5temp = $b4;
        $b4 = $b5;
        $b5 = $b5temp;
    } else if ($nav == "down") {
        $b7temp = $b4;
        $b4 = $b7;
        $b7 = $b7temp;
    }
} else if ($b5 == 9) {
    if ($nav == "up") {
        $b2temp = $b5;
        $b5 = $b2;
        $b2 = $b2temp;
    } else if ($nav == "left") {
        $b4temp = $b5;
        $b5 = $b4;
        $b4 = $b4temp;
    } else if ($nav == "right") {
        $b6temp = $b5;
        $b5 = $b6;
        $b6 = $b6temp;
    } else if ($nav == "down") {
        $b8temp = $b5;
        $b5 = $b8;
        $b8 = $b8temp;
    }
} else if ($b6 == 9) {
    if ($nav == "up") {
        $b3temp = $b6;
        $b6 = $b3;
        $b3 = $b3temp;
    } else if ($nav == "left") {
        $b5temp = $b6;
        $b6 = $b5;
        $b5 = $b5temp;
    } else if ($nav == "down") {
        $b9temp = $b6;
        $b6 = $b9;
        $b9 = $b9temp;
    }
} else if ($b7 == 9) {
    if ($nav == "up") {
        $b4temp = $b7;
        $b7 = $b4;
        $b4 = $b4temp;
    } else if ($nav == "right") {
        $b8temp = $b7;
        $b7 = $b8;
        $b8 = $b8temp;
    }
} else if ($b8 == 9) {
    if ($nav == "left") {
        $b7temp = $b8;
        $b8 = $b7;
        $b7 = $b7temp;
    } else if ($nav == "right") {
        $b9temp = $b8;
        $b8 = $b9;
        $b9 = $b9temp;
    } else if ($nav == "up") {
        $b5temp = $b8;
        $b8 = $b5;
        $b5 = $b5temp;
    }
} else if ($b9 == 9) {
    if ($nav == "left") {
        $b8temp = $b9;
        $b9 = $b8;
        $b8 = $b8temp;
    } else if ($nav == "up") {
        $b6temp = $b9;
        $b9 = $b6;
        $b6 = $b6temp;
    }
}

session_start();
$_SESSION['box1'] = $b1;
$_SESSION['box2'] = $b2;
$_SESSION['box3'] = $b3;
$_SESSION['box4'] = $b4;
$_SESSION['box5'] = $b5;
$_SESSION['box6'] = $b6;
$_SESSION['box7'] = $b7;
$_SESSION['box8'] = $b8;
$_SESSION['box9'] = $b9;
$_SESSION['savenav'] = $_SESSION['savenav'] . "+" . $nav;

header("Location: epuzzle.php");

?>