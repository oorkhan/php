<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    list($form_errors, $input) = validate_form();
    if($form_errors){
        show_form($form_errors);
    }else {
        process_form($input);
    }
}else {
    show_form();
}
function process_form($input){
    print "Hello: " . $input['my_name']. "<br>";
    print "Age: " . $input['age']. "<br>";
    print "Salary: " . $input['salary']. "<br>";
    print "Date: " . $input['date']. "<br>";
}
function show_form($errors = null){
    if ($errors){
        print 'Please correct those errors <ul><li>';
        print implode('<li></li>', $errors);
        print '</li></ul>';
    }
print<<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name"><br>
    Age:  <input type="text" name="age"><br>
    Salary: <input type="text" name="salary"><br>
    Date: <input type="date" name="date"><br>
    <input type="submit" value="Say Hello">
    </form>
_HTML_;
}
function validate_form()
{
    $range_start = new DateTime('6 month ago');
    $range_end = new DateTime();
    $input = [];
    $errors = [];

    $input['my_name'] = trim($_POST['my_name']) ?? '';
    if(strlen($input['my_name']) == 0 ){
        $errors[] = 'Name is required';
    }
    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT,
        array('options' => array('min_range' => 18, 'max_range' => 65)));
    if (is_null($input['age']) || $input['age']==false){
        $errors[] = 'Please enter valid age between 18 - 65.';
    }

    $input['salary'] = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT);

    if(is_null($input['salary']) || $input['salary']==false){
        $errors[] = 'Please enter valid salary';
    }
    $input['date'] = $_POST['date'];
    function isRealDate($date){
        if (false === strtotime($date)){
            return false;
        }
        list($year, $month, $day) = explode('-',$date);
        if(checkdate($month, $day, $year)){
            return $submited_time = new DateTime(strtotime($year.'-'. $month.'-'. $day));
        }else {
            return false;
        };

    }
    if(isRealDate($input['date'])){
        var_dump($submited_time);
    }
    return array($errors, $input);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forms ch. 7</title>
</head>
<body>
    <form action="eat.php" method="POST">
        <select name="lunch[]" multiple>
            <option value="pork">BBQ Pork Bun</option>
            <option value="chicken">Chicken Bun</option>
            <option value="lotus">Lotus Seed Bun</option>
            <option value="bean">Bean Paste Bun</option>
            <option value="nest">Bird-Nest Bun</option>
        </select>
        <input type="submit" value="Order">
    </form>
</body>
</html>