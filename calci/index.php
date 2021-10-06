<!DOCTYPE html>

<head>
	<title>Simple Calculator Using PHP </title>
</head>
<style>
    #page-wrap{
        background-color:rgb(228, 190, 190);
        padding: 0px;
        margin: 0px;
        padding-left: 5px;
        margin-right: 900px;
        align-items: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border: 2px;
    }
    .btn{
        background-color:rgb(233, 140, 140);
        color: rgb(177, 29, 29);
        border: 2px;
        opacity: 0.7px;
        padding: 6px 9px;
    }
    .btn:hover{
        background-color: rgb(165, 165, 233);
        color: white;
    }
   
</style>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
    <div id="page-wrap">
	<h1>Calculator</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Value</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Value</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <div class="btn">
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" /></div>
	  </form>
    </div>
</body>
</html>