<?php  include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback LIMIT 2';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<h2>Feedback</h2>

<?php if(empty($feedback)):   ?>
   <p class="lead text-center my-5">No feedback yet</p>
<?php endif;  ?>

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


<div id="output"></div>

<button id="loadMore" class="btn btn-secondary">Load More</button>



<?php  include 'inc/footer.php'; ?>