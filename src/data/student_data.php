<?php 

/** @var $pdo \PDO */
require_once "database.php";


//get user information from student table
$statement2=$conn->prepare('SELECT *
                            FROM student 
                            WHERE user_id=:userid');
$statement2->bindValue(':userid',$userid);
$statement2->execute();
$student2=$statement2->fetchAll(PDO::FETCH_ASSOC);
foreach($student2 as $s){
    $student_id=$s['student_id'];
    $firstname=$s['firstname'];
    $lastname=$s['lastname'];
    $email=$s['email'];
    $contact_number=$s['contact_number'];
    $city=$s['city'];
    $date_of_birth=$s['date_of_birth'];
    $gender=$s['gender'];
}
?>
