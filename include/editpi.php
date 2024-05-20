<?php
// Include the database connection
include_once '../include/db.php';

// Check if the form is submitted
if(isset($_POST['edit-pi'])) {
    $id = $_POST['id'];
    $label = $_POST['label'];
    $value = $_POST['value'];

    // Update the personal_info table with the new values
    $q = "UPDATE personal_info SET label='$label', value='$value' WHERE id='$id'";
    $r = mysqli_query($db, $q);

    if($r) {
        // Display a pop-up message using JavaScript
        echo "<script>alert('Personal info updated successfully!');</script>";
    } else {
        $message = "Failed to update personal info.";
    }
}
?>

<!-- Redirect back to the previous page -->
<script>
    window.location.href = document.referrer;
</script>
