<style>




</style>



<?php
// contact.php

// Define a variable for the input field's name attribute
$field_name = "user_message";

// Use echo to output HTML code for the input field within a form element
echo '<form method="post">
        <label for="' . $field_name . '">Enter your message:</label>
        <input type="text" name="' . $field_name . '" id="' . $field_name . '" placeholder="Type your message here">
        <button type="submit">Submit</button>
      </form>';

// Check if the form has been submitted and display the submitted message
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_message = $_POST[$field_name];
  echo "<p>You entered: $user_message</p>";
}
?>