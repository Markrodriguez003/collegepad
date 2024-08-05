<?php
// https://www.youtube.com/watch?v=TIyiuVaEXV4&ab_channel=AUZTutorials


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
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="">CollegePad</h1>
        <p class="lead">An website to write and store your class notes. ✏️</p>
        <!-- <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View notes &raquo;</a> -->
        <hr />
    </div>
    <br />

    <!-- FORM -->


    <form action="" method="post">

        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email">
        </br>

        <label for="password" name="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">

        </br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>


<?php

include("includes/components/footer.php");
?>