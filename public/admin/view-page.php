<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
?>

<?php 

$user= new blog();
if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
     $id=(int)$_GET ['id'];
    $result=$user->readbypageid('page_table',$id);

 }
if (isset($_GET ['action']) && $_GET ['action'] == 'update') {
    $id=(int)$_GET ['id'];

}

?>



<div class="row register-form blog-page"style="margin-left:18%;padding-top:5%;margin-bottom:20px;">
<div class="overflow">
    
<h4><i class="fa fa-angle-right"></i>Page Detailse</h4>
<button class="btn-two"><?php echo "<a href='edit-page.php?action=update&id=".$result['page_id']."'></>"; ?>Edit page</a></button>
<button class="btn-two"><a href="all-pages.php">SEE ALL PAGES</a></button>
<hr>



<div class="scrolsec" style="overflow-x:auto;height: 550px;padding:10px 20px;">      
<h4 style="text-align:center;"></i><?php echo $result['page_name']?></h4><hr>
<p class="viewpageparag"><?php echo $result['page_desc']?></p>
</div>

</div>

</div>
<?php
include('includes/footer.php');
?>
