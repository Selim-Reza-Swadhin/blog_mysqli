<?php
include_once('resources/init.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
//$posts = get_posts((isset($_GET['id']))? $_GET['id'] : null);
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query = "select * from posts order by id desc";
$posts = mysqli_query($conn, $query);

//categories table
//$cat_query = "select * from categories";
//$cat_posts = mysqli_query($conn, $cat_query);
?>


<script type="text/javascript">
function confirm_delete()
{
return confirm("Are you sure you want to delete this record?");
}
</script>

<!--Header-->
<?php require_once 'header.php'; ?>
   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
                <a class="read" href="admin.php"><i class="fas fa-angle-double-left"> Back Before</i></a>
		<?php
     foreach($posts as $post){
      ?>
					<header class="entry-header">

						<h2 class="entry-title">
							<h2><a href='index.php?id=<?= $post['id']; ?>' ><?= $post['title']; ?></a></h2>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li> <?= date('d-m-y h:i:s:a',strtotime($post['date_posted'])); ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">In <a href='manage_category.php?id=<?= $cat_posts['id']; ?>' ><?= "<font color='green'>".$cat_posts['name']."</font>"; ?></a></li>
								<span class="meta-sep">&bull;</span>
								<li><a href='delete_post.php?id=<?= $post['id']; ?>' onclick='return confirm_delete()'><font color="red">Delete This Post</font></a></li>&nbsp;||
								<li><a href='edit_post.php?id=<?= $post['id']; ?>' ><font color="blue">Edit This Post</font></a></li>
							</ul>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><?= nl2br($post['contents']); ?></p>
					</div> 
									 <?php   
     }
     ?>
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