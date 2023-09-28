<?php
	$page_title = "Product details";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
    
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page"><a  class="txt_dec">product name</a></li>
    </ol>
</nav>
<div>
<div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active justifycontent-center">
      <img src="/assets/img/SGPROD_005/SGPROD_005IMGL.jpg" class="d-block w-50 h-50" alt="...">
    </div>
    <div class="carousel-item justifycontent-center">
      <img src="/assets/img/SGPROD_005/SGPROD_005IMGL.jpg" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item justifycontent-center">
      <img src="/assets/img/SGPROD_005/SGPROD_005IMGL.jpg" class="d-block w-50" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev btn-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next btn-dark" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>