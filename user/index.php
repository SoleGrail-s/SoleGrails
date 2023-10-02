<?php
$page_title = "Profile";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");

$user_info = display_user_details_by_id();
if (isset($_POST["update_user_basic_details"])) {
    update_user_profile_detail($_POST);
    redirect_to_current_page();
} elseif (isset($_POST["update_user_contact_&_add_details"])) {
    update_user_address_detail($_POST);
    redirect_to_current_page();
}

?>
<div class="row mx-5">
    <div class="col-lg-12">
        <?php require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/prompts.php"); ?>
    </div>
</div>
<div class="card m-5 border-1"
    style=" background-color: #ffd9007b; box-shadow: 5px 5px 15px #818181; border: 1px solid #D87300;">
    <div class="float-start p-3 ">
        <!-- <img src="" class="float-start mx-auto"
            style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid #D87300;"> -->
        <div class="float-start text-uppercase lora_font "
            style="background-color: #cccccc; width: 100px; height: 100px; border-radius: 50%; border: 3px solid #D87300; align-item: middle;">
            <h1 class="text-center my-4 fw-bold text-dark">
                <?php echo substr($user_info["f_name"], 0, 1) ?>
            </h1>
        </div>
        <label class="ms-5 mx-auto my-4 fw-bold "
            style="vertical-align: middle ; font-family: 'Lora', sans-serif; font-size: 30px;">Welcome,
            <?php echo $user_info["f_name"], " ", $user_info["l_name"] ?>
        </label>
    </div>
</div>
<div class="card m-5 user_profile_card box_shadow" style="">
    <nav>
        <div class="nav nav-tabs nav_tabs" id="nav-tab" role="tablist">
            <button class="nav-link active  fw-bold  " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true"
                style="color: #000000">Details</button>
            <button class="nav-link  fw-bold  " id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false"
                style="color: #000000">Contact & Address</button>
            <button class="nav-link  fw-bold  " id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #000000">Change
                Password</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form role="form" action="<?php echo get_action_attr_value_for_current_page(); ?>" method="post"
                enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-4 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt" for="f_name">
                            First Name
                        </label>
                        <input type="text " class="form-control text user_profile_fields box_shadow " id="f_name"
                            name="f_name" value="<?php echo $user_info["f_name"] ?>" required>
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="m_name">
                            Middle Name
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow " id="m_name"
                            name="m_name" value="<?php echo $user_info["m_name"] ?>">
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="l_name">
                            Last Name
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow " id="l_name"
                            name="l_name" value="<?php echo $user_info["l_name"] ?>" required>
                    </div>
                </div>
                <div class="row pb">
                    <div class="col-6 ps-5 pb-3 ">
                        <label class="px-3 user_profile_txt " for="dob">
                            Date of Birth
                        </label>
                        <input type="date" class="form-control text user_profile_fields box_shadow "
                            style="max-width: fit-content;" id="dob" name="dob" value="<?php echo $user_info["dob"] ?>"
                            required>
                    </div>
                    <div class="col-6 pe-5 pb-3">
                        <label class="px-3 user_profile_txt" for="gender">
                            Gender
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow "
                            style="max-width: fit-content;" id="gender" name="gender"
                            value="<?php echo $user_info["gender"] ?>" required>
                    </div>

                </div>
                <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                    <button type="submit" class="btn btn-warning fw-bold update_btn box_shadow "
                        name="update_user_basic_details" id="update_user_basic_details"><i
                            class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update
                        Profile</button>
                </div>

            </form>

        </div>
        <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form role="form" action="<?php echo get_action_attr_value_for_current_page(); ?>" method="post"
                enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt" for="contact_no">
                            Phone Number
                        </label>
                        <input type="number " class="form-control text user_profile_fields box_shadow " id="contact_no"
                            name="contact_no" value="<?php echo $user_info["contact_no"] ?>" required>
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="alternate_no">
                            Alternate Number
                        </label>
                        <input type="number " class="form-control text user_profile_fields box_shadow "
                            id="alternate_no" name="alternate_no" value="<?php echo $user_info["alternate_no"] ?>">
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="email_id">
                            Email-Id
                        </label>
                        <input type="email" class="form-control text user_profile_fields box_shadow" id="email_id"
                            name="email_id" value="<?php echo $user_info["email_id"] ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="address">
                            Address:
                        </label>
                        <textarea class="form-control mx-auto no_resize user_profile_fields box_shadow " placeholder=""
                            id="address" name="address" rows="5"><?php echo $user_info["address"] ?></textarea>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col-md-3 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt" for="landmark">
                            Land Mark
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" id="landmark" name="landmark"
                            value="<?php echo $user_info["landmark"] ?>" required>
                    </div>
                    <div class="col-md-3 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="postal_code">
                            Postal Code
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" id="postal_code" name="postal_code"
                            value="<?php echo $user_info["postal_code"] ?>" required>
                    </div>
                    <div class="col-md-3  px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="state">
                            State
                        </label>
                        <select id="state" name="state" class="form-control text user_profile_fields box_shadow"
                            required>
                            <option value="  " selected disabled>
                                <?php echo $user_info["state"] ?>
                            </option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>

                    </div>
                    <div class="col-md-3 px-5 pb-3">
                        <label class="px-3 user_profile_txt" for="country">
                            Country
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" id="country" name="country"
                            value="<?php echo $user_info["country"] ?>" disabled>
                    </div>
                </div>
                <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                    <button type="submit" class="btn btn-warning fw-bold update_btn box_shadow "
                        name="update_user_contact_&_add_details" id="update_user_contact_&_add_details"><i
                            class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update
                        contact & address</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade pt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row text-center">
                <div class="col-md-12 px-3 py-3 mx-auto d-grid ">
                    <label class="px-3 user_profile_txt" for="n_password">
                        New Password
                    </label>
                    <input type="password"
                        class="form-control text-center user_profile_fields box_shadow mx-auto d-grid reset_pass_fields"
                        id="n_password" name="n_password" required>
                </div>
                <div class="col-md-12  px-3 py-3 mx-auto d-grid">
                    <label class="px-3 user_profile_txt" for="c_password">
                        Confirm Password
                    </label>
                    <input type="password"
                        class="form-control text-center user_profile_fields box_shadow reset_pass_fields mx-auto d-grid"
                        id="c_password" name="c_password" required>
                </div>
            </div>
            <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                <button type="button" class="btn btn-success  fw-bold update_btn box_shadow"><i
                        class="fa-solid fa-arrow-rotate-left fa-lg px-2" style="color: #000000;"></i>Change
                    Password</button>
            </div>
        </div>
    </div>
</div>






<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>