<?php require 'partials/head.view.php'; ?>
<h1>Homepage</h1>
    <!-- <div>
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
 -->
    
    
    
<?php require 'partials/footer.view.php'?>