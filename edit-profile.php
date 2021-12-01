<?php include("header.php"); ?>

    <!-- HOT COLLECTIONS ALL START HERE -->
    <div class="hot_all_collections py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="container"> 
            <div class="row align-item-center justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                    <div class="create_heading pb-4">
                        <h2 class="ttext-white text_gradient">Edit Profle </h2>
                        <span>You can set preferred display name, create your branded profile URL and manage other personal settings</span>
                    </div> 
                </div>
            </div>
            <div class="row"> 
                <div class="col-lg-8 col-12 m-auto">
                    <div class="col-area">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                 <div class="edit_profile">
                                    <div class="display_name py-2">
                                        <div class="form-group">
                                            <label>Display Name</label>
                                            <input type="text" class="form-control" id="" placeholder="Enter your display name">
                                          </div>
                                    </div>
                                    <div class="custom_url py-2">
                                        <div class="form-group">
                                            <label>Custom URL</label>
                                            <input type="text" class="form-control" id="" placeholder="https://RaribleCopy.com / enter your custom url">
                                          </div>
                                    </div>
                                    <div class="bio_url py-2">
                                        <div class="form-group">
                                            <label>Bio</label>
                                            <input type="text" class="form-control" id="" placeholder="Tell about yourself in a few words">
                                          </div>
                                    </div>
                                    <div class="twitter_username py-2">
                                        <div class="form-group">
                                            <label>Twitter Username</label> <br>
                                            <small class="text-muted">Link your Twitter account to gain more trust on the marketplace </small>
                                        
                                            <input type="text" class="form-control" id="" placeholder="@ enter your name in twitter">
                                        </div>
                                    </div>
                                    <div class="twitter_username py-2">
                                        <div class="form-group">
                                            <label>Personal site or portfolio </label> 
                                            <input type="text" class="form-control" id="" placeholder="htpps://">
                                        </div>
                                    </div>
                                    <div class="email_username py-2">
                                        <div class="form-group">
                                            <label>Email </label>  <br>
                                            <small class="text-muted">Your email for marketplace notifications </small>
                                            <input type="email" class="form-control" id="" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="Verification_verify">
                                        <div class="d-md-flex d-block align-items-center justify-content-between">
                                            <h6>Verification  </h6> 
                                            <Button class="btn connect_wa_llets">Get verified</Button>
                                        </div>
                                        <small class="text-muted">Proceed with verification process to get more visibility and gain trust on Rarible Copy Marketplace. Please allow up to several weeks for the process.
                                        </small>
                                    </div>
                                    <div class="py-3">
                                        <Button class="btn connect_wa_llets w-100">Update Profile</Button>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 order-xl-0 order-lg-0 order-first">
                                <div class="preview-section"> 
                                    <div class="preview-box"> 
                                        <div class="choosen_img text-center" id="img">
                                            <img src="./assets/img/521712miss1.jpg" id="preview" class="rounded-pill" style="width: 130px !important;height: 130px !important;">
                                        </div>
                                        
                                        <span class="text-muted">We recommend an image of at least 400x400. Gifs work too.</span>
                                        <div class="upload_here- m-auto"> 
                                            <input type="file" name="file" id="tokenImage" style="display: none;" class="file w-100" required="" accept="image/*">
                                            <div class="w-100 my-3">
                                                <div class="input-group-append">
                                                    <button type="button" class="browse connect_wa_llets w-100">Choose file...</button>
                                                </div>
                                             </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   <!-- EXPLORE SECTION END HERE  -->
   <div class="container-fluid px-3">
    <hr>
</div>
<!-- FOOTER SECTION START HERE -->
 
<script>
    $(function () {
         $('[data-toggle="tooltip"]').tooltip()
    });

 
    $(document).on("click", ".browse", function () {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);

        var reader = new FileReader();
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
            document.getElementById("preview1").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    
    document.getElementById('checkbox').addEventListener('change',(e)=>{
        e.target.checked? $('#submit').attr("disabled", false):$('#submit').attr("disabled", true);  
    });
</script>

<script>
    $(document).ready(function() {
      $("#customSwitch2").click(function() {
        $("#input_open").toggle();
      });
    });
    $(document).ready(function() {
      $("#customSwitch3").click(function() {
        $("#input_open3").toggle();
      });
    });
    $(document).ready(function() {
      $("#customSwitchUnlock").click(function() {
        $("#input_Unlock").toggle();
      });
    });
    $(document).ready(function() {
      $("#advanced_btn").click(function() {
        $("#hide_btn").toggle();
      });
    });
    $(document).ready(function() {
      $("#advanced_btn2").click(function() {
        $("#hide_btn2").toggle();
      });
    });
    $(document).ready(function() {
      $("#advanced_btn3").click(function() {
        $("#hide_btn3").toggle();
      });
    });
</script>
 

<?php include("footer.php"); ?>