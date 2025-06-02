<?php
include('includes/header.php');
include('includes/db.php');

$workouts= loadworkouts();
?>
<h2>Workout plans</h2>
<ul>
<?php foreach ($workouts as $w): ?>
    <li>
        <strong><?php echo $w['title']; ?></strong>
        <?php echo $w['level']; ?>
        <?php echo $w['duration']; ?>
    </li>

    <?php endforeach; ?>
</ul>
<?php include('includes/footer.php'); ?> 