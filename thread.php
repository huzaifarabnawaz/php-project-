<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>pc info pakistan</title>
</head>

<style>
  #ques {

    margin-bottom: 300px;
  }
</style>



<body>
  <?php include "partial/haeder.php"; ?>
  <?php include "partial/db_connect.php"; ?>

  <?php

  $id = $_GET['threadid'];
  $sql = "SELECT * FROM `threeds` WHERE threed_id =$id";
  $result = mysqli_query($inf, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['threed_title'];
    $desc = $row['threed_desc'];
  }


  ?>


  <div class="container my-4">
    <div class="jumbotron">
      <h1 class="display-4">hi me i can help you : user <?php echo $title ?> </h1>
      <p class="lead">massege : <?php echo $desc ?> </p>
      <hr class="my-4">
      <p class="bg-warning">! Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate speech.
        Keep it clean. Don't post anything obscene or sexually explicit.
        Respect each other. Don't harass or grief anyone, impersonate people, or expose their private information thank you. </p>
      <p><b>POSTED BY HUZAIFA RABNAWAZ</b></p>
    </div>


  </div>


  <div class="container" id="ques">
    <h1 class="py-3">dicussions</h1>

    <!-- 
    <?php

    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threeds` WHERE threed_user_id=$id";
    $result = mysqli_query($inf, $sql);
    $got = true;

    while ($row = mysqli_fetch_assoc($result)) {

      $noresult = false;

      $id = $row['threed_id'];
      $threeduserid = $row['threed_user_id'];
      $thtitle = $row['threed_title'];
      $thdesc = $row['threed_desc'];



      echo '

    <div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
    <h3 class="mt-0"><a class="text-dark" href="thread.php"></a></h3>
    <h5>' . $thdesc . '</h5>
  </div>
</div>

';
    }


    if ($got) {
      echo '  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">NO RESULT FOUND </h1>
        <p class="lead">be the firt person ask a question</p>
      </div>
    </div> ';
    }

    ?> -->


    <!-- later i am remove this media  -->
    <!-- 
    <div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>


<div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>


<div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>  -->


  </div>






  <?php include "partial/footer.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>