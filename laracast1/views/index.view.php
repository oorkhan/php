<?php require 'partials/head.view.php'; ?>

    <div>
        <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if($task->completed =="1") :?>
            <strike><?= $task->description; ?></strike>
            <?php else :?>
            <?= $task->description; ?>
            <?php endif ;?>
        </li>
        <?php endforeach; ?>
        <form action="tasks" method="POST">
            <h3>Add task name</h3>
            <input type="text" name="description">
            <button type="submit">Submit</button>
        </form>
    </div>
        <div>
        <h2>All Users:</h2>
        <?php foreach ($users as $user) : ?>
        <li>
            <?= $user->username; ?>
        </li>
        <?php endforeach; ?>
         <form action="/names" method="POST">
    <h3>Add username</h3>
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
    </div>
    
    
    
<?php require 'partials/footer.view.php'?>