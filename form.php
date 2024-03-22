<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Details</title>

<style>
.response-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.response-content {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 15px;
  font-weight: 600;
  text-align: left;
  padding: 20px;
  border: 2px solid #000;
  border-radius: 10px;
  background-color: rgba(255, 255, 255, 0.8); /* Transparent background */
}

.response-content table {
  border-collapse: collapse;
  width: 100%;
  font-size: 1.2em;
}

.response-content td {
  border: 1px solid transparent; /* Transparent border */
  padding: 8px;
  text-align: left;
}
.form__btn {
  font-family: "Source Sans Pro", sans-serif;
  font-weight: 600;
  font-size: 1.1em;
  padding: 10px 16px;
  margin: 10px 0;

  color: #ffffff;
  background: #14b64a;
  border: 2px solid #0fa942;
  border-radius: 5px;

  cursor: pointer;
  outline: none;
}

.form__btn:active {
  background: #0fa942;
}

</style>

</head>
<body>

<div class="response-container">
  <div class="response-content">
    <h1>Student Details</h1>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form inputs
        $name = validateInput($_POST["name"], '/^[A-Za-z ]+$/');
        $matricno = validateInput($_POST["matricno"], '/^\d{7}$/');
        $curraddress = validateInput($_POST["curraddress"], '/^[A-Za-z0-9 \/\-.,]+$/');
        $homeaddress = validateInput($_POST["homeaddress"], '/^[A-Za-z0-9 \/\-.,]+$/');
        $mobilephone = validateInput($_POST["mobilephone"], '/^\d{3}-\d{3}-\d{4}$/');
        $homephone = validateInput($_POST["homephone"], '/^\d{3}-\d{3}-\d{4}$/');

        // Display user inputs in a table
        echo "<table>";
        echo "<tr><td>Name:</td><td>$name</td></tr>";
        echo "<tr><td>Matric No:</td><td>$matricno</td></tr>";
        echo "<tr><td>Current Address:</td><td>$curraddress</td></tr>";
        echo "<tr><td>Home Address:</td><td>$homeaddress</td></tr>";
        echo "<tr><td>Mobile Phone Number:</td><td>$mobilephone</td></tr>";
        echo "<tr><td>Home Phone Number (Emergency):</td><td>$homephone</td></tr>";
        echo "</table>";
    } else {
        echo "<p>No form submission detected.</p>";
    }

    // Function to validate input using preg_match
    function validateInput($input, $pattern) {
        $validated_input = htmlspecialchars($input); // Sanitize input
        if (preg_match($pattern, $validated_input)) {
            return $validated_input;
        } else {
            return "Invalid input";
        }
    }
    ?>
    
    <div class="form__item">
      <button class="form__btn" onclick="back()">Back</button>
    </div>
  </div>
</div>


<script src="form.js"></script>

</body>
</html>
