<html>
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<?php
include'connection.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Gedion 24/7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="welcome.php">Ngo list <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="volunteer_list_admin.php">Volunteer List</a>
      <a class="nav-item nav-link" href="Donation_list_admin.php">Donation List</a>
      <a class="nav-item nav-link" href="index.php">Logout</a>
    </div>
  </div>
</nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<div>
<table class="table" id="dynamic_field" style="border-style:none;">
<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Chairman</th>
        <th scope="col">Contact number</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Establishment Year</th>
    </tr>
</thead>
</div>
<?php
$query=mysqli_query($conn,"select * FROM ngo") or die(mysqli_error($conn));
while($row= mysqli_fetch_array($query)){
?>

<tr>
    
    <td><?php echo $row['ngo_name'];?></td>
    <td><?php echo $row['chairman'];?></td>
    <td><?php echo $row['contact_no'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['establishment_year'];?></td> 
    <td><a href="delete.php?id=<?php echo $row['ngoId'];?>" class="btn btn-danger">Delete</a></td>
                               
</tr>

<?php
}
?>
</table>


<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


</html>