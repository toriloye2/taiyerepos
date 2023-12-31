<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>T-Soccer Blog</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" class="text-uppercase text-center mb-5" href="#">T-Soccer Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About us</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    
                    <?php if (!isset($_SESSION["loggedin"])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION["loggedin"])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Logout.php">Logout</a>
                    </li>
                <?php endif; ?>
                   <li class="nav-item">
                        <a class="nav-link" href="create.php">Create</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION["role"]) && $_SESSION["role"] == 1): ?>
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        <?php endif; ?>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <div class="container mt-4 ">
        <!-- Your page content goes here -->
    </div>
    
</body>


</html>

<!-- navbar.php -->
<?php
 
 if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && !isset($_SESSION["welcome_shown"])) {
    echo "Welcome, " . $_SESSION["name"] . "!";
    $_SESSION["welcome_shown"] = true;  // Set the welcome message as shown

}
?>