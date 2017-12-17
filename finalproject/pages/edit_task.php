<?php include('header.php') ?>


<h3> Edit your ToDo Task and click 'Save'</h3>


<form action="index.php?page=tasks&action=save_tasks" method="post">

Owner Email:<input type="text" name="owneremail" value=""><br>
Owner ID:<input type="text" name="ownerid" value="" ><br>
Created Date:<input type="text" name="createddate" value= " " ><br>
Due Date:<input type="text" name="duedate" value=""><br>
Message:<input type="text" name="message" value=""><br>
Is Done:<input type="text" name="isdone" value=""><br>



<button type="submit" form="updateForm" value="store" class="edit">Save This To Do</button></form>

<a href="index.php?page=tasks&action=show&id=<?php echo $data->id; ?> "><button class="cancel">Change your mind?</button></a>


