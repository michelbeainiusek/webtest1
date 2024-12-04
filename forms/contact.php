<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // (Optional) You can use this section to process or send the message (e.g., via email).
    // mail($email, $subject, $message); // Uncomment to send an email.

    // Alert message
    echo "<script>alert('Thank you, $name. Your message was delivered successfully!');</script>";
    

    exit;
} else {
    // Redirect to the form page if accessed without submitting the form
    header("Location: index.html");
    exit;
}
?>
