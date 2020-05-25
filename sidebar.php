<?php
include_once('resources/init.php');
?>


<div id="sidebar" class="four columns">

    <div class="widget widget_search">
        <h3>Search</h3>
<!--        <form action="search.php" method="get">-->
<!---->
<!--            <input type="text" name="search" class="text-search">-->
<!--            <input type="submit" name="submit" value="Search" class="submit-search">-->
<!---->
<!--        </form>-->

        <form action="search.php" method="get">

            <input type="text" name="search" value="Search here..."
                   onblur="if(this.value == '') { this.value = 'Search here...'; }"
                   onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
            <input type="submit" value="Search" class="submit-search">

        </form>
    </div>

    <div class="widget widget_categories group">
        <h3>Categories.</h3>
        <?php
        foreach (get_categories() as $category){
        ?>
        <p><a href="manage_category.php?id=<?= $category['id']; ?>"><?= $category['name']; ?></a>
            <?php
            }
            ?>
    </div>

    <div class="widget widget_text group">
        <h3>Daily Quote of the Day</h3>
        <p>What is success?</p><br/>
        <p>"Success is not final; failure is not fatal: It is the courage to continue that counts." -
            Winston S. Churchill</p>

    </div>

</div>