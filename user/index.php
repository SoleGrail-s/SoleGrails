<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<body class="roboto_font user_profile_body" >
        <div class="container ">
            <div class="card m-5" style="min-height: 120px; border-radius: 30px;">
                <div class="row">
                    <div class="col-md-4 position-relative">
                        <h2 class="position-absolute top-50 start-50 translate-middle fw-bold">Hi,Customer Name</h2>
                    </div>
                    <div class="col-md-4 position-relative">
                        
                        <p class="position-absolute top-50 start-50 translate-middle fw-bold">Your Orders</p>
                        <p class="position-absolute top-50 start-50 translate-middle fw-bold">10</p>
                    </div>
                    <div class="col-md-4 position-relative">
                        <p class="position-absolute top-50 start-50 translate-middle fw-bold">Your SoleMates</p>
                        <p>25</p>
                    </div>
                </div>
            </div>
            <!-- tab contents 
             -->


              <!-- tabs contents -->
             <div class="card register_card mb-5">
                <ul class="nav nav-tabs nav_tabs">
                    <li class="nav-item pt-2 ps-2" >
                      <a class="nav-link active fw-bold tab_title" data-bs-toggle="tab" href="#" >Details</a>
                    </li>
                    <li class="nav-item pt-2 " >
                      <a class="nav-link   fw-bold tab_title" data-bs-toggle="tab" href="#menu1">Contact & Address</a>
                    </li>
                    <li class="nav-item pt-2 pe-2">
                      <a class="nav-link fw-bold tab_title" data-bs-toggle="tab" href="#menu2" >Reset Password</a>
                    </li>
                    
                  </ul>
                  
                  <!-- Tab panes -->
                  <div class="tab-content " >
                    <div class="tab-pane container active  pt-4" id="home">
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
                                    <input type="text" class="form-control text user_profile_fields box_shadow " >
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
                                    <input type="date " class="form-control text user_profile_fields box_shadow " style="max-width: fit-content;" required>
                                </div>
                                <div class="col-6 pe-5 pb-3">
                                    <label class="px-3 user_profile_txt">
                                        Gender
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow " style="max-width: fit-content;" required>
                                </div>
                                
                            </div>
                            <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                                <button type="button" class="btn btn-warning fw-bold update_btn box_shadow " ><i class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update Profile</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="tab-pane container  fade pt-4" id="menu1">
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
                                    <input type="number" class="form-control text user_profile_fields box_shadow" >
                                </div>
                                <div class="col-md-4 px-5 pb-3">
                                    <label class="px-3 user_profile_txt">
                                        Email-Id
                                    </label>
                                    <input type="email" class="form-control text user_profile_fields box_shadow"  required>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col">
                                    <label for="">
                                        Address
                                    </label>
                                    <textarea class="no_resize user_profile_fields box_shadow" name="" id="" stylend-0></textarea>
                                </div> -->
                                <div class="col px-5 pb-3">
                                    <label  class="px-3 user_profile_txt">
                                        Address:
                                    </label>
                                    <textarea class="form-control mx-auto no_resize user_profile_fields box_shadow " placeholder="" id="floatingTextarea" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-md-3 px-5 pb-3 ">
                                    <label class="px-3 user_profile_txt" >
                                        Land Mark
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                </div>
                                <div class="col-md-3 px-5 pb-3">
                                    <label class="px-3 user_profile_txt">
                                        Postal Code
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                </div>
                                <div class="col-md-3  px-5 pb-3">
                                    <label class="px-3 user_profile_txt">
                                        State 
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                    
                                </div>
                                <div class="col-md-3 px-5 pb-3">
                                    <label class="px-3 user_profile_txt">
                                        Country 
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" placeholder="Bharat" disabled>
                                </div>
                                <!-- <div class="col ">
                                    <label >
                                        Gender
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                </div>
                                <div class="col  ">
                                    <label >
                                        Date of Birth 
                                    </label>
                                    <input type="date " class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                </div>
                                <div class="col ">
                                    <label >
                                        Gender
                                    </label>
                                    <input type="text" class="form-control text user_profile_fields box_shadow" style="max-width: fit-content;" required>
                                </div> -->
                            </div>
                            <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                                <button type="button" class="btn  fw-bold update_btn box_shadow" ><i class="fa-regular fa-circle-check fa-lg px-1" style="color: #000000;"></i>Update Profile</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="tab-pane container fade pt-4" id="menu2">
                        <div class="row text-center">
                            <div class="col-md-12 px-3 py-3 mx-auto d-grid ">
                                <label class="px-3 user_profile_txt">
                                    New Password
                                </label>
                                <input type="password" class="form-control text-center user_profile_fields box_shadow mx-auto d-grid reset_pass_fields"  required>
                            </div>
                            <div class="col-md-12  px-3 py-3 mx-auto d-grid">
                                <label class="px-3 user_profile_txt">
                                    Confirm Password 
                                </label>
                                <input type="password" class="form-control text-center user_profile_fields box_shadow reset_pass_fields mx-auto d-grid"  required>
                            </div>
                        </div>
                        <div class="mx-auto d-grid py-5" style="max-width: fit-content;">
                            <button type="button" class="btn  fw-bold update_btn box_shadow" ><i class="fa-solid fa-arrow-rotate-left fa-lg px-2" style="color: #000000;"></i>Reset Password</button>
                        </div>
                    </div>
                  </div>
             </div>
        </div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php");
?>