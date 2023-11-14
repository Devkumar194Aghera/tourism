<?php
$servername = "localhost";  // Replace with your server name or IP address
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password
$database = "ap_project"; // Replace with your database name
// Create a connection
$conn=mysqli_connect($servername, $username, $password, $database) or die("Connection Fail");

// taking form input

if(isset($_POST['save'])){
      $nationality=$_POST['nationality'];
      $adults=$_POST['adult'];
      $children=$_POST['children'];
      $date=$_POST['date'];
      $time=$_POST['time'];
      $first_name=$_POST['fname'];
      $last_name=$_POST['lname'];
      $location=$_POST['location'];
      $Id_Type=$_POST['id'];
      $id_number=$_POST['idno'];
      $email=$_POST['email'];
      $contact=$_POST['mobile'];
      
      $sql="insert into booking(nationality,adults,children,arrival_date,time_,first_name,last_name,location,ID_type,Id_no,email,contact)
                values('$nationality','$adults','$children','$date','$time','$first_name','$last_name','$location','$Id_Type','$id_number','$email','$contact')";
       if(mysqli_query($conn,$sql)){
        echo"<script> alert('Sussfully booked ! Check Mail For Payment')</script>";
       }  
       else{
        echo"<script> alert('Booking fail')</script>";
       }       
}

?>