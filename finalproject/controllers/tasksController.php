<?php



//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);
        */
        self::getTemplate('all_tasks', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

// function that sends data to create template for add_task

// Function for adding tasks where forwards to the create.php page


   public static function add_task ()

   {

   	self::getTemplate('create');
    }



    

   public static function insert ()


   {

	$record = new todo();
	$record->userid = $_POST['userid'];
	//$record->created = date('Y-m-d');
	$record->updated = NULL;
	$record->task = $_POST['task'];
	$record->complete = "0";
	$record->save();

header("Location: index.php?page=tasks&action=all");


}

    public static function create()
    {
        print_r($_POST);
    }






    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {

/*
       $record = new todo();
       $record->id = $_REQUEST['id'];
       $record->updated = date('Y-m-d H:m:s');
       $record->task = $_POST['task'];
       $record->complete = $_POST['complete'];
       $record->save();

header("Location: index.php?page=tasks&action=show=".$_REQUEST['id']);
*/



  $id=$_REQUEST['id'];
  if($id==null)
  

{
       session_start();
       $ownerid = $_SESSION['userID'];
       $record=new \todo;
       $record->owneremail=$_POST['owneremail'];
       $record->ownerid= $ownerid;
       $record->createddate=$_POST['createddate'];
       $record->duedate=$_POST['duedate'];
       $record->message=$_POST['message'];
       $record->isdone=$_POST['isdone'];
       $record->save(); 
  }


else
{
  $record =  todos::findOne($_REQUEST['id']);
  $record->owneremail=$_POST['owneremail'];
  $record->ownerid=$_POST['ownerid'];
  $record->createddate=$_POST['createddate'];
  $record->duedate=$_POST['duedate'];
  $record->message=$_POST['message'];
  $record->isdone=$_POST['isdone'];
  $record->save();																           }
																		           header('Location:index.php?page=accounts&action=display');









    }

    public static function save() {
          
	  
	  $record = todos::findOne($_REQUEST['id']);
	  $record->owneremail=$_POST['owneremail'];
	  $record->ownerid=$_POST['ownerid'];
	  $record->createddate=$_POST['createddate'];
	  $record->duedate=$_POST['duedate'];
	  $record->message=$_POST['message'];
 	  $record->isdone=$_POST['isdone'];
	  $record->save();

header('Location:index.php?page=accounts&action=all');
}

    

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
     
	echo "you have successfully delete record number:", ($_REQUEST['id']);	






   



}
}
