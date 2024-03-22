<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time']; 
$guests = $_POST['guests'];
$type = $_POST['type'];

// Validation using regular expressions
$namePattern = '/^[A-Za-z\s]+$/';
$emailPattern = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$phonePattern = '/^[0-9]{10}$/';
$datePattern = '/^[0-9]{2}-[0-9]{2}-[0-9]{4}$/';
$timePattern = '/^[0-9]{2}:[0-9]{2}$/';
$guestsPattern = '/^[0-9]+$/';
$typePattern = '/^[A-Za-z\s]+$/';


// Validate name
if (!preg_match($namePattern, $firstname)) { 
    // Store error message
    $errors['firstname'] = "Please enter a valid name.";
}

else if (!preg_match($namePattern, $lastname)) {
    // Store error message
    $errors['lastname'] = "Please enter a valid name.";
}

else if (!preg_match($emailPattern, $email)) {
    $errors['email'] = "Please follow this format: example@example.com";
} 

else if(!preg_match($phonePattern, $phone)) {
    $errors['phone'] = "Please enter a valid phone number.";
}

else if(!preg_match($datePattern, $date)) {
    $errors['date'] = "Please enter a valid date.";
}

else if(!preg_match($timePattern, $time)) {
    $errors['time'] = "Please enter a valid time.";
}

else if(!preg_match($guestsPattern, $guests)) {
    $errors['guests'] = "Please enter a valid number of guests.";
}

else if(!preg_match($typePattern, $type)) {
    $errors['type'] = "Please enter a valid type.";

}


// If there are no errors, process the form data further
if (empty($errors)) {
    // Process form data, such as saving to a database
    echo "Form submitted successfully!";
} else {
    // Send error messages back to client-side JavaScript
    echo json_encode($errors);
}
?>
