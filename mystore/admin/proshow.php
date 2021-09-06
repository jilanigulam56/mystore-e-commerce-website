    <!DOCTYPE html>
<html>
<?php 
include("adminpartials/session.php");
include ('adminpartials/head.php');

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php
 include ('adminpartials/header.php');
 include ('adminpartials/aside.php');
 ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="adminindex.php" ><b>Home</b></a></li>
      
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="row">
  <div class="col-sm-9">
        <?php
          include('../partials/connect.php');

          $id=$_GET['pro_id'];
          $sql="SELECT * from products WHERE id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();        
          ?>

          <h3> Name : <?php echo $final['name']?> </h3><hr><br>

          <h3> Price : <?php echo $final['price']?> </h3><hr><br>

          <h3> Description : <?php echo $final['description']?> </h3><hr><br>
          <img src="../<?php echo $final['picture'] ?>" alt="No File" style="height:400px; width:400px">





        </div>


  </div>

  <div class="col-sm-3">
  </div>
  </div>
        
    </section>
    <!-- /.content -->
  </div>
 <?php
 include ('adminpartials/footer.php');
 ?>
</body>
</html>