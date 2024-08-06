<?php
// https://www.youtube.com/watch?v=TIyiuVaEXV4&ab_channel=AUZTutorials
// graph https://getbootstrap.com/docs/4.0/examples/dashboard/


include('includes/database.php');
include('includes/config.php');
include('includes/functions.php');

// HTML Functions
include('includes/components/header.php');

?>


<!-- FORM SUBMISSION -->
<?php
// if (isset($_POST['email'])) {


// * THIS WORKS
// var_dump($_POST);


// ? BREAKDOWN OF CODE
// // PREPARE MYSQL STATEMENT AND BIND IT. THE "?" ARE TEMPLATE PLACEHOLDERS IN 
// // WHICH WE WILL INSERT THE VALUES IN THE bind_param METHOD BELOW.
// $stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND active = 1');
// // PREPARE USER PASSWORD ENTRY AND HASH IT WITH SHA-1
// $hashed = SHA1($_POST['password']);
// // CREATE A VARIABLE FROM FORM ENTRY AND INSERT EMAIL 
// $email = $_POST['email'];
// // BINDS FORM VALUES TO MYSQLI STATEMENT IN THE $stm VARIABLE. 
// $stm->bind_param('ss', $_POST['email'], $hashed);
// // RUNS THE MYSQLI STATEMENT
// $stm->execute();
// // GRABS THE RESULTS FROM THE MYSQLI STATEMENT
// $result = $stm->get_result();
// // FORMATS THE RESULTS ABOVE INTO AN ASSOCIATIVE ARRAY AND SETS IT IN $user VAR
// $user = $result->fetch_assoc();

// var_dump(($user));

// ! THIS DOES NOT WORK
// if ($stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND active = 1')) {
// if (isset($_POST['email']) && isset($_POST['password'])) {
if (isset($_POST['submit'])) {
    $stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND activeUser = 1');
    $hashed = SHA1($_POST['password']);
    $stm->bind_param('ss', $_POST['email'], $hashed);
    $stm->execute();

    $result = $stm->get_result();
    $user = $result->fetch_assoc();

    var_dump(($user));
    // var_dump(($_POST));
    // var_dump(('Inside submitted form action: ' . $_POST['password'] . '-' . $hashed));

    if ($user) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];

        // TODO GIVE FEEDBACK / WELCOME MESSAGE 
        header('Location: dashboard.php');
        die();
    }

    $stm->close();
} else { ?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>

<?php

    echo 'could not prepare statement!';
}
// }


?>
<!-- BOOTSTRAP -->
<!-- <div class="container-fluid bg-primary bg-gradient"> -->

<div class="container mt-5 p-3 bg-primary text-light box-shadow border border-primary-subtle border-5 rounded-4 loginForm">
    <div class="mt-3">
        <img src="includes//assets//card-logos//brain-2235771_640.png" style="width: 20%; height:auto;" class="mx-auto d-block text-center" />
        <h1 class="text-center display-5 fw-bold"> CollegePad</h1>
        <p class="lead text-center">An website to write and store your class notes. ✏️</p>
        <hr />

        <p>

    </div>

    <!-- FORM -->
    <form action="" method="post" class="loginForm">
        <h3 class="">Log into your account </h3>

        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email">
        </br>

        <label for="password" name="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        </br>
        <div class="text-center">

            <button type="submit" class="btn btn-success btn-lg" value="submit" name="submit">Submit</button>
        </div>
        </br>
        </br>
    </form>
</div>


<?php

include('includes/components/notebuilder.php');
include('includes/components/noterepo.php');
include("includes/components/footer.php");
?>