<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>

<?php foreach ( $tasks as $task ) : ?>
    <?php if ( $task->getIsDone() ) : ?>
        <div>
            <?=$task->getDescription()?> Задача выполнена
            <a href="/?controller=tasks&description=<?=$task->getDescription()?>&action=delete">Удалить задачу</a>
        </div>
    <?php else: ?>
        <div>
            <?=$task->getDescription()?> <a href="/?controller=tasks&description=<?=$task->getDescription()?>&action=isdone">Выполнить</a>
            <a href="/?controller=tasks&description=<?=$task->getDescription()?>&action=delete">Удалить задачу</a>
        </div>
    <?php endif;?>
<?php endforeach;?>

<form method="get">
    <label for="description">Добавить задачу:</label>
    <input id="description" type="text" name="description">
    <button type="submit" name="controller" value="tasks">Добавить</button>
</form>

</body>