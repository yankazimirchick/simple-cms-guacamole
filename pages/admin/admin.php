

<?  get_header(); ?>


<div class="container">
<h1>Admin Panel</h1>


<?php
require ( $_SERVER['DOCUMENT_ROOT'].'/pages/admin/users_list.php');
require ( $_SERVER['DOCUMENT_ROOT'].'/pages/admin/page_list.php');
?>
</div>
<?  get_footer(); ?>