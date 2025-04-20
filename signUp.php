<?php
@include 'config.php';

$username = $email = $password = $confirmPass = "";
$usernameErr = $emailErr = $passwordErr = $confirmPassErr = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $valid = true;

        // Username validation
        if (empty($_POST['username'])) {
            $usernameErr = "Username cannot be empty";
            $valid = false;
        } else {
            $username = trim($_POST['username']);
        }

        // Email validation
        if (empty($_POST['email'])) {
            $emailErr = "You must provide your email";
            $valid = false;
        } else {
            $email = trim($_POST['email']);
            // Optional: validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $valid = false;
            }
        }

        // Password validation
        if (empty($_POST['password'])) {
            $passwordErr = "Password cannot be empty";
            $valid = false;
        } else {
            $password = $_POST['password'];
            if (strlen($password) < 8) {
                $passwordErr = "Password must be at least 8 characters";
                $valid = false;
            }
        }

        // Confirm Password validation
        if (empty($_POST['confirm_password'])) {
            $confirmPassErr = "This field cannot be empty";
            $valid = false;
        } else {
            $confirmPass = $_POST['confirm_password'];
            if ($password !== $confirmPass) {
                $confirmPassErr = "Passwords do not match";
                $valid = false;
            }
        }

        // Insert if all inputs are valid
        if ($valid) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashedPassword);

            if ($stmt->execute()) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <!-- DaisyUi and Tailwindcss -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'border-color': '#D9D9D9',
                    }
                }
            }
        }
    </script>

    <!-- import font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <style>
        .roboto-font {
            font-family: "Roboto", serif;
        }
    </style>
</head>

<body class="roboto-font md:bg-[#F2F2F2]">
    <header>
        <!-- navbar -->
        <nav class="w-full bg-white py-3">
            <div class="navbar max-w-[1220px] mx-auto">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li><a>Home</a></li>
                            <li><a>Shop</a></li>
                            <li><a>Orders</a></li>
                            <li><a>About</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <a href="index.php" class="font-medium text-3xl md:text-4xl">FLOW<span class="text-[#FF8F52]">RA</span></a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="index.html" class="font-normal text-xl">Home</a></li>
                        <li><a class="font-normal text-xl">Shop</a></li>
                        <li><a class="font-normal text-xl">Orders</a></li>
                        <li><a class="font-normal text-xl">About</a></li>
                        <li><a class="font-normal text-xl">Contact</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                    <a class="btn text-xl bg-[#FF8F52] text-white">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- main -->
    <main class="">
        <!-- signup -->
        <div class="container mx-auto flex flex-col-reverse md:flex-row py-20 justify-center items-center md:items-start">
            <div class="hidden md:block">
                <img src="images/signUp.png" alt="" class="">
            </div>
            <form action="signUp.php" method="post" class="bg-white md:p-12">
                <h1 class="font-normal text-4xl mb-3">Register</h1>
                <h3 class="font-normal text-xl text-[#838383] mb-10">Register and help us help you</h3>
                <input name="username" type="text" placeholder="Username" class="w-[390px] h-[63px] border border-border-color rounded-lg pl-8 font-normal text-lg mb-4 focus:outline-[#FF8F52]"> <span class="pl-4 text-red-500"><?php echo $usernameErr; ?></span>
                <br>
                <input name="email" type="email" placeholder="Email" class="w-[390px] h-[63px] border border-border-color rounded-lg pl-8 font-normal text-lg mb-4 focus:outline-[#FF8F52]"><span class="pl-4 text-red-500"><?php echo $emailErr; ?></span>
                <br>
                <input name="password" type="password" placeholder="Password" class="w-[390px] h-[63px] border border-border-color rounded-lg pl-8 font-normal text-lg mb-4 focus:outline-[#FF8F52]"><span class="pl-4 text-red-500"><?php echo $passwordErr; ?></span>
                <br>
                <input name="confirm_password" type="password" placeholder="Confirm Password" class="w-[390px] h-[63px] border border-border-color rounded-lg pl-8 font-normal text-lg mb-[26px] focus:outline-[#FF8F52]"><span class="pl-4 text-red-500"><?php echo $confirmPassErr; ?></span>
                <br>
                <input name="submit" type="submit" value="Register" class="mb-10 w-[390px] h-[63px] bg-[#FF8F52] rounded-lg font-normal text-xl text-white cursor-pointer">
                <p class="font-normal text-xl text-[#838383] text-center">Already have an account? <span class="text-[#FF8F52]"><a href="login.php" class="cursor-pointer">Login</a></span></p>
            </form>
        </div>
    </main>

    <!-- footer -->
    <footer></footer>

</body>

</html>