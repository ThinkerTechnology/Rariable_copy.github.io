<?php include("header.php"); ?>

    <!-- HOT COLLECTIONS ALL START HERE -->
    <div class="hot_all_collections py-lg-5 py-md-5 py-sm-4 py-4">
        <div class="container"> 
            <div class="row align-item-center justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                    <div class="create_heading">
                        <h2 class="ttext-white text_gradient">Create multiple collectible in Ethereum </h2> 
                    </div> 
                </div>
            </div>
            <div class="row"> 
                <div class="col-lg-8 col-12 m-auto">
                    <div class="col-area">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                <div class="upload-section">
                                    <label>Upload file</label>
                                    <div class="upload_here">
                                        <p>PNG, GIF, WEBP, MP4 or MP3. Max 100mb.</p> 
                                        <input type="file" name="file" id="tokenImage" style="display: none;" class="file" required="" accept="image/*">
                                        <div class="input-group my-3">
                                            <div class="input-group-append">
                                                <button type="button" class="browse connect_wa_llets">Choose file...</button>
                                            </div>
                                         </div>
            
                                        <div class="choosen_img" id="img">
                                             <img src="" id="preview" class="rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="put-on-marketplace mt-3">
                                    <div class="row">
                                        <div class="col">
                                            <div class="put-on-marketplace">
                                                <h6 class="font-weight-normal mb-0">Put on marketplace</h6>
                                                <small class="text-muted">Enter price to allow users instantly purchase your NFT</small>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="switch-here">
                                                <div class="custom-control custom-switch">
                                                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                  <label class="custom-control-label" for="customSwitch1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="choose-tab-this mt-3">
                                        <ul class="nav nav-pills mb-3 fixed_price_box" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-fixed-tab" data-toggle="pill" href="#pills-fixed" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    <div class="make-tab text-center">
                                                        <i class="fa fa-tags"></i> 
                                                        <span class="d-block" id="fixed">
                                                            Fixed <br> Price
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-open-tab" data-toggle="pill" href="#pills-open" role="tab" aria-controls="pills-open" aria-selected="false">
                                                    <div class="make-tab text-center">
                                                        <i class="fal fa-users"></i> 
                                                        <span class="d-block" id="auction">
                                                            Open for <br> bids
                                                        </span>
                                                    </div>
                                                </a>
                                            </li> 
                                            <li class="nav-item">
                                                <a class="nav-link disabled" id="pills-time-tab" data-toggle="pill" href="#pills-time" role="tab" aria-controls="pills-time" aria-selected="false">
                                                    <div class="make-tab text-center">
                                                        <i class="fad fa-chess-clock"></i> 
                                                        <span class="d-block" id="auction">
                                                            Timed <br> Auction
                                                        </span>
                                                    </div>
                                                </a>
                                            </li> 
                                        </ul>
                                        <div class="tables_area">
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-fixed" role="tabpanel" aria-labelledby="pills-fixed-tab">
                                                    <div class="fixed_area">
                                                        <div class="select_price">
                                                            <label>Price</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Enter price for one piece">
                                                                <div class="input-group-append">
                                                                  <span class="input-group-text p-0" id="basic-addon2">
                                                                    <select class="form_control border-0" id="exampleFormControlSelect1">
                                                                        <option>ETH</option>
                                                                        <option>DAI</option>
                                                                        <option>USDC</option>
                                                                        <option>RARI</option>
                                                                        <option>BNB</option>
                                                                      </select>
                                                                  </span>
                                                                </div>
                                                            </div>
                                                            <div class="service_text">
                                                                <span class="text-muted">Service fee <b class="text-white">2.5%</b></span> <br>
                                                                <span class="text-muted">You will receive <b class="text-white">0.5%</b></span>
                                                            </div>
                                                        </div>
                                                        <div class="unlock_once pt-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="put-on-marketplace">
                                                                        <h6 class="font-weight-normal mb-0">Put on marketplace</h6>
                                                                        <small class="text-muted">Enter price to allow users instantly purchase your NFT</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="switch-here">
                                                                        <div class="custom-control custom-switch">
                                                                          <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                                          <label class="custom-control-label" for="customSwitch2"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="py-2">
                                                                        <div class="form-group" id="input_open"> 
                                                                            <input type="email" class="form-control" id="" placeholder="Digital key, code to redeem or likes to a file...">
                                                                          </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="choose_collection">
                                                            <h5 class="font-weight-normal">Choose collection </h5>
                                                            <div class="create_box_2">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Create <br>
                                                                                <small class="text-muted">ERC-721</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Rarible Singles <br>
                                                                                <small class="text-muted">RARI</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="free_minit pt-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="put-on-marketplace">
                                                                            <h6 class="font-weight-normal mb-0">Free minting</h6>
                                                                            <small class="text-muted">Buyer will pay gas fees for minting </small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="switch-here">
                                                                            <div class="custom-control custom-switch">
                                                                              <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                                              <label class="custom-control-label" for="customSwitch3"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="name_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Name">Name</label>
                                                                        <input type="email" class="form-control" id="" placeholder="e. g. 'Redeemable T-Shirt with logo'">
                                                                      </div>
                                                                </div>
                                                                <div class="description_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Description">Description <small class="text-muted">(Optional)</small>  </label>
                                                                        <textarea rows="2" class="form-control" placeholder="e. g. 'After purchasing you’ll be able to get the real T-Shirt'"></textarea>
                                                                        <small class="text-muted">With preserved line-breaks </small>
                                                                      </div>
                                                                </div>
                                                                <div class="royalties_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Royalties">Royalties </label>
                                                                        <input class="form-control" placeholder="1 %">
                                                                        <small class="text-muted">Suggested: 0%, 10%, 20%, 30%. Maximum is 50% </small>
                                                                      </div>
                                                                </div>
                                                                <div class="show_btn">
                                                                    <Button class="btn connect_wa_llets w-100" id="advanced_btn">Show advanced setting</Button>
                                                                    <div class="py-xl-3 show_form" id="hide_btn">
                                                                        <h6>Properties  <small class="text-muted">(Optional)</small> </h6>
                                                                        <div class="row px-0">
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. Size"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. M"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="royalties_input py-2">
                                                                                    <div class="form-group">
                                                                                        <label>Alternative text for NFT <small class="text-muted">(Optional)</small>  </label>
                                                                                        <input class="form-control" placeholder="Image description in details (do not start with word 'image')">
                                                                                        <small class="text-muted">Text that will be used in VoiceOver for people with disabilities</small>
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4"> 
                                                                        <Button class="btn connect_wa_llets w-100">Create Items</Button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-open" role="tabpanel" aria-labelledby="pills-open-tab">
                                                    <div class="fixed_area"> 
                                                        <div class="unlock_once pt-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="put-on-marketplace">
                                                                        <h6 class="font-weight-normal mb-0">Unlock once purchased </h6>
                                                                        <small class="text-muted">Content will be unlocked after successful transaction</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="switch-here">
                                                                        <div class="custom-control custom-switch">
                                                                          <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                                          <label class="custom-control-label" for="customSwitch3"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="py-2">
                                                                        <div class="form-group" id="input_open3"> 
                                                                            <input type="email" class="form-control" id="" placeholder="Digital key, code to redeem or likes to a file...">
                                                                            <small class="text-muted">Markdown is supported </small>
                                                                          </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="choose_collection">
                                                            <h5 class="font-weight-normal">Choose collection </h5>
                                                            <div class="create_box_2">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Create <br>
                                                                                <small class="text-muted">ERC-721</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Rarible Singles <br>
                                                                                <small class="text-muted">RARI</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="free_minit pt-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="put-on-marketplace">
                                                                            <h6 class="font-weight-normal mb-0">Free minting</h6>
                                                                            <small class="text-muted">Buyer will pay gas fees for minting </small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="switch-here">
                                                                            <div class="custom-control custom-switch">
                                                                              <input type="checkbox" class="custom-control-input" id="customSwitch03">
                                                                              <label class="custom-control-label" for="customSwitch03"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="name_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Name">Name</label>
                                                                        <input type="email" class="form-control" id="" placeholder="e. g. 'Redeemable T-Shirt with logo'">
                                                                      </div>
                                                                </div>
                                                                <div class="description_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Description">Description <small class="text-muted">(Optional)</small>  </label>
                                                                        <textarea rows="2" class="form-control" placeholder="e. g. 'After purchasing you’ll be able to get the real T-Shirt'"></textarea>
                                                                        <small class="text-muted">With preserved line-breaks </small>
                                                                      </div>
                                                                </div>
                                                                <div class="royalties_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Royalties">Royalties </label>
                                                                        <input class="form-control" placeholder="1 %">
                                                                        <small class="text-muted">Suggested: 0%, 10%, 20%, 30%. Maximum is 50% </small>
                                                                      </div>
                                                                </div>
                                                                <div class="show_btn">
                                                                    <Button class="btn connect_wa_llets w-100" id="advanced_btn2">Show advanced setting</Button>
                                                                    <div class="py-xl-3 show_form" id="hide_btn2">
                                                                        <h6>Properties  <small class="text-muted">(Optional)</small> </h6>
                                                                        <div class="row px-0">
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. Size"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. M"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="royalties_input py-2">
                                                                                    <div class="form-group">
                                                                                        <label>Alternative text for NFT <small class="text-muted">(Optional)</small>  </label>
                                                                                        <input class="form-control" placeholder="Image description in details (do not start with word 'image')">
                                                                                        <small class="text-muted">Text that will be used in VoiceOver for people with disabilities</small>
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4"> 
                                                                        <Button class="btn connect_wa_llets w-100">Create Items</Button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-time" role="tabpanel" aria-labelledby="pills-time-tab">
                                                    <div class="fixed_area">
                                                        <div class="select_price">
                                                            <label>Minimum bid </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Enter price for one piece">
                                                                <div class="input-group-append">
                                                                  <span class="input-group-text p-0" id="basic-addon2">
                                                                    <select class="form_control border-0" id="exampleFormControlSelect1">
                                                                        <option>ETH</option>
                                                                        <option>DAI</option>
                                                                        <option>USDC</option>
                                                                        <option>RARI</option>
                                                                        <option>BNB</option>
                                                                      </select> 
                                                                  </span>
                                                                </div>
                                                            </div>
                                                            <div class="row"> 
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="starting_date">
                                                                        <div class="form-group">
                                                                            <label>Starting Date</label>
                                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                                <option>Right after listing</option>
                                                                                <option>Pick specific date</option> 
                                                                            </select>
                                                                          </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="starting_date">
                                                                        <div class="form-group">
                                                                            <label>Expiration Date </label>
                                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                                <option>1day</option>
                                                                                <option>3days</option>
                                                                                <option>5days</option>
                                                                                <option>7days</option>
                                                                                <option>Pick specific date</option>
                                                                            </select>
                                                                          </div>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="py-2">
                                                                <span class="text-muted">
                                                                    Any bid placed in the last 10 minutes extends the auction by 10 minutes. <a href="#">Learn more how timed auctions work</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="unlock_once pt-4">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="put-on-marketplace">
                                                                        <h6 class="font-weight-normal mb-0">Unlock once purchased </h6>
                                                                        <small class="text-muted">Content will be unlocked after successful transaction</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="switch-here">
                                                                        <div class="custom-control custom-switch">
                                                                          <input type="checkbox" class="custom-control-input" id="customSwitchUnlock">
                                                                          <label class="custom-control-label" for="customSwitchUnlock"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="py-2">
                                                                        <div class="form-group" id="input_Unlock"> 
                                                                            <input type="email" class="form-control" id="" placeholder="Digital key, code to redeem or likes to a file...">
                                                                          </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="choose_collection">
                                                            <h5 class="font-weight-normal">Choose collection </h5>
                                                            <div class="create_box_2">
                                                                <ul class="list-unstyled d-flex">
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Create <br>
                                                                                <small class="text-muted">ERC-721</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                    <li class="create_erc20_box">
                                                                        <div class="text-center">
                                                                            <i class="fal fa-plus-circle"></i> 
                                                                            <h6 class="d-block font-weight-normal">
                                                                                Rarible Singles <br>
                                                                                <small class="text-muted">RARI</small>
                                                                            </h6>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="free_minit pt-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="put-on-marketplace">
                                                                            <h6 class="font-weight-normal mb-0">Free minting</h6>
                                                                            <small class="text-muted">Buyer will pay gas fees for minting </small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <div class="switch-here">
                                                                            <div class="custom-control custom-switch">
                                                                              <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                                              <label class="custom-control-label" for="customSwitch3"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="name_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Name">Name</label>
                                                                        <input type="email" class="form-control" id="" placeholder="e. g. 'Redeemable T-Shirt with logo'">
                                                                      </div>
                                                                </div>
                                                                <div class="description_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Description">Description <small class="text-muted">(Optional)</small>  </label>
                                                                        <textarea rows="2" class="form-control" placeholder="e. g. 'After purchasing you’ll be able to get the real T-Shirt'"></textarea>
                                                                        <small class="text-muted">With preserved line-breaks </small>
                                                                      </div>
                                                                </div>
                                                                <div class="royalties_input py-2">
                                                                    <div class="form-group">
                                                                        <label for="Royalties">Royalties </label>
                                                                        <input class="form-control" placeholder="1 %">
                                                                        <small class="text-muted">Suggested: 0%, 10%, 20%, 30%. Maximum is 50% </small>
                                                                      </div>
                                                                </div>
                                                                <div class="show_btn">
                                                                    <Button class="btn connect_wa_llets w-100" id="advanced_btn3">Show advanced setting</Button>
                                                                    <div class="py-xl-3 show_form" id="hide_btn3">
                                                                        <h6>Properties  <small class="text-muted">(Optional)</small> </h6>
                                                                        <div class="row px-0">
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. Size"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                                <div class="royalties_input">
                                                                                    <div class="form-group"> 
                                                                                        <input class="form-control" placeholder="e.g. M"> 
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                <div class="royalties_input py-2">
                                                                                    <div class="form-group">
                                                                                        <label>Alternative text for NFT <small class="text-muted">(Optional)</small>  </label>
                                                                                        <input class="form-control" placeholder="Image description in details (do not start with word 'image')">
                                                                                        <small class="text-muted">Text that will be used in VoiceOver for people with disabilities</small>
                                                                                      </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-4"> 
                                                                        <Button class="btn connect_wa_llets w-100">Create Items</Button>
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
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 order-xl-0 order-lg-0 order-first">
                                <div class="preview-section">
                                    <label>Preview</label>
                                    <div class="preview-box">
                                        <div class="upload-file-preview">
                                            <span>
                                                Upload file to preview your brand new NFT
                                            </span>
                                            <img src="" id="preview1" class="" height="300px">
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

<?php include("footer.php"); ?>
 
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
 