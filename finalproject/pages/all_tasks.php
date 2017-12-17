<!doctype html>




<?php include('header.php'); ?>



<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="Tasks Page">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>






 <section class="container" id="alltasks">

 
<h1>All Current Taskings</h1>

<h2> All Current Tasks are below, but please log in to add and delete </h2>



<p> <?php print utility\htmlTable::genarateTableFromMultiArray($data); ?></p>


</div>	
</div>
<div class="row">
<div class="col-sm-2">
<!-- <a href="index.php?page=create&action=add_task"><button class="edit">Create Tasks Here</button></a>-->

</div>


<div class="col-sm-10"></div>
</div>
</section>




<script src="js/scripts.js"></script>
</body>
</html>
