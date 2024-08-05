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


//     // * THIS WORKS
//     var_dump($_POST);

//     // ! THIS DOES NOT WORK
//     if ($stm = $connect->prepare('SELECT * FROM users WHERE email = ? AND password = ? AND active = 1')) {
//         echo ('HELLO');
//         $hashed = SHA1($_POST['password']);
//         $stm->bind_param('ss', $_POST['email'], $hashed);
//         $stm->execute();

//         $result = $stm->get_result();
//         $user = $result->fetch_assoc();

//         var_dump(($user));

//         if ($user) {
//             $_SESSION['id'] = $user['id'];
//             $_SESSION['email'] = $user['email'];
//             $_SESSION['username'] = $user['username'];

//             // TODO GIVE FEEDBACK / WELCOME MESSAGE 
//             header('Location: dashboard.php');
//             die();
//         }

//         $stm->close();
//     } else {
//         echo 'could not prepare statement!';
//     }
// }


?>
<!-- BOOTSTRAP -->
<!-- <div class="container-fluid bg-primary bg-gradient"> -->

<div class="container mt-5 p-3 bg-primary text-light box-shadow border border-primary-subtle border-5 rounded-4 loginForm">
    <div class="mt-3">
        <img src="includes//assets//card-logos//brain-2235771_640.png" style="width: 25%; height:auto;" class="mx-auto d-block text-center" />
        <h1 class="text-center display-2 fw-bold"> CollegePad</h1>
        <p class="lead text-center">An website to write and store your class notes. ✏️</p>
        <hr />

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

            <button type="submit" class="btn btn-success btn-lg">Submit</button>
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