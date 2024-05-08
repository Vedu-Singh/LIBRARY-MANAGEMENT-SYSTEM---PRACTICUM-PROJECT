<?php
// Include the class file
include("data_class.php");

// Create an instance of the data class
$obj = new data();

// Establish a database connection
$obj->setconnection();

// Retrieve student account details from the database
$studentAccounts = $obj->getStudentAccounts();

// Check if there are any student accounts
if($studentAccounts) {
    // Output the student account details
    foreach($studentAccounts as $studentAccount) {
        echo "Person Name: " . $studentAccount['Person Name'] . "<br>";
        echo "Person Email: " . $studentAccount['Person Email'] . "<br>";
        echo "Account Tye: " . $studentAccount['Account Type'] . "<br>";
        // Output other account details as needed
        echo "<br>";
    }
} else {
    // Output a message if there are no student accounts
    echo "No student accounts found.";
}
?>
