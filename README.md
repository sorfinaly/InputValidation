# InputValidation

# Student Details Form

This project implements a student details form using HTML, CSS, JavaScript, and PHP. It allows users to input their personal details, validates the input data both client-side and server-side, and displays the submitted information in a tabular format.

## File Descriptions

### 1. form.html

This file contains the user interface for the student details form. It includes input fields for the user's name, matriculation number, email, addresses, and phone numbers. Each input field has a `pattern` attribute for basic client-side validation. Upon submission, the form sends the data to `form.php` for further validation and processing.

### 2. form.js

The JavaScript file enhances the validation process on the client-side. It listens for input events on form fields and validates them against their respective patterns using the `test()` method. If an input fails validation, it visually highlights the input field and displays a user-friendly error message next to it, providing immediate feedback to the user.

### 3. form.php

This PHP file receives the form data submitted from `form.html` via a POST request. It performs server-side validation using `preg_match()` to ensure the submitted data meets specific criteria. If any validation fails, it stores user-friendly error messages in an array. After processing, it either displays the sanitized data in a tabular format on `form.html` or, if there are validation errors, sends them back to `form.html` to be displayed alongside the input fields.

## How the Files are Connected

- **form.html** links to **form.js** to handle client-side validation.
- **form.html** sends form data to **form.php** for server-side validation and processing.
- **form.php** redirects back to **form.html** to display errors or processed data.

## Error Handling

Both client-side and server-side validation are implemented to ensure a robust and user-friendly form submission process. Client-side validation provides immediate feedback to users, while server-side validation ensures data integrity and security.

