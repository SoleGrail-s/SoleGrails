<?php
	$page_title = "View Customer";
    $display_navbar_flag = false;
	require_once($_SERVER["DOCUMENT_ROOT"]."/includes/init.php");
?>
<div class="container-fluid mt-5">
        <!-- <nav aria-label="breadcrumb lora_font">
            <ol class="breadcrumb">
              <li class="breadcrumb-item "><a href="#" >Home</a></li>
              <li class="breadcrumb-item " aria-current="page">Customers</li>
            </ol> 
        </nav>
        
        <div class="justify-content-md-end">
            <div >
                <input type="text" class="input" placeholder="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div> -->
        <div class="justify-content-center mx-auto d-grid my-3">
          <h1 class="lora_font fw-bold" style=" text-decoration: underline solid #D87300 5px; border-bottom: 8px;">Customers</h1>
        </div>
        <div >
            <table class="table ">
                <thead>
                  <tr >
                    <th>Sr. No.</th>
                    <th>Customer Id</th>
                    <th>Name</th>
                    <th>Phone nunmber</th>
                    <th>Alternate Number</th>
                    <th>Email-Id</th>
                    <th>State</th>
                    <th>Details</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($users = get_user_list_from_users()):?>
                <?php 
                    $srno =1;
                    foreach($users as $user):
                ?>
                  <tr class="align-middle gx-5" >
                    <td><?php echo $srno?></td>
                    <td><?php echo $user["user_id"]?></td>
                    <td><?php echo $user["f_name"]," ",$user["l_name"]?></td>
                    <td><?php echo $user["contact_no"]?></td>
                    <td><?php echo $user["alternate_no"]?></td>
                    <td><?php echo $user["email_id"]?></td>
                    <td><?php echo $user["state"]?></td>
                    <td ><i class="fa-solid fa-eye fa-lg view_details" ></i></td>
                    <td><i class="fa-solid fa-trash-can fa-lg delete_item"></i></td>
                  </tr>
                </tbody>
                <?php 
                    $srno +=1;
                    endforeach
                ?>
                <?php endif;?>
                </tbody>
              </table>
        </div>
    </div>
<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php")
?>