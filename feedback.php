<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Feedback</title>
</head>

<body>

  <div class="navbar">
    <a href="./aboutme.html">About Me</a>
    <a href="./gallery.html">Gallery</a>
    <a href="./feedback.html">Feedback</a>
  </div>

  <?php

  if (isset($_POST['realname'])) {

    $realname = $_POST['realname'];

  }

  if (isset($_POST['email'])) {

    $email = $_POST['email'];

  }

  if (isset($_POST['comments'])) {

    $comments = $_POST['comments'];

  }

  $file = fopen('comments.txt', 'a');
  fwrite($file, "Name:" . $realname . "\n" . "Email:" . $email . "\n" . $comments . "\n" . "\n");
  fclose($file);

  ?>

  <div class="intro">

    <div class="intro">
      <h2>Thanks for the feedback,
        <?php echo $realname ?>!
      </h2>
      <p>I will reply to your feedback at
        <span style="text-decoration:underline">
        <?php echo $email;?>
        </span>soon.
      </p>
    </div>

    </head>
</body>