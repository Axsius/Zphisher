<?php
if (isset($_POST['submit'])) {
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $phone = $_POST['tel-990'];
    $address = $_POST['location'];
    $highSchoolCollege = $_POST['High School College'];

    // Create an associative array with the user data
    $userData = array(
        'Name' => $name,
        'Email' => $email,
        'Phone' => $phone,
        'Address' => $address,
        'High School College' => $highSchoolCollege
    );

    // Convert the array to a well-formatted string
    $userDataString = implode("\n", array_map(
        function ($key, $value) {
            return "$key: $value";
        },
        array_keys($userData),
        $userData
    ));

    // Save the user data to a text file
    $fileName = "C:\\Users\\anish\\OneDrive\\Documents\\projects" . '\\user_data_' . date('Y-m-d_H-i-s') . '.txt';
    file_put_contents($fileName, $userDataString);

    // Redirect the user to a "thank you" page or display a success message
    header('Location: C:\\Users\\anish\\OneDrive\\Documents\\projects\\Thank_you.html');
    exit();
}
?>
