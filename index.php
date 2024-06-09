<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store form data in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['message'] = $_POST['message'];
    $_SESSION['personal'] = isset($_POST['personal']) ? 'checked' : '';
}

// Retrieve form data from session if available
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
$personal = isset($_SESSION['personal']) ? $_SESSION['personal'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make an appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/appointment.css">
</head>
<body>
    <header class="hospital-header py-2">
        <div class="container">
            <p class="hospital-phone my-0">Hospital Phone: 234-80-335-60-232</p>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg bg-light no-margin-padding">
        <div class="container-fluid mynavBar">
            <a class="navbar-brand home" href="index.html">Chimex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link current" href="appointment.php">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consult</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enquiry
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Fee Enquiry</a></li>
                            <li><a class="dropdown-item" href="#">Job Enquiry</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Doctor Enquiry</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" class="btn2">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <form class="location appointment" method="POST" action="appointment.php">
            <div class="mb-3">
                <h1 class="head">Make an Appointment</h1>
                <label for="name" class="form-label"><b>Full name</b></label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Email address</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo htmlspecialchars($email); ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php echo htmlspecialchars($password); ?>" style="resize: none;" placeholder="Enter password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="personal" <?php echo $personal; ?>>
                <label class="form-check-label" for="exampleCheck1">Check if you appointment is personal</label>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label"><b>Message</b></label>
                <textarea name="message" id="message" class="form-control" cols="65" rows="10" style="resize: none;"><?php echo htmlspecialchars($message); ?></textarea>
            </div>
            <button type="submit" class="btn2">Make an appointment</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5ns7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./Js/bootstrap.min.js"></script>
    <script src="./Js/bootstrap.bundle.min.js"></script>
    <footer class="text-white">
        <div class="container text-center">
            <p class="mb-0"> All contents copyright &copy; 2024 CHIMEX. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
