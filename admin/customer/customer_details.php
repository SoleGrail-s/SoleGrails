<?php
	$page_title = "Customer Details";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");

    if(isset($_GET["user_id"]) && !empty($_GET["user_id"]) && is_numeric($_GET["user_id"]))
    {
        $id = trim($_GET["user_id"]);
        $user=get_user_details_by_passing_id($id);
    }
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
    <ol class="breadcrumb">
    <li class="breadcrumb-item "><a href="/admin/index.php" class="txt_dec">Home</a></li>
    <li class="breadcrumb-item " aria-current="page">
        <a href="/admin/customer/view_customer.php" class="txt_dec">View Customers</a>
    </li>
    <li class="breadcrumb-item" aria-current="page">Customer Details</li>
    </ol>
</nav>
<form action="">
        <div class="card mx-5 mb-5" style="border-radius: 50px; box-shadow: 10px 10px 50px #818181;">
        
            <div class="  mx-auto d-grid mt-4" >
                <h1 class="card_title fw-bold">Customer Details</h1>
                
            </div>
            <div class="row mx-4 pt-5">
                <div class="col-md-4">
                    <p>Customer Id:
                    <b class="border-0 text-center text-muted ps-2" name="custome_id" id="custome_id"><?php echo $user["user_id"]; ?></b></p>
                </div>
                <div class="col-md-4">
                    <p>Customer since:<b class="border-0 text-center text-muted ps-2" name="custome_id" id="custome_id"><?php echo $user["created_timestamp"]; ?></b></p></p>
                </div>
                <div class="col-md-4">
                    <p>Profile last updated:<b class="border-0 text-center text-muted ps-2" name="custome_id" id="custome_id"></b></p>
                </div>
                <div class=" row px-3">
                    <label for="" class="my-4 details_section">Basic Details</label>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            First Name: 
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $user["f_name"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Middle Name:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $user["m_name"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Last Name:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; " ><?php echo $user["l_name"]; ?></b></div>
                    </div>
                </div>
                <div class="input-group row px-3" >
                    <label for="" class="my-4 details_section">Contact Details</label>
                    <div class="col " >
                        <label style="display: block; color: #5c5c5c;">
                            Phone Number: 
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["contact_no"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Alternate Number:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["alternate_no"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Email-Id:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["email_id"]; ?></b></div>
                    </div>
                </div>
                <div class="input-group row  px-3">
                    <label for="" class="my-4 details_section">Address</label>
                    <div class="pb-3">
                        <label  style="display: block; color: #5c5c5c;">
                            Address:
                        </label>
                        <!-- <textarea class="form-control mx-auto no_resize" placeholder="" id="floatingTextarea" style="border-color: #00000084; border-radius: 10px; resize: none;"></textarea> -->
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["address"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label  style="display: block; color: #5c5c5c;">
                            Landmark:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["landmark"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            State:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["state"]; ?></b></div>
                        <!-- <select class="form-select" size="1" style="border-color: #00000084; border-radius: 10px;" >
                            <option selected>Select your state</option>
                            <option ="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                          </select> -->
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Postalcode:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["postal_code"]; ?></b></div>
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Country:
                        </label>
                        <div><b class="form-control " style="border-color: #00000084; border-radius: 10px;height: 40px; "><?php echo $user["country"]; ?></b></div>
                    </div>
                </div>
                <div class="position-relative my-5 pt-3">
                   
                    <a href="/admin/customer/view_customer.php" type="button" class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn" style="border-radius: 30px;"> <i class="fa-solid fa-xmark pe-1" style="color: #000000;"></i>Cancel</a>
                </div>
            </div>
        </div>
    </form>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>