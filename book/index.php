<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
}else {
    show_form();
}
function process_form(){
    print "Hello" . $_POST['my_name'];
}
function show_form(){
print<<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <input type="submit" value="Say Hello">
    </form>
_HTML_;
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