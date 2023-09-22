<?php 
    $page_title = "Registration";
    $display_navbar_flag = false;
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_POST["create_account"]))
	{
		$resp = user_registration($_POST);
		if($resp === true)
		{
			$_SESSION["account_created_flag"] = true;
			echo "<script>window.location='/registration/registered.php';</script>";
			exit(0);
		}
		redirect_to_current_page();
	}

?>
<!-- <div class=""> -->
<!-- <img src="/assets/img/404614.jpg" alt=""> -->
    <!--  -->
    <div class="mx-auto d-grid"></div>
        <?php view_prompts(); ?>
    </div>
    <div class=" login_section my-5">
        <!-- <img src="/assets/img/website_pics/hpic_1.png" class="" alt=""> -->
        
        <form action="<?php echo get_action_attr_value_for_current_page(); ?>" method="post" enctype="multipart/form-data" >
        
            <div class="card mt-5 mx-4  text-center mx-sm-auto " id="registercard">
            
                <h2 class="text-center fw-bolder register_txt mt-3" >Register</h2>
                <!-- <p class="text-center   mt-0" style="color: #ffffff;"><small>Don't have have an account? Create one to boost your experience</small></p> -->
                
                <div class="row mx-5 mt-5 ">
                    <input class=" input-group register_fields input-group-lg register_placeholder" type="text" id="email_id"
                        name="email_id" placeholder="Email-id" required >
                    <input class="mt-4 register_fields register_placeholder" type="password"
                        id="password" name="password" placeholder="Password" required>
                    <input class="mt-4 my-5 register_fields register_placeholder" type="password"
                        id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                    <button class="btn btn-dark mx-auto d-grid fw-bold mb-3" name="create_account" id="create_account_btn" type="submit">Create Account</button>
                </div>
                <hr class="mx-4" style=" color: #000000;">


                <div class=" text-center  my-2">
                  <p class="fw-bolder" >
                      Already have an account?
                      <a  href="/login/login">
                      <button class=" btn-warning btn-sm fw-bolder border-1 txt_dec " id="register_btn" type="button" >Log In</button>
                      </a>
                  </p>
              </div>
            </div>
        </form>
        
    </div>
</div>
 
<?php 
    
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php");
?>