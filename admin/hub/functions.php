<?php include '../hub/db.php';?>

<?php

// addd user

function adduser(){
	global $con;

  if (isset($_POST['adduser'])){
	
  $fullname = $_POST ['fullname'];
  $email = $_POST ['email'];
  $image = $_POST ['image'];
 // $phone = $_POST ['phone'];
  $password = $_POST ['password'];
  $role = $_POST ['role'];
  $status = $_POST ['status'];

 $sql = "INSERT INTO users (fullname, email, image,  password, role, status)VALUES('{$fullname}','{$email}', '{$image}','{$password}','{$role}','{$status}')";

if ($con->query($sql) === TRUE){
 	
 	echo " New Users Created ";

 }else{
 
 echo " error ".$con->error;
 
 }

}

}

//Views Users Function
function viewUsers(){

	//make the $con virable accessable everwhere
	global $con;

// select all user from the databse tobe process
	$selectQuery = "SELECT * FROM users";
	// create an array of users in the result virable
	$results = mysqli_query($con, $selectQuery);
	//loop throungh the result array return in a tale
	while ($rows = mysqli_fetch_assoc($results)){

      echo "<tr>"
             ."<th>".$rows['id']."</th>"
             ."<th>".$rows['fullName']."</th>"
             ."<th>".$rows['email']."</th>"
             ."<th>".$rows['image']."</th>"
             ."<th>".$rows['status']."</th>"
             ."<th>"."<a href='users.php?page=edituser&id={$rows['id']}'> Edit </a></th>".
              "</tr>";

          }
      }

// update usres function

      function updateUser(){
         global $con;
        
    if (isset($_POST['editUser'])){
   
    $fullname = $_POST ['FullName'];
    $email = $_POST ['email'];
    $image  =  time().$_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image = $_POST ['image'];
    $password = $_POST ['password'];
    $role = $_POST ['role'];
    $staus = $_POST ['status'];

    move_uploaded_file($image_tmp,"../img/practice/$image");

  $sql = " UPDATE user SET 

    FullName = '{$FullName}',
    email = '{$email}',
    image = '{$image}',
    password = '{$password}',
    role = '{$role}',
    WHERE id = '{$id}' ";

}

     //if ($con->query($sql) === TRUE){
      
      //echo "<script> window.location = 'practice.php'</script>";
     // echo " New Users Created ";

    //} else {
        //echo "error". $con->error;
      
      //}
    




    //deleteuser user function
function deleteUser(){
   global $con;

}
}

?>      




