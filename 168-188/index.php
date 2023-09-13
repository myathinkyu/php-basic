<?php 
include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";
?>

<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
    <section class="col-md-9">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <h5>Card title</h5>
              <p>Some quick example text to build on the card title and make up the bulk of 
              the card's content.A card is a flexible and extensible content container.
              </p>
            <a href="#" class="btn btn-info btn-sm float-right">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>




</body>
</html>