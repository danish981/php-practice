<?php

$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ch = $_POST['letter'];
    if (ctype_alpha($ch)) {
        if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u') {
            $message = "the letter is vowel";
        } else {
            $message = "the letter is consonant";
        }
    }
}

?>

<!-- handling form with post method -->

<div class="form-container">

    <h2>enter your cheracter here</h2>

    <form action="" method="post" autocomplete="off">
        <input type="text" placeholder="enter the letter here" name="letter" minlength="1" maxlength="1" required>
        <input type="submit" value="submit" name="submit">
    </form>

    <p><?php echo $message; ?></p>

</div>

<style>
    body {
        padding: 20px;
        margin: 20px;
        font-family: "Arial", sans-serif;
        text-transform: capitalize;
    }


    .form-container {
        background-color: white;
        padding: 20px;
        margin: 20px auto;
        width: 50%;
        text-align: center;
        border: 2px solid lightgray;
        box-shadow: 0 0 6px 6px lightgray;
    }


    .form-container input {
        width: 90%;
        height: 40px;
        margin: 10px;
        padding: 2px 5px 2px 5px;
        border: 1px solid lightgray;
    }


    .form-container input[type='submit'] {
        background-color: lightgray;
        color: darkblue;
        font-size: 15px;
        cursor: pointer;
        transition: 0.1s;
    }

    .form-container input[type='submit']:hover {
        background-color: rgb(235, 241, 228);
        box-shadow: 0 0 3px 3px rgb(243, 253, 243);
    }
</style>