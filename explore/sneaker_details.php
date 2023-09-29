<?php
$page_title = "Product details";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

if (isset($_GET["q"]) && !empty($_GET["q"]) && is_numeric($_GET["q"])) {
  $id = trim($_GET["q"]);
  $sneaker = get_sneakers_by_id($id);
}

if (isset($_POST["add_to_cart_btn"])) {
  if (isset($_GET["q"]) && !empty($_GET["q"])) {
    $id = trim($_GET["q"]);
    add_to_cart($_POST, $id);
    redirect_to_current_page("q=$id");
  }
}
?>

<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
  <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/explore/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page"><a class="txt_dec">product name</a></li>
  </ol>
</nav>
<div class="my-3">
  <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php"); ?>

</div>
<div class="container-fluid">
  <form role="form" action="" method="post" enctype="multipart/form-data" class="was-validated">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active ">
          <?php if ($sneaker["full_profile"] > '0'): ?>
            <img src="<?php echo substr($sneaker["full_profile"], 26); ?>" class="d-block mx-auto img-fluid ">
          <?php else: ?>
            <img src="/assets/img/default_img.png" class="d-block mx-auto img-fluid ">
          <?php endif; ?>
        </div>
        <div class="carousel-item">
          <?php if ($sneaker["t_profile"] > '0'): ?>
            <img src="<?php echo substr($sneaker["t_profile"], 26); ?>" class="d-block mx-auto img-fluid ">
          <?php else: ?>
            <img src="/assets/img/default_img.png" class="d-block mx-auto img-fluid ">
          <?php endif; ?>
        </div>
        <div class="carousel-item">
          <?php if ($sneaker["l_profile"] > '0'): ?>
            <img src="<?php echo substr($sneaker["l_profile"], 26); ?>" class="d-block mx-auto img-fluid ">
          <?php else: ?>
            <img src="/assets/img/default_img.png" class="d-block mx-auto img-fluid ">
          <?php endif; ?>
        </div>
        <div class="carousel-item">
          <?php if ($sneaker["r_profile"] > '0'): ?>
            <img src="<?php echo substr($sneaker["r_profile"], 26); ?>" class="d-block mx-auto img-fluid ">
          <?php else: ?>
            <img src="/assets/img/default_img.png" class="d-block mx-auto img-fluid ">
          <?php endif; ?>
        </div>
        <div class="carousel-item">
          <?php if ($sneaker["sole_profile"] > '0'): ?>
            <img src="<?php echo substr($sneaker["sole_profile"], 26); ?>" class="d-block mx-auto img-fluid ">
          <?php else: ?>
            <img src="/assets/img/default_img.png" class="d-block mx-auto img-fluid ">
          <?php endif; ?>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon btn-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon btn-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <div class="row">
      <div class="col-md-9">
        <div class="mt-3">
          <h2 class="fw-bold mx-5 text-center text-uppercase">
            <?php echo $sneaker["pro_name"]; ?>
          </h2>
        </div>
        <div class="row py-4 mx-5 g-1">
          <div class="col details_page_btn text-center mx-2 py-auto">
            <div class="d-flex align-items-center justify-content-center h-100">
              <a type="button" class="text-uppercase mx-auto d-block col-md-6 txt_dec">Description</a>
            </div>
          </div>
          <div class="col  text-center mx-2 py-auto">
            <div class="d-flex details_page_btn align-items-center justify-content-center h-100  ">
              <?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user")): ?>
                <a type="button" class="text-uppercase mx-auto d-block col-md-6 txt_dec" name="add_to_cart_btn"
                  id="add_to_cart_btn">Add
                  to
                  cart</a>
              <?php else: ?>
                <a type="button" href="/login/login.php" class="text-uppercase mx-auto d-block col-md-6 txt_dec">Add
                  to
                  cart</a>
              <?php endif; ?>
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
                style="color: #000000;"></i>
              <?php echo $sneaker["price"]; ?>
            </h4>
          </div>
          <a href="" type="button"
            class="txt_dec  buy_product_btn btn-lg fw-bold mx-auto d-block text-center col-6">BUY</a>
        </div>
      </div>
    </div>

  </form>
</div>
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php")
  ?>