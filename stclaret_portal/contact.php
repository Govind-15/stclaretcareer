<?php
require_once 'includes/header.php';

// Initialize variables
$name = $email = $message = '';
$success = $error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
       
    }
}
?>
<div class="container py-5">
    <h1 class="mb-4 text-center">Contact Us</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h5>St. Claret College</h5>
                <p>Email: careers@claretcollege.edu.in<br>
                Phone: +91 6361718834 / +91 90195 51552<br>
                Address: P.O. Box 1355, M.E.S. Ring Road, Jalahalli, Bangalore 560 013, INDIA.</p>
                <hr>
                