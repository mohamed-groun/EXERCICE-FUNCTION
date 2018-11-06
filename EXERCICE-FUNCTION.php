<?php
function compare($a, $b)
{
    if ($a > $b) {
        echo($a . "est le plus grand ");
    } elseif ($a < $b) {
        echo($b . "est le plus grnad");
    } else {
        echo "sont egauts";
    }

}

compare(7, 7);

function calcul($angle, $symbole)
{

    if ($symbole == "R") {
        $res = $angle * pi()/ 180;
    }
    if ($symbole == "D") {
        $res = $angle * 180 / pi();
    }
    if ($symbole == "G") {
        $res = $angle * pi() / 200;
    }
    return $res;
}

echo sin(calcul(120, "D"));


?>