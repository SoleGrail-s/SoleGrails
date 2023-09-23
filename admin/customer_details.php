<?php
	$page_title = "Customer Details";
    $display_navbar_flag = true;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<nav class="lora_font ms-5 my-2 " aria-label="breadcrumb lora_font ms-2">
      <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="#" class="txt_dec">Home</a></li>
        <li class="breadcrumb-item " aria-current="page">
          <a href="/admin/view_customer.php" class="txt_dec">View Customers</a>
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
                    <p>Customer Id:<input type="number" class="border-0" name="product_id" id="product_id"></p>
                </div>
                <div class="col-md-4">
                    <p>Customer since:<input type="text" class="border-0" name="added_date" id="added_date"></p>
                </div>
                <div class="col-md-4">
                    <p>Profile last updated:<input type="text" class="border-0" name="modified_date" id="modified_date"></p>
                </div>
                <div class="input-group row px-3">
                    <label for="" class="my-4 details_section">Basic Details</label>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            First Name: 
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Middle Name:
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Last Name:
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                </div>
                <div class="input-group row px-3" >
                    <label for="" class="my-4 details_section">Contact Details</label>
                    <div class="col " >
                        <label style="display: block; color: #5c5c5c;">
                            Phone Number: 
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Alternate Number:
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Email-Id:
                        </label>
                        <input type="email" class="form-control" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                </div>
                <div class="input-group row  px-3">
                    <label for="" class="my-4 details_section">Address</label>
                    <div class="pb-3">
                        <label  style="display: block; color: #5c5c5c;">
                            Address:
                        </label>
                        <textarea class="form-control mx-auto no_resize" placeholder="" id="floatingTextarea" style="border-color: #00000084; border-radius: 10px; resize: none;"></textarea>
                    </div>
                    <div class="col">
                        <label  style="display: block; color: #5c5c5c;">
                            Landmark:
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            State:
                        </label>
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                        <!-- <select class="form-select" size="1" style="border-color: #00000084; border-radius: 10px;" >
                            <option selected>Select your state</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
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
                        <input type="text" class="form-control text" style="border-color: #00000084; border-radius: 10px;">
                    </div>
                    <div class="col">
                        <label style="display: block; color: #5c5c5c;">
                            Country:
                        </label>
                        <fieldset disabled="disabled">
                            <input type="text"  class="form-control" placeholder="Bharat" style="border-color: #00000084; border-radius: 10px;">
                        </fieldset>
                    </div>
                </div>
                <div class="position-relative my-5 pt-3">
                   
                    <button type="button" class="btn btn-warning position-absolute bottom-0 end-0 mx-4 confirm_btn" style="border-radius: 30px;"> <i class="fa-regular fa-circle-check pe-2" style="color: #000000;"></i>Confirm</button>
                </div>
            </div>
        </div>
    </form>

<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>