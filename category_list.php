<?php
include_once('resources/init.php');
?>
<!--Header-->
<?php require_once 'header.php'; ?>

    <script type="text/javascript">
        function confirm_delete()
        {
            return confirm("Are you sure you want to delete this record?");
        }
    </script>

   <!-- ========================== Content ======================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">

						<h2 class="entry-title">
							<h2>List of Categories</h2><br/>
						</h2> 				 
					
						<div class="entry-meta">
    <?php
     foreach(get_categories() as $category){
     ?>
      <p><a href="category.php?id=<?= $category['id'];?>"><?= $category['name']; ?></a> -
      <a href="delete_category.php?id=<?= $category['id'];?>" onclick='return confirm_delete()'><font color="red">Delete</font></a></p>
     <?php  
     }
     ?>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div>

                <a class="read" href="admin.php"><i class="fas fa-angle-double-left"> Back Before</i></a>
				</article> <!-- end entry -->

   		</div> <!-- end main -->

        <!-- start sidebar -->
        <?php require_once 'sidebar.php'; ?>
        <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
<?php require_once 'footer.php'; ?>