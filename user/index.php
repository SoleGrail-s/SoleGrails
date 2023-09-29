<?php
$page_title = "Profile";
$display_navbar_flag = true;
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/init.php");
?>
<div class="card m-5 border-1"
    style="border-radius: 100px;  background-color: #ffd9007b; box-shadow: 5px 5px 15px #818181; border: 1px solid #D87300;">
    <div class="float-start p-3 ">
        <img src="https://th.bing.com/th/id/OIP.Sr4fxChDzgG6T-SG4zCS8wHaHa?pid=ImgDet&rs=1" class="float-start mx-auto"
            alt="..." style="width: 100px; height: 100px; border-radius: 50%; border: 3px solid #D87300;">
        <label class="ms-5 mx-auto my-4 fw-bold "
            style="vertical-align: middle ; font-family: 'Lora', sans-serif; font-size: 30px;">Welcome, Kartik
            Kunder</label>
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
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false" style="color: #000000">Reset
                Password</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="">
                <div class="row">
                    <div class="col-md-4 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt">
                            First Name
                        </label>
                        <input type="text " class="form-control text user_profile_fields box_shadow " required>
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Middle Name
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow ">
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Last Name
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow " required>
                    </div>
                </div>
                <div class="row pb">
                    <div class="col-6 ps-5 pb-3 ">
                        <label class="px-3 user_profile_txt">
                            Date of Birth
                        </label>
                        <input type="date " class="form-control text user_profile_fields box_shadow "
                            style="max-width: fit-content;" required>
                    </div>
                    <div class="col-6 pe-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Gender
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow "
                            style="max-width: fit-content;" required>
                    </div>

                </div>
                <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                    <button type="button" class="btn btn-warning fw-bold update_btn box_shadow "><i
                            class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update
                        Profile</button>
                </div>

            </form>

        </div>
        <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form action="">
                <div class="row">
                    <div class="col-md-4 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt">
                            Phone Number
                        </label>
                        <input type="number " class="form-control text user_profile_fields box_shadow " required>
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Alternate Number
                        </label>
                        <input type="number" class="form-control text user_profile_fields box_shadow">
                    </div>
                    <div class="col-md-4 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Email-Id
                        </label>
                        <input type="email" class="form-control text user_profile_fields box_shadow" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Address:
                        </label>
                        <textarea class="form-control mx-auto no_resize user_profile_fields box_shadow " placeholder=""
                            id="floatingTextarea" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="col-md-3 px-5 pb-3 ">
                        <label class="px-3 user_profile_txt">
                            Land Mark
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" required>
                    </div>
                    <div class="col-md-3 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Postal Code
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" required>
                    </div>
                    <div class="col-md-3  px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            State
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" required>

                    </div>
                    <div class="col-md-3 px-5 pb-3">
                        <label class="px-3 user_profile_txt">
                            Country
                        </label>
                        <input type="text" class="form-control text user_profile_fields box_shadow"
                            style="max-width: fit-content;" placeholder="Bharat" disabled>
                    </div>

                </div>
                <div class="mx-auto d-grid py-5" style="max-width: fit-content;">

                    <button type="button" class="btn btn-warning fw-bold update_btn box_shadow "><i
                            class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update
                        Profile</button>
                </div>

            </form>

        </div>
        <div class="tab-pane fade pt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row text-center">
                <div class="col-md-12 px-3 py-3 mx-auto d-grid ">
                    <label class="px-3 user_profile_txt">
                        New Password
                    </label>
                    <input type="password"
                        class="form-control text-center user_profile_fields box_shadow mx-auto d-grid reset_pass_fields"
                        required>
                </div>
                <div class="col-md-12  px-3 py-3 mx-auto d-grid">
                    <label class="px-3 user_profile_txt">
                        Confirm Password
                    </label>
                    <input type="password"
                        class="form-control text-center user_profile_fields box_shadow reset_pass_fields mx-auto d-grid"
                        required>
                </div>
            </div>
            <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                <button type="button" class="btn btn-success  fw-bold update_btn box_shadow"><i
                        class="fa-solid fa-arrow-rotate-left fa-lg px-2" style="color: #000000;"></i>Reset
                    Password</button>
            </div>
        </div>
    </div>
</div>






<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.php");
?>