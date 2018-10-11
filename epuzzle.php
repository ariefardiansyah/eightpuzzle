<?php
session_start();
$box1 = $_SESSION['box1'];
$box2 = $_SESSION['box2'];
$box3 = $_SESSION['box3'];
$box4 = $_SESSION['box4'];
$box5 = $_SESSION['box5'];
$box6 = $_SESSION['box6'];
$box7 = $_SESSION['box7'];
$box8 = $_SESSION['box8'];
$box9 = $_SESSION['box9'];
$savenav = $_SESSION['savenav'];
?>

<html>
<head>
    <title>8-Puzzle With A*</title>
</head>
<body>
<center>

    <h1>EIGHT PUZZLE With A*</h1><br>
    <table style="width:100px border:1px" cellpadding="20x">
        <tr>
            <?php if ($box1 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box1 == 1) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box1; ?></td>
            <?php } else if ($box1 != 1) { ?>
                <td style="border: double"><?php echo $box1; ?></td>
            <?php } ?>

            <?php if ($box2 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box2 == 2) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box2; ?></td>
            <?php } else if ($box2 != 2) { ?>
                <td style="border: double"><?php echo $box2; ?></td>
            <?php } ?>

            <?php if ($box3 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box3 == 3) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box3; ?></td>
            <?php } else if ($box3 != 3) { ?>
                <td style="border: double"><?php echo $box3; ?></td>
            <?php } ?>
        </tr>
        <tr>
            <?php if ($box4 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box4 == 4) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box4; ?></td>
            <?php } else if ($box4 != 4) { ?>
                <td style="border: double"><?php echo $box4; ?></td>
            <?php } ?>

            <?php if ($box5 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box5 == 5) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box5; ?></td>
            <?php } else if ($box5 != 5) { ?>
                <td style="border: double"><?php echo $box5; ?></td>
            <?php } ?>

            <?php if ($box6 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box6 == 6) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box6; ?></td>
            <?php } else if ($box6 != 6) { ?>
                <td style="border: double"><?php echo $box6; ?></td>
            <?php } ?>
        </tr>
        <tr>
            <?php if ($box7 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box7 == 7) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box7; ?></td>
            <?php } else if ($box7 != 7) { ?>
                <td style="border: double"><?php echo $box7; ?></td>
            <?php } ?>

            <?php if ($box8 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box8 == 8) { ?>
                <td bgcolor="#7cfc00" style="border: double"><?php echo $box8; ?></td>
            <?php } else if ($box8 != 8) { ?>
                <td style="border: double"><?php echo $box8; ?></td>
            <?php } ?>

            <?php if ($box9 == 9) { ?>
                <td bgcolor="red" style="border: double"></td>
            <?php } else if ($box9 != 9) { ?>
                <td style="border: double"><?php echo $box9; ?></td>
            <?php } ?>
        </tr>

    </table>
    <br><br><br>

    <?php if ($box1 == 1 && $box2 == 2 && $box3 == 3 && $box4 == 4 && $box5 == 5 && $box6 == 6 && $box7 == 7 && $box8 == 8 && $box9 == 9) { ?>
        <h2>Hasil :</h2>
        <?php
        $exsavenav = explode("+", $savenav);
        for ($i = 0; $i < count($exsavenav); $i++) {
            echo $exsavenav[$i] . "<br />";
        }
        $fn = $i - 1;
        echo "<br><b> f(n) = " . $fn . "</b>";
        ?>

    <?php } else {
        include 'estimation.php';
        ?>

        <h2>Navigation</h2>
        <table>
            <tr>
                <td></td>
                <td align="center">
                    <?php if ($box1 != 9 && $box2 != 9 && $box3 != 9) { ?>
                        <a href="proses.php?nav=up&b1=<?php echo $box1; ?>&b2=<?php echo $box2; ?>&b3=<?php echo $box3; ?>&b4=<?php echo $box4; ?>&b5=<?php echo $box5; ?>&b6=<?php echo $box6; ?>&b7=<?php echo $box7; ?>&b8=<?php echo $box8; ?>&b9=<?php echo $box9; ?>&savenav=<?php echo $savenav; ?>">
                            <button
                                type="button" <?php if ($minestarray == 2 || $minestarray == 3 || $minestarray == 4) {
                                echo "disabled";
                            } ?>>
                                UP
                            </button>
                        </a>
                    <?php } ?>
                </td>
                <td></td>
            </tr>
            <tr>
                <td align="center">
                    <?php if ($box1 != 9 && $box4 != 9 && $box7 != 9) { ?>
                        <a href="proses.php?nav=left&b1=<?php echo $box1; ?>&b2=<?php echo $box2; ?>&b3=<?php echo $box3; ?>&b4=<?php echo $box4; ?>&b5=<?php echo $box5; ?>&b6=<?php echo $box6; ?>&b7=<?php echo $box7; ?>&b8=<?php echo $box8; ?>&b9=<?php echo $box9; ?>&savenav=<?php echo $savenav; ?>">
                            <button
                                type="button" <?php if ($minestarray == 1 || $minestarray == 3 || $minestarray == 4) {
                                echo "disabled";
                            } ?>>
                                LEFT
                            </button>
                        </a>
                    <?php } ?>
                </td>

                <td align="center"> +</td>
                <td align="center">
                    <?php if ($box3 != 9 && $box6 != 9 && $box9 != 9) { ?>
                        <a href="proses.php?nav=right&b1=<?php echo $box1; ?>&b2=<?php echo $box2; ?>&b3=<?php echo $box3; ?>&b4=<?php echo $box4; ?>&b5=<?php echo $box5; ?>&b6=<?php echo $box6; ?>&b7=<?php echo $box7; ?>&b8=<?php echo $box8; ?>&b9=<?php echo $box9; ?>&savenav=<?php echo $savenav; ?>">
                            <button
                                type="button" <?php if ($minestarray == 1 || $minestarray == 2 || $minestarray == 4) {
                                echo "disabled";
                            } ?>>
                                RIGHT
                            </button>
                        </a>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <?php if ($box7 != 9 && $box8 != 9 && $box9 != 9) { ?>
                        <a href="proses.php?nav=down&b1=<?php echo $box1; ?>&b2=<?php echo $box2; ?>&b3=<?php echo $box3; ?>&b4=<?php echo $box4; ?>&b5=<?php echo $box5; ?>&b6=<?php echo $box6; ?>&b7=<?php echo $box7; ?>&b8=<?php echo $box8; ?>&b9=<?php echo $box9; ?>&savenav=<?php echo $savenav; ?>">
                            <button
                                type="button" <?php if ($minestarray == 1 || $minestarray == 2 || $minestarray == 3) {
                                echo "disabled";
                            } ?>>
                                DOWN
                            </button>
                        </a>
                    <?php } ?>
                </td>
                <td></td>
            </tr>
        </table>
    <?php } ?>

</center>
<a href="index.php">
    <button>
        RESET
    </button>
</a>

</body>
</html>