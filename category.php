<?php
include_once('resources/init.php');
//$posts = get_posts(null,$_GET['id']);
//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//$id = $_GET['id'];
//$cat_id = $_GET['cat_id'];
$query = "SELECT
              `posts`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`contents`,`date_posted`,
               `categories`.`name`
               FROM `posts`
               INNER JOIN `categories` ON `categories`.`id` = `posts`.`cat_id` " ;
if(isset($id)){
    $id = (int)$id;
    $query .= " WHERE `posts`.`id` = {$id} ";
}
if(isset($cat_id)){
    $cat_id = (int)$cat_id;
    $query .= " WHERE `cat_id` = {$cat_id} ";
}

$query .= "ORDER BY `post_id` DESC";


$query = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query)){
    $posts[] = $row;
}


//$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//$query = "select * from posts order by id desc";
//$posts = mysqli_query($conn, $query);
?>
<!--Header-->
<?php require_once 'header.php'; ?>

   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">
                        <h2 class="entry-title">
                            <h2>All Category</h2><br/>
                        </h2>
	    <?php
     foreach($posts as $post){

     ?>

						<div class="entry-meta">
	     <h2><a href='index.php' ><?= $post['title']; ?></a></h2>
<!--	     <h2><a href='index.php?id=--><?php //echo $post['post_id']; ?><!--' >--><?//= $post['title']; ?><!--</a></h2>-->
     <p>
        Posted on <?= date('d-m-y h:i:s',strtotime($post['date_posted'])); ?>
        In <a href='category.php?id=<?= $post['category_id']; ?>' ><?= $post['name']; ?></a>
     </p>
     <div style="text-align: justify"><?= nl2br($post['contents']); ?></div>
     <menu>
        <ul>
            <li></li>
            <li></li>
        </ul>
     </menu>
						</div>
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 

    <?php
     }
     ?>
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