<form method="GET">

    <label for="number1" >Number 1</label>
    <input type="text" name="number1">

    <label for="number2" >Number 2</label>
    <input type="text" name="number2">

    <br/>
    <br/>

    <div>
        <label for="add">+</label>
        <input type="radio" name="typeOfCalc" value="add" checked />
        <br/>
        <label for="sub">-</label>
        <input type="radio" name="typeOfCalc" value="sub"/>
        <br/>
        <label for="mult">x</label>
        <input type="radio" name="typeOfCalc" value="mult"/>
        <br/>
        <label for="div">/</label>
        <input type="radio" name="typeOfCalc" value="div"/>
    </div>

    <br/>

    <button id="Calculate">Calculer</button>

</form>


<?php


$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$radioSelect = $_GET['typeOfCalc'];

function add($number1, $number2) {
    if (isset($number1, $number2)) {
        echo $number1 + $number2;
    }
}

// add($number1, $number2);

// $number1 = $_POST['number1'];
// $number2 = $_POST['number2'];

// function add($number1, $number2) {
//     if (isset($number1, $number2)) {
//         echo $number1 + $number2;
//     }
// }

// add($number1, $number2);

function sub($number1, $number2) {
    if (isset($number1, $number2)) {
        echo $number1 - $number2;
    }
}

// sub($number1, $number2);

function mult($number1, $number2) {
    if (isset($number1, $number2)) {
        echo $number1 * $number2;
    }
}

// mult($number1, $number2);

function div($number1, $number2) {
    if (isset($number1, $number2)) {
        echo $number1 / $number2;
    }
}

// div($number1, $number2);


if (isset($radioSelect)) {
    if ($radioSelect == 'add') {
        return add($number1, $number2);
    }
    if ($radioSelect == 'sub') {
        return sub($number1, $number2);
    }
    if ($radioSelect == 'mult') {
        return mult($number1, $number2);
    }
    if ($radioSelect == 'div') {
        return div($number1, $number2);
    }
}



?>


