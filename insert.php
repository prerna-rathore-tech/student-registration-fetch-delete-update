<?php 

include 'connection.php';
//print_r($_POST);
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $enrollment = $_POST['enrollment'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
 
  //echo $path;exit();
if(empty($name) || empty($email) || empty($contact) ||
   empty($enrollment) || empty($course) || empty($gender))
{
    echo "field is missing....";
}
	else{
   $query = $obj->query("insert into std_register(name,email,contact,enrollment,course,gender)
   values('$name','$email','$contact','$enrollment','$course','$gender')");
    //move_uploaded_file($tmp, $path);
    if ($query) {
      # code...
      echo  '<script>alert("record inserted...");</script>';
      header("location:index.php");
    }
		else{
      echo '<script>alert("error...");</script>';
    }
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register form</title>
    <style>
        h1 {
            text-align: center;
            color: #1e293b;
            margin-bottom: 25px;
        }
        form {
            width: 100%;
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            border:2px solid #1e293b;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        input[type="submit"]{
            background:#1e293b;
            color:white;
            padding:10px;
            width:100%;
            font-weight:bold;
            cursor:pointer;
            border-radius:5px;
        }
         input[type="submit"]:hover{
            background:white;
            color:black;
            transition: 1s;
         }
    </style>
</head>
<body>
    <h1>Student Register Form</h1>

    <form method="POST">
        <table border="2" cellpadding="15px">
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" id="name" name="name" placeholder="Enter your name" required></td>
                
            </tr>

             <tr>
                <td><label>Email:</label></td>
                <td><input type="email" id="email" name="email" placeholder="Enter your email" required></td>
            </tr>

             <tr>
                <td><label>Contact:</label></td>
                <td><input type="tel" id="contact" name="contact" placeholder="Enter contact number" required></td>
            </tr>

             <tr>
                <td><label>Enrollment No:</label></td>
                <td><input type="text" id="enrollment" name="enrollment" placeholder="Enter your enrollment" required></td>
            </tr>

               <tr>
                <td>
                    <label>Courses :</label></td>
                   <td> <select name="course" id="course" required>
                        <option value="">Select course</option>
                         <option value="MCA">MCA</option>
                          <option value="BCA">BCA</option>
                           <option value="BBA">BBA</option>
                            <option value="MBA">MBA</option>
                    </select>
                </td>
            </tr>

             <tr>
                <td>
                    <label>Gender:</label></td>
                    <td>
                    <input type="radio" value="male" name="gender" required>Male
                    <input type="radio" value="female" name="gender" required>Female
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Register now">
                </td>
            </tr>
</table>
</form>
</body>
</html>