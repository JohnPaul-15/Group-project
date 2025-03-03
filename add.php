<?php
// Display success or error message after form submission
$message = "";
if (isset($_GET['status']) && $_GET['status'] == "success") {
    $message = "Registration successful!";
} elseif (isset($_GET['status']) && $_GET['status'] == "error") {
    $message = "Error registering user!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Modal Example</title>
    <style>
        /* Modal Background */
.modal {
  display: none; /* Hidden by default */
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}

/* Modal Content */
.modal-content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  position: relative;
  max-width: 400px;
  width: 90%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Close Button */
.close {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 22px;
  cursor: pointer;
}

/* Open Button */
.open-popup {
  background-color: royalblue;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.open-popup:hover {
  background-color: rgb(56, 90, 194);
}

    </style>
</head>
<body>

<!-- Button to Open Modal -->
<button class="btn" onclick="openModal()">Register</button>

<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form action="register.php" method="POST">
            <p class="title">Register</p>
            <p class="message"><?= $message; ?></p>
            <label>
                <input type="text" name="firstname" required>
                <span>Firstname</span>
            </label>
            <label>
                <input type="text" name="lastname" required>
                <span>Lastname</span>
            </label>
            <label>
                <input type="email" name="email" required>
                <span>Email</span>
            </label>
            <label>
                <input type="password" name="password" required>
                <span>Password</span>
            </label>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</div>

<script>
// JavaScript to Open & Close Modal
function openModal() {
    document.getElementById("myModal").style.display = "flex";
}
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

// Close modal when clicking outside of it
window.onclick = function(event) {
    let modal = document.getElementById("myModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
