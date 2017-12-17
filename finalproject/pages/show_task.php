<!doctype html>



<?php include('header.php'); ?>





<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

<h1><a href="index.php?page=tasks&action=all">Return Back to All Tasks</a></h1>
<p> <?php print utility\htmlTable::generateTableFromOneRecord($data); ?></p>

<a href="index.php?page=edit_task&action=edit&id=<?php echo $data->id; ?> "><button class="edit">Edit This To Do</button></a>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post"id="form1">
<button type="submit" form="form1" value="delete"class="delete">Delete This Task</button>










<script src="js/scripts.js"></script>
</body>
</html>
