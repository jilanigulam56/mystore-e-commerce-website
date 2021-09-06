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
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
	<form role="form"  enctype="multipart/form-data" action="producthandler.php" method="POST">
	<h1> Products </h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Products name" name ="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Price" name ="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" value="<?php echo $final['description'] ?>" name="description"></textarea>
                </div>
                  <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name ="category">
                    <?php
                      include('../partials/connect.php');
                      $cat = "SELECT * FROM categories";
                      $result = mysqli_query($connect,$cat);
                      while($row=mysqli_fetch_assoc($result))
                      {
                        echo "<option value=".$row["id"].">".$row["name"]."</option>";
                      }
                    ?>
                  </select>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
	    </form>
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
