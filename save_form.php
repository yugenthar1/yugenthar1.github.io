<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];

    // Create a data string
    $data = "Name: $name\nGender: $gender\nAge: $age\nContact: $contact\n\n";

    // Define the file path
    $file = "form_submissions.txt";

    // Open the file for writing (append mode)
    $fp = fopen($file, "a");

    // Write the data to the file
    fwrite($fp, $data);

    // Close the file
    fclose($fp);

    // Redirect back to the form with a success message
    header("Location: your_form_page.html?success=1");
    exit();
}
?>
