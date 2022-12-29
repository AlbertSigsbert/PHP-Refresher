<?php  include 'inc/header.php'; ?>

<?php
$name = $email = $feedback = '';
$nameErr = $emailErr = $feedbackErr = '';

if (isset($_POST['submit'])) {
    //Validate name
   if(empty($_POST['name'])){
    $nameErr = 'Name is required';
   }else{
    $name = htmlspecialchars($_POST['name']);
   }
    //Validate email
   if(empty($_POST['email'])){
    $emailErr = 'Email is required';
   }else{
    $email = htmlspecialchars($_POST['email']);
   }
    //Validate name
   if(empty($_POST['feedback'])){
    $feedbackErr = 'Feedback is required';
   }else{
    $feedback = htmlspecialchars($_POST['feedback']);
   }

   if (empty($nameErr) && empty($emailErr) && empty($feedbackErr)) {
    //Insert into db
     $sql = "INSERT INTO feedback (name,email,feedback) VALUES ('$name', '$email','$feedback')";
    
     if (mysqli_query($conn, $sql)) {
        header('Location: ./feedback.php');

     }
     else{
      echo 'Failed to insert data:'. $mysqli_error($conn);
     }
    # code...
   }
}

echo $nameErr;


?>

<img src="img/logo.png" class="mb-3" style="width: 100px;" alt="Logo">
<h2>Feedback</h2>
<p class="lead text-center">Leave feedback for Traversy Media</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid': null; ?>" id="name" name="name"
      placeholder="Enter your name">
    <div class="invalid-feedback">
      <?php echo $nameErr; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid': null; ?>" id="email" name="email"
      placeholder="Enter your email">
    <div class="invalid-feedback">
      <?php echo $emailErr; ?>
    </div>
  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea class="form-control  <?php echo $feedbackErr ? 'is-invalid': null; ?>" id="body" name="feedback"
      placeholder="Enter your feedback"></textarea>
    <div class="invalid-feedback">
      <?php echo $feedbackErr; ?>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
  </div>
</form>

<?php  include 'inc/footer.php'; ?>