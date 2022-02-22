<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="skills.css">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
</head>

<script>
  function success(){
    alert ("You have completed today's task, PLEASE DON'T CLICK AGAIN TO AVOID UNWANTED ACTIONS, YOUR WALLET WILL BE CREDITED")
}
</script>

<body> 
  <div class="active">
    <h1>A short description about today's task</h1>
    <p>Make sure you you follow all the instruction given bellow this page</p>
  </div>
  
  <br>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/out1.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/out2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/out3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
  
    <div class="active">
        <!-- <form action="empty" onsubmit="return false" method="post"> -->
        <!-- <input type="submit" name="click_button" value="t">
        </form> -->
        <br>
        <p>To perform your task <a href="#">click here</a> </p><br>

        <p>Click the button below when you are down with your task.</p>
        <p>NOTE: If you don't do your task correctly, it will definitely affect you during withdawal</p>
        <form action="amount.php" method="post">
        <input onclick="success()" type="submit" name="click_button" value="I have done my task">
        </form>
        <br>
        <br>
        <p id="account-l">Today's task is sponsored by Mercy Otung</p>
        <p>Click on the abave button, it redirect to her instagram page, <strong>make sure you follow her instagram account and leave comment on her current post.</strong></p>
        <p>Not being consistence with your daily tasks attracks deductions during withdrawals.</p>
    </div>
   


    <script src="script.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>