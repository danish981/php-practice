<?php

?>

<link rel="stylesheet" href="style.css">

<!doctype html>
<html lang="en" dir="ltr" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>include and require</title>
  <style>
    .content {
      overflow: hidden;
      float: left;
      background-color: lightblue;
      padding: 20px;
      margin: 10px;
      border-left: 2px solid orange;
      border-bottom: 1px solid #000;
    }
  </style>
</head>
<body>

<!-- include  -->
<?php //include("header.php"); ?>

<!-- suppose we use requre instead of include -->
<?php require("header.php"); ?>

<div class="content">
  <h2>content heading 2</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur cumque, debitis dolor dolorem,
    esse est exercitationem itaque labore nemo nulla omnis perferendis qui sed sunt tempora unde. Aliquid in
    molestias vero?</p>
  <h3>content heading 3</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut autem est eum laborum obcaecati odit praesentium
    quisquam ut vel. Adipisci debitis ex nostrum rerum.</p>
</div>

<!-- incldue here -->
<?php include("sidebar.php"); ?>

<!-- incldue file incldue -->
<?php include("footer.php"); ?>

<!-- suppose we use the require instead of incldue with these two files -->
<?php require("sidebar.php"); ?>

<!-- require used with the footer file -->
<?php require("footer.php"); ?>

<!-- if we use require with the files, when the error occurs in one file, the entire code will not be
executed, and error message is shown ,but when we use the incldue("sidebar.php") etc, all tne code runs,
and if the error occurs in some of the files, the remaining code gets executed -->

</body>
</html>
