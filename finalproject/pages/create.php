<?php include('header.php'); ?>


<section class="container" id="tasks">


<div class="row">

<div class="col-sm-12">



<h3>Create a  Task</h3><br><br>
<form action="index.php?page=tasks&action=add_task" method="post" id="addTaskForm">

Owner Email:<input type="text" name="owneremail" value=""><br>
Created Date:<input type="text" name="createddate" value= " " ><br>
Due Date:<input type="text" name="duedate" value=""><br>
Message:<input type="text" name="message" value=""><br>
Is Done:<input type="text" name="isdone" value=""><br>

<button type="submit" form="addTaskForm" value="store" class="edit">Save</button></form>

</div>

</div>

</section>

<script src="js/scripts.js"></script>
</body>
</html>

