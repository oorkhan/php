<?php require 'partials/head.view.php'; ?>
<div>
    <h2>All Users:</h2>
    <?php foreach ($users as $user) : ?>
        <li>
            <?= $user->username; ?>
        </li>
    <?php endforeach; ?>
    <form action="/users" method="POST">
        <h3>Add username</h3>
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>
</div>
<?php require 'partials/footer.view.php'?>    