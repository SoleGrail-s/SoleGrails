<?php
$page_title = "Product details";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

?>

<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/explore/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page"><a class="txt_dec">product name</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="/assets/img/SGPROD_005/SGPROD_005IMGF.jpg" class="d-block mx-auto img-fluid " alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/SGPROD_005/SGPROD_005IMGT.jpg" class="d-block mx-auto img-fluid " alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/SGPROD_005/SGPROD_005IMGL.jpg" class="d-block mx-auto img-fluid " alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/SGPROD_005/SGPROD_005IMGR.jpg" class="d-block mx-auto img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/assets/img/SGPROD_005/SGPROD_005IMGS.jpg" class="d-block mx-auto img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon btn-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon btn-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="row">
    <div class="col-md-9">
        <div class="mt-3">
            <h2 class="fw-bold mx-5 text-center">Air Force 1 High '07 lx 'Blackwhite-Beach-Smoke Grey</h2>
        </div>
        <div class="row py-4 mx-5 g-1">
            <div class="col details_page_btn text-center mx-2 py-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <label class="text-uppercase mx-auto d-block col-md-6">Description</label>
                </div>
            </div>
            <div class="col details_page_btn text-center mx-2 py-auto">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <label class="text-uppercase mx-auto d-block col-md-6">Add to cart</label>
                </div>
            </div>
            <div class="col text-center mx-1">
                <select class="form-select text-uppercase text-center fw-bold mx-auto d-block col-md-6"
                    aria-label="Default select example">
                    <option selected disabled>Size</option>
                    <?php if ($sizes = get_sizes()): ?>
                        <?php foreach ($sizes as $size): ?>
                            <option value="<?php echo $size["id"]; ?>">
                                <?php echo $size["sizes"]; ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="d-flex flex-column h-100 justify-content-center align-items-center">
            <div class="mb-2">
                <h4 class="fw-bold display_price text-center"><i class="fa-solid fa-indian-rupee-sign pe-2 fa-lg"
                        style="color: #000000;"></i>30000</h4>
            </div>
            <a href="" type="button"
                class="txt_dec  buy_product_btn btn-lg fw-bold mx-auto d-block text-center col-6">BUY</a>
        </div>
    </div>
</div>


</div>
  <?php
  require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
    ?>