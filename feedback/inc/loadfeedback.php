<?php include '../config/db.php';  ?>

<?php

$limit = $_POST['limit'];
$offset = $_POST['offset'];

$sql = "SELECT * FROM feedback LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php foreach($feedback as $item): ?>
<div class="card my-3 w-75">
  <div class="card-body text-center">
    <?php echo $item['feedback']; ?>
    <div class="text-secondary mt-2">
      <p>By <?php echo $item['name']; ?></p>
    </div>
  </div>
</div>

<?php endforeach; ?>