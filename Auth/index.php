<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

include '../vendor/autoload.php';
require_once '../Database/db.php';

session_start();

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$client = new Google\Client;
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);
$client->addScope("email");
$client->addScope("profile");
$url = $client->createAuthUrl();



if (isset($_POST['login-email'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM users WHERE email = ? AND User_Role = 'user'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($pass, $user['Pass'])) {
            $_SESSION['email'] = $user['Email'];
            $_SESSION['name'] = $user['First_Name'] . ' ' . $user['Last_Name'];
            $_SESSION['id'] = $user['SN'];
            $_SESSION['avatar'] = $user['Avatar'];
            $_SESSION['email_auth'] = $user['SN'];
            header('location: ../portal/home.php');
            exit();
        } else {
            echo "<script>alert('Incorrect email or password');</script>";
        }
    } else {
        echo "<script>alert('Incorrect email or password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fremax Graphics | Authentication Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/login_animate.css">
    <style>
        .card {
            border: none;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        .btn-outline-secondary {
            color: #555;
            border-color: #ddd;
        }
        .btn-outline-secondary:hover {
            background-color: rgb(184, 184, 184);
            border-color: #ccc;
        }
        .form-control {
            border-radius: 8px;
        }
    </style>
</head>
<body class="container-fluid d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">

<div class="wave"></div>
<div class="wave"></div>
<div class="wave"></div>

    <div class="container d-flex justify-content-center align-items-center flex-column">
        <div class="card shadow-sm p-5 w-100" style="max-width: 450px;">
            <h2 class="text-center font-weight-bold">Fremax Graphics</h2>
            <p class="text-center h4 mb-4">Sign In</p>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1 border-top"></div>
                <span class="mx-2 text-muted">🔒</span>
                <div class="flex-grow-1 border-top"></div>
            </div>
            <div class="mt-3">
                <a href='<?= $url ?>' class="btn btn-outline-secondary btn-block mb-2 d-flex align-items-center justify-content-center">
                    <img src="google.png" width="20" class="mr-2">
                    Continue with Google Account
                </a>
            </div>
        </div>
    </div>
    <style>
        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>

    <div class="modal fade" id="resetModal" tabindex="-1" aria-labelledby="resetModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title fs-5" id="resetModalLabel">Enter your Email address below to receive the reset link!</p>
                </div>
                <div class="modal-body">
                    <form id="reset-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="reset_email">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="reset_email" class="form-control py-2" id="reset_email" placeholder="Enter your email" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="reset_password">Send Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>
</html>
