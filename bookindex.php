<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
 
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
<ul class="nav navbar-nav navbar-right">
                <li><a href="custlogout.php">Logout</a></li>
                <li><a href="cust_del.php">Delivery Details</a></li>
            </ul>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
        <a href="book.php?bookisbn=<?=$book['book_isbn']?>" >
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>