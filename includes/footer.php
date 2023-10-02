<!-- <div>  -->
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #000000ee">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-between p-2" style="background-color: #494949">
    <!-- Left -->
    <!-- <div class="m-auto text-center ">
      <button class="text-uppercase border-0 " style="background: transparent ;" class="btn-block" type="button"
        onclick="topFunction()" id="taketotopBtn">Take me to top</button>
    </div> -->

  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user")): ?>
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto my-4 position-relative">
          <!-- Content -->
          <h1 class=" fw-bold position-absolute top-50 start-50 translate-middle ">SoleGrail's
            <hr style="text-decoration: underline; color: #dac8c8; height: 5px ">
          </h1>
        </div>
        <?php endif ?>




        <!-- Grid column -->
        <?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user") ): ?>
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto my-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Help & FAQ</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color:  #ffffff; height: 3px" />
            <p>
              <a href="#!" class="text-white">Online Ordering</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping</a>
            </p>
            <p>
              <a href="#!" class="text-white">Billing</a>
            </p>
            <p>
              <a href="#!" class="text-white">Returns & Exchange</a>
            </p>
            <p>
              <a href="#!" class="text-white">Customer Service</a>
            </p>
          </div>
          <!-- Grid column -->
        <?php endif ?>


        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Useful links</h6>
          <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color:  #ffffff; height: 3px" />
          <?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user") ): ?>
            <p>
              <a href="/user/index.php" class="text-white">Your Account</a>
            </p>
            <?php elseif (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "admin") ): ?>
            <p>
              <a href="/admin\index.php" class="text-white">Your Account</a>
            </p>
          <?php else: ?>
            <p>
              <a href="/login/login.php" class="text-white">Your Account</a>
            </p>
          <?php endif ?>
          <?php if ($page_title === 'View Product'): ?>
            <p>
              <a href="/admin/brands/brands.php" class="text-white">Add Brand</a>
            </p>
          <?php elseif ($page_title === 'Add Fields'): ?>
            <p>
              <a href="/admin/product/add_product.php" class="text-white">Add Product</a>
            </p>
            <?php elseif ($page_title === 'Add Product'): ?>
            <p>
              <a href="/admin/brands/brands.php" class="text-white">Add brand</a>
            </p>
             <?php elseif ($page_title === 'View Customer'): ?>
              <p>
              <a href="/admin/orders/view_orders.php" class="text-white">View orders</a>
            </p>
            <p>
              <a href="/admin/product/view_products.php" class="text-white">View Products</a>
            </p>
            <?php elseif ($page_title === 'Orders'): ?>
            <p>
              <a href="/admin/customer/view_customer.php" class="text-white">View Customers</a>
            </p>
            <p>
              <a href="/admin/product/view_products.php" class="text-white">View Products</a>
            </p>
          <?php endif ?>
          

          <p>
            <a href="#!" class="text-white">Help</a>
          </p>
        </div>

        <?php if (isset($_SESSION["user_id"]) && ($_SESSION["role"]) && ($_SESSION["role"] === "user") ): ?>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 my-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Follow US</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color:  #ffffff; height: 3px" />
            <p>
              <i class="fa-brands fa-instagram fa-2xl pe-2" style="color: #ffffff"></i>
              <i class="fa-brands fa-square-facebook fa-2xl pe-2" style="color: #ffffff;"></i>
              <i class="fa-brands fa-x-twitter fa-2xl pe-2" style="color: #ffffff;"></i>
              <i class="fa-brands fa-linkedin fa-2xl pe-2" style="color: #ffffff;"></i>
              <i class="fa-brands fa-whatsapp fa-2xl pe-2" style="color: #ffffff;"></i>
            </p>
          </div>
        <?php endif ?>

        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <hr style="height: 2px;">

  <!-- Copyright -->
  <div class="text-center  pb-3">
    © 2023 Copyright:<a class="text-white" href=""> SoleGrail's.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- </div> -->
<!-- End of .container -->
</body>

</html>