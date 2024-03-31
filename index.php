<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <style>
        .calculator {
            width: 250px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 auto;
        }
        input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 50px;
            height: 40px;
            margin: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <form action="" method="post">
        <input type="text" name="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : ''; ?>" readonly>
        <input type="submit" name="submit" value="7">
        <input type="submit" name="submit" value="8">
        <input type="submit" name="submit" value="9">
        <input type="submit" name="submit" value="+">
        <br>
        <input type="submit" name="submit" value="4">
        <input type="submit" name="submit" value="5">
        <input type="submit" name="submit" value="6">
        <input type="submit" name="submit" value="-">
        <br>
        <input type="submit" name="submit" value="1">
        <input type="submit" name="submit" value="2">
        <input type="submit" name="submit" value="3">
        <input type="submit" name="submit" value="*">
        <br>
        <input type="submit" name="submit" value="0">
        <input type="submit" name="submit" value=".">
        <input type="submit" name="submit" value="/">
        <input type="reset" value="C">
        <br>
        <input type="submit" name="submit" value="=">
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == '=') {
        if (isset($_POST['display'])) {
            $expression = $_POST['display'];
            $result = eval("return $expression;");
            echo '<div class="calculator">';
            echo 'Result: ' . $result;
            echo '</div>';
        }
    } else {
        $displayValue = $_POST['submit'];
        if ($displayValue == 'C') {
            $displayValue = '';
        }
        if (!isset($_POST['display'])) {
            $_POST['display'] = '';
        }
        $_POST['display'] .= $displayValue;
    }
}
?>

</body>
</html>
