<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laracast php</title>
</head>
<body>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed =="1") :?>
            <strike><?= $task->description; ?></strike>
            <?php else :?>
            <?= $task->description; ?>
            <?php endif ;?>
        </li>
    <?php endforeach; ?>
</body>
</html>