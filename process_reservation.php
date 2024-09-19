<?php
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "HESTEYA";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO reservation (name, email, phone, arrival_date, departure_date, nights, room_type, guests, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssid", $name, $email, $phone, $arrival_date, $departure_date, $nights, $room_type, $guests, $total_price);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$arrival_date = $_POST['arrival_date'];
$departure_date = $_POST['departure_date'];
$nights = $_POST['nights'];
$room_type = $_POST['room_type'];
$guests = $_POST['guests'];
$total_price = $_POST['total_price'];
$stmt->execute();

// Send email notification
$to = "email@email.com";
$subject = "New Reservation";
$body = "Name: $name\nEmail: $email\nPhone: $phone\nArrival Date: $arrival_date\nDeparture Date: $departure_date\nNights: $nights\nRoom Type: $room_type\nGuests: $guests\nTotal Price: $total_price BGN";
$headers = "From: no-reply@yourdomain.com";

if (mail($to, $subject, $body, $headers)) {
    echo "Reservation successful. Confirmation email sent.";
} else {
    echo "Reservation successful. Email sending failed.";
}

$stmt->close();
$conn->close();
?>
