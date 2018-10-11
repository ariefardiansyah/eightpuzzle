<?php
echo "<h2>Estimation</h2>";
$box[1] = $box1;
$box[2] = $box2;
$box[3] = $box3;
$box[4] = $box4;
$box[5] = $box5;
$box[6] = $box6;
$box[7] = $box7;
$box[8] = $box8;
$box[9] = $box9;
$estup = 0;
$estleft = 0;
$estright = 0;
$estdown = 0;


if ($box1 == 9) {                              //box1
    //right
    $box[1] = $box2;
    $box[2] = $box1;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

    //down
    $box[1] = $box4;
    $box[2] = $box2;
    $box[4] = $box1;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box2 == 9) {                       //box2
    //left
    $box[1] = $box2;
    $box[2] = $box1;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

    //right
    $box[1] = $box1;
    $box[2] = $box3;
    $box[3] = $box2;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

    //down
    $box[1] = $box1;
    $box[2] = $box5;
    $box[3] = $box3;
    $box[5] = $box2;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box3 == 9) {                       //box3
    //left
    $box[2] = $box3;
    $box[3] = $box2;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

    //down
    $box[2] = $box2;
    $box[3] = $box6;
    $box[6] = $box3;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box4 == 9) {                       //box4
    //up
    $box[1] = $box4;
    $box[4] = $box1;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //right
    $box[1] = $box1;
    $box[4] = $box5;
    $box[5] = $box4;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

    //down
    $box[1] = $box1;
    $box[4] = $box7;
    $box[5] = $box5;
    $box[7] = $box4;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box5 == 9) {                       //box5
    //up
    $box[2] = $box5;
    $box[5] = $box2;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //left
    $box[2] = $box2;
    $box[4] = $box5;
    $box[5] = $box4;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

    //right
    $box[2] = $box2;
    $box[4] = $box4;
    $box[5] = $box6;
    $box[6] = $box5;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

    //down
    $box[2] = $box2;
    $box[4] = $box4;
    $box[5] = $box8;
    $box[6] = $box6;
    $box[8] = $box5;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box6 == 9) {                       //box6
    //up
    $box[3] = $box6;
    $box[6] = $box3;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //left
    $box[3] = $box3;
    $box[5] = $box6;
    $box[6] = $box5;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

    //down
    $box[3] = $box3;
    $box[5] = $box5;
    $box[6] = $box9;
    $box[9] = $box6;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estdown++;
        }
    }
    $estdown = 9 - $estdown;

} else if ($box7 == 9) {                       //box7
    //up
    $box[4] = $box7;
    $box[7] = $box4;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //right
    $box[4] = $box4;
    $box[7] = $box8;
    $box[8] = $box7;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

} else if ($box8 == 9) {                       //box8
    //up
    $box[5] = $box8;
    $box[8] = $box5;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //left
    $box[5] = $box5;
    $box[7] = $box8;
    $box[8] = $box7;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

    //right
    $box[5] = $box5;
    $box[7] = $box7;
    $box[8] = $box9;
    $box[9] = $box8;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estright++;
        }
    }
    $estright = 9 - $estright;

} else if ($box9 == 9) {                       //box9
    //up
    $box[6] = $box9;
    $box[9] = $box6;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estup++;
        }
    }
    $estup = 9 - $estup;

    //left
    $box[6] = $box6;
    $box[8] = $box9;
    $box[9] = $box8;
    for ($i = 1; $i < 9; $i++) {
        if ($box[$i] == $i) {
            $estleft++;
        }
    }
    $estleft = 9 - $estleft;

}

//mencari minimum estimasi
$esti[1] = $estup;
$esti[2] = $estleft;
$esti[3] = $estright;
$esti[4] = $estdown;
$min = 10;

for ($i = 1; $i < 5; $i++) {
    if ($esti[$i] < $min && $esti[$i] != 0) {
        $min = $esti[$i];
        $minestarray = $i;
    }
}

//menampilkan estimasi
if ($esti[1] == $min) {
    echo "<b> UP : " . $estup . "</b><br>";
} else if ($esti[1] != 0) {
    echo " UP : " . $estup . "<br>";
}
if ($esti[2] == $min) {
    echo "<b> LEFT : " . $estleft . "</b><br>";
} else if ($esti[2] != 0) {
    echo " LEFT : " . $estleft . "<br>";
}
if ($esti[3] == $min) {
    echo "<b> RIGHT : " . $estright . "</b><br>";
} else if ($esti[3] != 0) {
    echo " RIGHT : " . $estright . "<br>";
}
if ($esti[4] == $min) {
    echo "<b> DOWN : " . $estdown . "</b><br>";
} else if ($esti[4] != 0) {
    echo " DOWN : " . $estdown . "<br>";
}


?>



