<?php
// variables
$num_one = @$_POST["number_one"];
$num_two = @$_POST["number_two"];
$amaliyat = @$_POST["amaliyat"];
$result = '';
// function
switch ($amaliyat){
    case '+':
        $result = ($num_one + $num_two);
        break;
    case '-':
        $result = ($num_one - $num_two);
        break;
    case '*':
        $result = ($num_one * $num_two);
        break;
    case '/':
        $result = ($num_one / $num_two);
        break;
    case '%':
        $result = ($num_one % $num_two);
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Kiarash Zandi GH.</h1>
        <form action="" method="POST" enctype="multipart/form-data" >
            <p>
                <label for="num_one">Enter Number One: </label>
                <input id="num_one" name="number_one" value="<?php echo @$_POST["number_one"];?>" type="number" placeholder="put (number)" required>
            </p>
            <p>
                <label for="num_two">Enter Number two: </label>
                <input id="num_two" name="number_two" value="<?php echo @$_POST["number_two"];?>" type="number" placeholder="put (number)" required>
            </p>
            <div class="btn">
                <button name="amaliyat" value="+">+</button>
                <button name="amaliyat" value="-">-</button>
                <button name="amaliyat" value="*">*</button>
                <button name="amaliyat" value="/">/</button>
                <button name="amaliyat" value="%">%</button>
            </div>
            <p>
                <h2>Result</h2>
                <input name="result" value=" <?= $result ?>" type="text" disabled>
            </p>
        </form>
    </div>
</body>
</html>