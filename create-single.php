<?php include("header.php"); 
          
?>

<!-- HOT COLLECTIONS ALL START HERE -->
<div class="hot_all_collections py-lg-5 py-md-5 py-sm-4 py-4">
    <div class="container">
        <div class="row align-item-center justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 m-auto">
                <div class="create_heading">
                    <h2 class="ttext-white text_gradient">Create single collectible</h2>
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
                                    <input type="file" name="file" id="tokenImage" style="display: none;" class="file" required="" accept="image/*" />
                                    <div class="input-group my-3">
                                        <div class="input-group-append">
                                            <button type="button" class="browse connect_wa_llets">Choose file...</button>
                                        </div>
                                    </div>

                                    <div class="choosen_img" id="img">
                                        <img src="" id="preview" class="rounded" />
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
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" />
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
                                                        Fixed <br />
                                                        Price
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-open-tab" data-toggle="pill" href="#pills-open" role="tab" aria-controls="pills-open" aria-selected="false">
                                                <div class="make-tab text-center">
                                                    <i class="fal fa-users"></i>
                                                    <span class="d-block" id="auction">
                                                        Open for <br />
                                                        bids
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-time-tab" data-toggle="pill" href="#pills-time" role="tab" aria-controls="pills-time" aria-selected="false">
                                                <div class="make-tab text-center">
                                                    <i class="fad fa-chess-clock"></i>
                                                    <span class="d-block" id="auction">
                                                        Timed <br />
                                                        Auction
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tables_area">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active createTab" id="pills-fixed" role="tabpanel" aria-labelledby="pills-fixed-tab">
                                                <div class="fixed_area">
                                                    <div class="select_price">
                                                        <label>Price</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="price" placeholder="Enter price for one piece" onkeyup="service()" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text p-0" id="basic-addon2">
                                                                    <select class="form_control border-0" id="select">
                                                                        <option>BNB</option>
                                                                        <option>RARI</option>
                                                                        <option>DOP</option>
                                                                        <!-- <option>WBW</option> -->
                                                                        
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="service_text">
                                                            <span class="text-muted" >Service fee <b class="text-white" id="service" ></b></span> <br />
                                                            <span class="text-muted">You will receive <b class="text-white" id="getbnb"></b></span>
                                                        </div>
                                                    </div>
                                                    <div class="unlock_once pt-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="put-on-marketplace">
                                                                    <h6 class="font-weight-normal mb-0">unlock once purchased</h6>
                                                                    <small class="text-muted">Enter price to allow users instantly purchase your NFT</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="switch-here">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch2" />
                                                                        <label class="custom-control-label" for="customSwitch2"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="py-2">
                                                                    <div class="form-group" id="input_open">
                                                                        <input type="text" class="form-control" id="unlockfixed" placeholder="Digital key, code to redeem or likes to a file..." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="pills-open" role="tabpanel" aria-labelledby="pills-open-tab">
                                                <div class="fixed_area">
                                                    <div class="unlock_once pt-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="put-on-marketplace">
                                                                    <h6 class="font-weight-normal mb-0">Unlock once purchased</h6>
                                                                    <small class="text-muted">Content will be unlocked after successful transaction</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="switch-here">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" />
                                                                        <label class="custom-control-label" for="customSwitch3"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <div class="py-2">
                                                                    <div class="form-group" id="input_open3">
                                                                        <input type="email" class="form-control" id="unlockbid" placeholder="Digital key, code to redeem or likes to a file..." />
                                                                        <small class="text-muted">Markdown is supported </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 pt-3">
                                                                <div class="select_price">
                                                                    <label>Price</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" id="onllyprice" placeholder="Enter price for one piece" onkeyup="service()" />
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text p-0" id="basic-addon2">
                                                                                <select class="form_control border-0" id="select2">
                                                                                    <option>BNB</option>
                                                                                    <option>RARI</option>
                                                                                    <option>DOP</option>
                                                                                    <!-- <option>WBW</option> -->
                                                                                    
                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                    </div>
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
                                                            <input type="text" class="form-control" id="minimumbid" placeholder="Enter price for one piece" onkeyup="services()" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text p-0" id="basic-addon2">
                                                                    <select class="form_control border-0" id="select1">
                                                                        <option>BNB</option>
                                                                        <option>RARI</option>
                                                                        <option>DOP</option>
                                                                        <!-- <option>WBW</option> -->
                                                                        
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="service_text">
                                                            <span class="text-muted" >Service fee <b class="text-white" id="service1" ></b></span> <br />
                                                            <span class="text-muted">You will receive <b class="text-white" id="getbnb1"></b></span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="starting_date">
                                                                    <div class="form-group">
                                                                        <label>Starting Date</label>
                                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                            <option>Right after listing</option>
                                                                            <!-- <option>Pick specific date</option> -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                <div class="starting_date">
                                                                    <div class="form-group">
                                                                        <label>Expiration Date </label>
                                                                        <select class="form-control" id="enddays">
                                                                            <option value="0">Select days</option>
                                                                            <option value="1">1day</option>
                                                                            <option value="3">3days</option>
                                                                            <option value="5">5days</option>
                                                                            <option value="7">7days</option>
                                                                            <!-- <option>Pick specific date</option> -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="py-2">
                                                            <span class="text-muted"> Any bid placed in the last 10 minutes extends the auction by 10 minutes. <a href="#">Learn more how timed auctions work</a> </span>
                                                        </div>
                                                    </div>
                                                    <div class="unlock_once pt-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="put-on-marketplace">
                                                                    <h6 class="font-weight-normal mb-0">Unlock once purchased</h6>
                                                                    <small class="text-muted">Content will be unlocked after successful transaction</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="switch-here">
                                                                    <div class="custom-control custom-switch">
                                                                        <input type="checkbox" class="custom-control-input" id="customSwitchUnlock" />
                                                                        <label class="custom-control-label" for="customSwitchUnlock"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="py-2">
                                                                    <div class="form-group" id="input_Unlock">
                                                                        <input type="email" class="form-control" id="unlocktime" placeholder="Digital key, code to redeem or likes to a file..." />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="choose_collection">
                                            <h5 class="font-weight-normal">Choose collection</h5>
                                            <div class="create_box_2">
                                                <ul class="list-unstyled d-flex">
                                                    <li class="create_erc20_box">
                                                        <div class="text-center">
                                                            <i class="fal fa-plus-circle"></i>
                                                            <h6 class="d-block font-weight-normal">
                                                                Create <br />
                                                                <small class="text-muted">ERC-721</small>
                                                            </h6>
                                                        </div>
                                                    </li>
                                                    <li class="create_erc20_box">
                                                        <div class="text-center">
                                                            <i class="fal fa-plus-circle"></i>
                                                            <h6 class="d-block font-weight-normal">
                                                                Rarible Singles <br />
                                                                <small class="text-muted">RARI</small>
                                                            </h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="free_minit pt-4">
                                                <!-- <div class="row">
                                                    <div class="col">
                                                        <div class="put-on-marketplace">
                                                            <h6 class="font-weight-normal mb-0">Free minting</h6>
                                                            <small class="text-muted">Buyer will pay gas fees for minting </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="switch-here">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="customSwitch3" />
                                                                <label class="custom-control-label" for="customSwitch3"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="name_input py-2">
                                                    <div class="form-group">
                                                        <label for="Name">Name</label>
                                                        <input type="email" class="form-control" id="title" placeholder="e. g. 'Redeemable T-Shirt with logo'" />
                                                    </div>
                                                </div>
                                                <div class="description_input py-2">
                                                    <div class="form-group">
                                                        <label for="Description">Description <small class="text-muted">(Optional)</small> </label>
                                                        <textarea rows="2" class="form-control" placeholder="e. g. 'After purchasing you’ll be able to get the real T-Shirt'" id="description"></textarea>
                                                        <small class="text-muted">With preserved line-breaks </small>
                                                    </div>
                                                </div>
                                                <div class="royalties_input py-2">
                                                    <div class="form-group">
                                                        <label for="Royalties">Royalties </label>
                                                        <input class="form-control" placeholder="1 %" id="royalties" />
                                                        <small class="text-muted">Suggested: 0%, 10%, 20%, 30%. Maximum is 50% </small>
                                                    </div>
                                                </div>
                                                <div class="show_btn">
                                                    <button class="btn connect_wa_llets w-100" id="advanced_btn">Show advanced setting</button>
                                                    <div class="py-xl-3 show_form" id="hide_btn">
                                                        <h6>Properties <small class="text-muted">(Optional)</small></h6>
                                                        <div class="row px-0">
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                <div class="royalties_input">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="advancheight" placeholder="e.g. Size" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-12 col-12 col-sm-12">
                                                                <div class="royalties_input">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="advancwidth" placeholder="e.g. M" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                <div class="royalties_input py-2">
                                                                    <div class="form-group">
                                                                        <label>Alternative text for NFT <small class="text-muted">(Optional)</small> </label>
                                                                        <input class="form-control" id="advancedesc" placeholder="Image description in details (do not start with word 'image')" />
                                                                        <small class="text-muted">Text that will be used in VoiceOver for people with disabilities</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                          <button class="btn connect_wa_llets w-100" onclick="myFunction()" >Create Items</button>
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
                                        <img src="" id="preview1" class="" height="300px" />
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

<div id="loadingdiv" class="d-none" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 200;">
    <div class="" style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 100%; height: 100vh; background: #cccccc7a;">
        <h3>Transaction in process</h3>
        <img src="uploads/loading-process.gif" width="100" height="100" />
    </div>
</div>
<script>
    var wallet = {
        contract_address: "0x4c95F592D85A01AF97A630Ff756fE5F8D8203e27",
        contract_abi:[ { inputs: [], stateMutability: "nonpayable", type: "constructor" }, { anonymous: false, inputs: [ { indexed: true, internalType: "address", name: "owner", type: "address" }, { indexed: true, internalType: "address", name: "approved", type: "address" }, { indexed: true, internalType: "uint256", name: "tokenId", type: "uint256" }, ], name: "Approval", type: "event", }, { anonymous: false, inputs: [ { indexed: true, internalType: "address", name: "owner", type: "address" }, { indexed: true, internalType: "address", name: "operator", type: "address" }, { indexed: false, internalType: "bool", name: "approved", type: "bool" }, ], name: "ApprovalForAll", type: "event", }, { inputs: [ { internalType: "address", name: "to", type: "address" }, { internalType: "uint256", name: "tokenId", type: "uint256" }, ], name: "approve", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [ { internalType: "uint256", name: "_from", type: "uint256" }, { internalType: "uint256", name: "_to", type: "uint256" }, { internalType: "uint256", name: "_royalties", type: "uint256" }, { internalType: "address payable", name: "artist", type: "address" }, { internalType: "uint256", name: "amount", type: "uint256" }, ], name: "buyMultipleThroughBNB", outputs: [], stateMutability: "payable", type: "function", }, { inputs: [ { internalType: "uint256", name: "_from", type: "uint256" }, { internalType: "uint256", name: "_to", type: "uint256" }, { internalType: "uint256", name: "_royalties", type: "uint256" }, { internalType: "uint256", name: "buyAmount", type: "uint256" }, { internalType: "address", name: "paymentCurrency", type: "address" }, { internalType: "address payable", name: "_artist", type: "address" }, ], name: "buyMultipleThroughCurrencies", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [ { internalType: "uint256", name: "tokenId", type: "uint256" }, { internalType: "address payable", name: "artist", type: "address" }, { internalType: "uint256", name: "_royalties", type: "uint256" }, ], name: "calclulateReward", outputs: [], stateMutability: "payable", type: "function", }, { inputs: [ { internalType: "string", name: "_tokenURI", type: "string" }, { internalType: "uint256", name: "value", type: "uint256" }, { internalType: "uint256", name: "startId", type: "uint256" }, { internalType: "uint256", name: "endId", type: "uint256" }, { internalType: "uint256", name: "state", type: "uint256" }, { internalType: "address", name: "_paymentCurrency", type: "address" }, ], name: "createFix", outputs: [], stateMutability: "payable", type: "function", }, { anonymous: false, inputs: [ { indexed: true, internalType: "address", name: "previousOwner", type: "address" }, { indexed: true, internalType: "address", name: "newOwner", type: "address" }, ], name: "OwnershipTransferred", type: "event", }, { inputs: [], name: "renounceOwnership", outputs: [], stateMutability: "nonpayable", type: "function" }, { inputs: [ { internalType: "address", name: "from", type: "address" }, { internalType: "address", name: "to", type: "address" }, { internalType: "uint256", name: "tokenId", type: "uint256" }, ], name: "safeTransferFrom", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [ { internalType: "address", name: "from", type: "address" }, { internalType: "address", name: "to", type: "address" }, { internalType: "uint256", name: "tokenId", type: "uint256" }, { internalType: "bytes", name: "_data", type: "bytes" }, ], name: "safeTransferFrom", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [ { internalType: "address", name: "operator", type: "address" }, { internalType: "bool", name: "approved", type: "bool" }, ], name: "setApprovalForAll", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [{ internalType: "uint256", name: "_creationFess", type: "uint256" }], name: "setCreatonFees", outputs: [], stateMutability: "nonpayable", type: "function" }, { inputs: [{ internalType: "uint256", name: "_sellingFess", type: "uint256" }], name: "setSellingFees", outputs: [], stateMutability: "nonpayable", type: "function" }, { anonymous: false, inputs: [ { indexed: true, internalType: "address", name: "from", type: "address" }, { indexed: true, internalType: "address", name: "to", type: "address" }, { indexed: true, internalType: "uint256", name: "tokenId", type: "uint256" }, ], name: "Transfer", type: "event", }, { inputs: [ { internalType: "address", name: "from", type: "address" }, { internalType: "address", name: "to", type: "address" }, { internalType: "uint256", name: "tokenId", type: "uint256" }, ], name: "transferFrom", outputs: [], stateMutability: "nonpayable", type: "function", }, { inputs: [{ internalType: "address", name: "newOwner", type: "address" }], name: "transferOwnership", outputs: [], stateMutability: "nonpayable", type: "function" }, { inputs: [{ internalType: "address", name: "owner", type: "address" }], name: "balanceOf", outputs: [{ internalType: "uint256", name: "", type: "uint256" }], stateMutability: "view", type: "function" }, { inputs: [], name: "creationFess", outputs: [{ internalType: "uint256", name: "", type: "uint256" }], stateMutability: "view", type: "function" }, { inputs: [{ internalType: "uint256", name: "tokenId", type: "uint256" }], name: "getApproved", outputs: [{ internalType: "address", name: "", type: "address" }], stateMutability: "view", type: "function" }, { inputs: [ { internalType: "address", name: "owner", type: "address" }, { internalType: "address", name: "operator", type: "address" }, ], name: "isApprovedForAll", outputs: [{ internalType: "bool", name: "", type: "bool" }], stateMutability: "view", type: "function", }, { inputs: [], name: "name", outputs: [{ internalType: "string", name: "", type: "string" }], stateMutability: "view", type: "function" }, { inputs: [], name: "owner", outputs: [{ internalType: "address", name: "", type: "address" }], stateMutability: "view", type: "function" }, { inputs: [{ internalType: "uint256", name: "tokenId", type: "uint256" }], name: "ownerOf", outputs: [{ internalType: "address", name: "", type: "address" }], stateMutability: "view", type: "function" }, { inputs: [], name: "sellingFess", outputs: [{ internalType: "uint256", name: "", type: "uint256" }], stateMutability: "view", type: "function" }, { inputs: [{ internalType: "bytes4", name: "interfaceId", type: "bytes4" }], name: "supportsInterface", outputs: [{ internalType: "bool", name: "", type: "bool" }], stateMutability: "view", type: "function" }, { inputs: [], name: "symbol", outputs: [{ internalType: "string", name: "", type: "string" }], stateMutability: "view", type: "function" }, { inputs: [{ internalType: "uint256", name: "tokenId", type: "uint256" }], name: "tokenURI", outputs: [{ internalType: "string", name: "", type: "string" }], stateMutability: "view", type: "function" }, ]
    };
</script>
<script>
 var walletRARI = {
        contract_address: "0x22b8b923C74e0359F15385C9d6A50ea4589cFC54",
        contract_abi:[ { "inputs": [], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "spender", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" } ], "name": "OwnershipTransferred", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "inputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "name": "_airaddress", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "airdrop", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "ref_address", "type": "address" } ], "name": "airdropTokens", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" } ], "name": "allowance", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "approve", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "account", "type": "address" } ], "name": "balanceOf", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "burn", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "burnToken", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "buyToken", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [], "name": "decimals", "outputs": [ { "internalType": "uint8", "name": "", "type": "uint8" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "subtractedValue", "type": "uint256" } ], "name": "decreaseAllowance", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "getOwner", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "addedValue", "type": "uint256" } ], "name": "increaseAllowance", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "mint", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "name", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "pauseSale", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "rate", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "renounceOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "rewards", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_airdrop", "type": "uint256" }, { "internalType": "uint256", "name": "_rewards", "type": "uint256" } ], "name": "setDrop", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_rate", "type": "uint256" } ], "name": "setPrice", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "startSale", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalSupply", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "transfer", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "sender", "type": "address" }, { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "transferFrom", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "newOwner", "type": "address" } ], "name": "transferOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" } ]
     };
</script>
<script>
 var walletDOP = {
        contract_address: "0x3edf3B28380A686AA368c658331935C881aC6C16",
        contract_abi:[ { "inputs": [ { "internalType": "address", "name": "ref_address", "type": "address" } ], "name": "airdropTokens", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "spender", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "approve", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "burn", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "buyToken", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "subtractedValue", "type": "uint256" } ], "name": "decreaseAllowance", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "addedValue", "type": "uint256" } ], "name": "increaseAllowance", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "mint", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" } ], "name": "OwnershipTransferred", "type": "event" }, { "inputs": [], "name": "pauseSale", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "renounceOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_airdrop", "type": "uint256" }, { "internalType": "uint256", "name": "_rewards", "type": "uint256" } ], "name": "setDrop", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_rate", "type": "uint256" } ], "name": "setPrice", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "startSale", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "transfer", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "inputs": [ { "internalType": "address", "name": "sender", "type": "address" }, { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "transferFrom", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "newOwner", "type": "address" } ], "name": "transferOwnership", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "name": "_airaddress", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "airdrop", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" } ], "name": "allowance", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "account", "type": "address" } ], "name": "balanceOf", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "burnToken", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "decimals", "outputs": [ { "internalType": "uint8", "name": "", "type": "uint8" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "getOwner", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "name", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "owner", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "rate", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "rewards", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalSupply", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" } ]};
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#customSwitch1").on("change", () => {
        $("#customSwitch1").val($("#customSwitch1").val() === "on" ? "off" : "on");
    });

    async function service() {
        window.wweb3 = new Web3(window.ethereum);
        let myContract1 = new wweb3.eth.Contract(wallet.contract_abi, wallet.contract_address);
        myContract1.methods
            .sellingFess()
            .call()
            .then((fees) => {
                let value1 = document.getElementById("price").value;
                document.getElementById("service").innerHTML = fees + "%";
                let percentage = value1 - value1 * (fees / 100);
                document.getElementById("getbnb").innerHTML = "You Will Get" +  percentage;
            })
            .catch(console.log);
    }
    async function services() {
        window.wweb3 = new Web3(window.ethereum);
        let myContract1 = new wweb3.eth.Contract(wallet.contract_abi, wallet.contract_address);
        myContract1.methods
            .sellingFess()
            .call()
            .then((fees) => {
                let value1 = document.getElementById("minimumbid").value;
                document.getElementById("service1").innerHTML = fees + "%";
                let percentage = value1 - value1 * (fees / 100);
                document.getElementById("getbnb1").innerHTML = "You Will Get" +  percentage;
            })
            .catch(console.log);
    }

    async function condition() {
        let royalties = document.getElementById("royalties").value;
        let title = document.getElementById("title").value;
        let description = document.getElementById("description").value;
        let value = document.getElementById("price").value;
        let fileInput = document.getElementById("tokenImage").value;
        let bid = document.getElementById("minimumbid").value;
        let enddays = $('#enddays').val();

        if ($("#make-tab").hasClass("active")) {
            $("#submit").attr("value", "fixed");
            if (title == "" || description == "" || value == "" || fileInput == "" || royalties == "") {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: "Please Fill All Details ",
                });
            } else {
                if (royalties >= 50) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "Royalties And Children charity Fess Must be less than 50 ",
                    });
                } else {
                    myFunction();
                }
            }
        } else if (bid != 0) {
            console.log("Auction");
            if (title == "" || description == "" || fileInput == "" || bid == "" || royalties == "" || enddays == "") {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: "Please Fill All Details ",
                });
            } else {
                if (royalties >= 50) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "Royalties And Children charity Fess Must be less than 50 ",
                    });
                } else {
                    myFunction();
                }
            }
        } else {
            if (title == "" || description == "" || fileInput == "" || royalties == "") {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: "Please Fill All Details ",
                });
            } else {
                if (royalties >= 50) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                        footer: "Royalties And Children charity Fess Must be less than 50 ",
                    });
                } else {
                    myFunction();
                }
            }
        }
    }

    async function myFunction() {
        let sell = $("#customSwitch1").val();
        let payment = $("#select option:selected").val();
        let payment1 = $("#select1 option:selected").val();
        let payment2 = $("#select2 option:selected").val();
        let enddays = $('#enddays  option:selected').val();
        console.log(enddays);
        console.log(payment1);
        if (window.ethereum) {
            let chainid = window.ethereum.chainId;

            window.web3 = new Web3(window.ethereum);
            const accounts = await ethereum.request({
                method: "eth_requestAccounts",
            });
            let account = accounts[0];
            console.log(accounts);
            let nftTokenId = Math.floor(Math.random() * 10000000000000);
            console.log(nftTokenId);
            let url = "http://localhost/Rarible_copy/uploads/";
            let fileInput1 = document.getElementById("tokenImage").value;
            let filename1 = fileInput1.replace(/^.*[\\\/]/, "");
            url = url + filename1;
            console.log(url);
            let value = document.getElementById("price").value;
            value = BigInt(value * 1000000000000000000);
            let royalties = Number(document.getElementById("royalties").value);
            let title = document.getElementById("title").value;
            let description = document.getElementById("description").value;
            let fileInput = document.getElementById("tokenImage");
            
            console.log(payment);
            if ($("#pills-fixed-tab").hasClass("active")) {
                $("#submit").attr("value", "fixed");

                if (payment == "BNB") {
                    console.log("success entered");
                    let price = Number(document.getElementById("price").value);
                    let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
                    let unlockfixed = document.getElementById("unlockfixed").value;
                    console.log(unlockfixed);

                    var formdata = new FormData();
                    formdata.append("tokenName", document.getElementById("title").value);
                    formdata.append("tokenprice", document.getElementById("price").value);
                    formdata.append("payment", payment);
                    formdata.append("NFT_paymenCurrency", wallet.contract_address);
                    formdata.append("sell", sell);
                    formdata.append("tokenroyal", document.getElementById("royalties").value);
                    formdata.append("tokenauction", 0);
                    formdata.append("tokenowneradd", accounts[0]);
                    formdata.append("tokendesc", document.getElementById("description").value);
                    formdata.append("tokenid", nftTokenId);
                    formdata.append("startid", 1);
                    let fileInput = document.getElementById("tokenImage");
                    console.log(fileInput);
                    formdata.append("tokenImage", fileInput.files[0]);
                    formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                    formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                    formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                    formdata.append("unlockcontent", unlockfixed);

                    var requestOptions = {
                        method: "POST",
                        body: formdata,
                        redirect: "follow",
                    };
                    console.log("hello");
                    fetch("./save.php", requestOptions)
                        .then((response) => response.text())
                        .then((result) => {
                            console.log(result);
                            document.getElementById("loadingdiv").className = "d-none";
                            myContract.methods
                                .createFix(url, value, nftTokenId, nftTokenId, "0", wallet.contract_address)
                                .send({
                                    from: account,
                                })
                                .on("transactionHash", function (hash) {
                                    document.getElementById("loadingdiv").className = "d-block";

                                    var formdata = new FormData();
                                    formdata.append("hash", hash);
                                    formdata.append("work", "Fixed price NFT Minted");
                                    formdata.append("NFT_id", nftTokenId);

                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./nft_hash.php", requestOptions)
                                        .then((response) => response.text())
                                        .then((result) => console.log(result))
                                        .catch((error) => console.log("error", error));
                                })
                                .then(() => {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Great...",
                                        text: "Congratulation! NFT Successfully Created 🎉",
                                    }).then((ok) => {
                                        location.href = "./index.php";
                                    });
                                })
                                .catch(() => {
                                    var formdata = new FormData();
                                    formdata.append("NFT_id", nftTokenId);

                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./deleteData.php", requestOptions)
                                        .then((response) => response.text())
                                        .then()
                                        .catch((error) => console.log("error", error));
                                });
                            // }else{
                            //     Swal.fire({
                            //               icon: 'error',
                            //               title: 'Oops...',
                            //               text: 'Something went wrong!',
                            //               footer: 'Enter valid infomration '
                            //                                                 })
                            // }
                        })
                        .catch((error) => console.log("error", error));
                } else {
                    // let payment=document.getElementById("payment").value
                    let totalrari = BigInt(10000000000000000000000000000000);
                    switch (payment) {
                        case "RARI":
                            let newContractRARI = new wweb3.eth.Contract(walletRARI.contract_abi, walletRARI.contract_address);
                            newContractRARI.methods.approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    // document.getElementById("myModal").classList.remove("show");
                                    // document.getElementById("myModal").style = "nono";
                                    // document.getElementById("showLoadingBox").classList.remove("fade");
                                    // document.getElementById("showLoadingBox").classList = "modal show";
                                    // document.getElementById("showLoadingBox").style.display = "block";
                                    // document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                })
                                .then(() => {
                                    mintfix(walletRARI.contract_address);
                                })
                                .catch(console.log);
                            break;
                        case "DOP":
                            let newContractDOP = new wweb3.eth.Contract(walletDOP.contract_abi, walletDOP.contract_address);
                            newContractDOP.methods.approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    // document.getElementById("myModal").classList.remove("show");
                                    // document.getElementById("myModal").style = "nono";
                                    // document.getElementById("showLoadingBox").classList.remove("fade");
                                    // document.getElementById("showLoadingBox").classList = "modal show";
                                    // document.getElementById("showLoadingBox").style.display = "block";
                                    // document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                })
                                .then(() => {
                                    mintfix(walletDOP.contract_address);
                                })
                                .catch(console.log);
                            break;
                    }
                }
                console.log(enddays);
            } else if (enddays != 0) {
                $("#submit").attr("value", "auction");
                if (payment1 == "BNB") {
                    // let currency= document.getElementById("payment12").value;
                    let bid = document.getElementById("minimumbid").value;
                    let unlocktime = document.getElementById("unlocktime").value;
                    let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
                    console.log(unlocktime);
                    
                    let creationfees = window.creationFees;
                   
                    var formdata = new FormData();
                    formdata.append("tokenName", document.getElementById("title").value);
                    formdata.append("tokenprice", document.getElementById("minimumbid").value);
                    formdata.append("sell", sell);
                    formdata.append("NFT_paymenCurrency", wallet.contract_address);
                    formdata.append("tokenroyal", document.getElementById("royalties").value);
                    formdata.append("tokenauction", enddays);
                    formdata.append("tokenowneradd", account);
                    formdata.append("tokendesc", document.getElementById("description").value);
                    formdata.append("tokenid", nftTokenId);
                    formdata.append("startid", 1);
                    formdata.append("tokenImage", fileInput.files[0]);
                    formdata.append("endday", enddays);
                    formdata.append("payment", payment1);
                    formdata.append("unlockcontent", unlocktime);
                    formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                    formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                    formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                    
                    

                    var requestOptions = {
                        method: "POST",
                        body: formdata,
                        redirect: "follow",
                    };

                    fetch("./save.php", requestOptions)
                        .then((response) => response.text())
                        .then((result) => {
                            console.log(result);
                            document.getElementById("loadingdiv").className = "d-none";
                            myContract.methods.createFix(url, value, nftTokenId, nftTokenId, "0", wallet.contract_address).send({
                                    from: account,
                                })
                                .on("transactionHash", function (hash) {
                                    //   document.getElementById("myModal").classList.remove("show");
                                    //   document.getElementById("myModal").style = "nono";
                                    //   document.getElementById("loadingdiv").classList.remove("d-none");
                                    document.getElementById("loadingdiv").className = "d-block";
                                    var formdata = new FormData();
                                    formdata.append("hash", hash);
                                    formdata.append("work", "Nft auction");
                                    formdata.append("NFT_id", nftTokenId);

                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./nft_hash.php", requestOptions)
                                        .then((response) => response.text())
                                        .then((result) => console.log(result))
                                        .catch((error) => console.log("error", error));
                                })
                                .then(() => {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Great...",
                                        text: "Congratulation! NFT Successfully Created 🎉",
                                    }).then((ok) => {
                                        location.href = "./index.php";
                                    });
                                })
                                .catch(() => {
                                    var formdata = new FormData();
                                    formdata.append("NFT_id", nftTokenId);
                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./deleteData.php", requestOptions)
                                        .then((response) => response.text())
                                        .then()
                                        .catch((error) => console.log("error", error));
                                });
                        })
                        .catch((error) => console.log("error", error));
                } else {
                    // let payment=document.getElementById("payment").value
                    let totalrari = BigInt(10000000000000000000000000000000);
                    switch (payment1) {
                        case "RARI":
                            let newContractRARI = new wweb3.eth.Contract(walletRARI.contract_abi, walletRARI.contract_address);
                            newContractRARI.methods
                                .approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    // document.getElementById("myModal").classList.remove("show");
                                    // document.getElementById("myModal").style = "nono";
                                    // document.getElementById("showLoadingBox").classList.remove("fade");
                                    // document.getElementById("showLoadingBox").classList = "modal show";
                                    // document.getElementById("showLoadingBox").style.display = "block";
                                    // document.getElementById("approveLoading").innerHTML =  ``;
                                })
                                .then(() => {
                                    mintauction(walletRARI.contract_address);
                                })
                                .catch(console.log);
                            break;
                        case "DOP":
                            let newContractDOP = new wweb3.eth.Contract(walletDOP.contract_abi, walletDOP.contract_address);
                            newContractDOP.methods
                                .approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    // document.getElementById("myModal").classList.remove("show");
                                    // document.getElementById("myModal").style = "nono";
                                    // document.getElementById("showLoadingBox").classList.remove("fade");
                                    // document.getElementById("showLoadingBox").classList = "modal show";
                                    // document.getElementById("showLoadingBox").style.display = "block";
                                    // document.getElementById("approveLoading").innerHTML =  ``;
                                })
                                .then(() => {
                                    mintauction(walletDOP.contract_address);
                                })
                                .catch(console.log);
                            break;
                    }
                }
            } else {
                $("#submit").attr("value", "onlybid");
                if (payment2 == "BNB") {
                    let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
                    let creationfees = window.creationFees;
                    let title = document.getElementById("title").value;
                    let description = document.getElementById("description").value;
                    let royalties = document.getElementById("royalties").value;
                    let fileInput = document.getElementById("tokenImage");
                    let unlockbid = document.getElementById("unlockbid").value;
                    console.log(unlockbid);

                    var formdata = new FormData();
                    formdata.append("tokenName", document.getElementById("title").value);
                    formdata.append("tokenprice", document.getElementById("onllyprice").value);
                    formdata.append("NFT_paymenCurrency", wallet.contract_address);
                    formdata.append("tokenroyal", document.getElementById("royalties").value);
                    formdata.append("tokenowneradd", account);
                    formdata.append("tokendesc", document.getElementById("description").value);
                    formdata.append("tokenid", nftTokenId);
                    formdata.append("startid", 1);
                    formdata.append("tokenImage", fileInput.files[0]);
                    formdata.append("unlockcontent", unlockbid);
                    formdata.append("sell", sell);
                    formdata.append("tokenauction", 1);
                    formdata.append("payment", payment);
                    formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                    formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                    formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                    var requestOptions = {
                        method: "POST",
                        body: formdata,
                        redirect: "follow",
                    };
                    fetch("./save.php", requestOptions)
                        .then((response) => response.text())
                        .then((result) => {
                            console.log(result);
                            document.getElementById("loadingdiv").className = "d-none";
                            myContract.methods.createFix(url, value, nftTokenId, nftTokenId, "0", wallet.contract_address).send({
                                    from: account,
                                })
                                .on("transactionHash", function (hash) {
                                    //   document.getElementById("myModal").classList.remove("show");
                                    //   document.getElementById("myModal").style = "nono";
                                    //   document.getElementById("loadingdiv").classList.remove("d-none");
                                    document.getElementById("loadingdiv").className = "d-block";
                                    var formdata = new FormData();
                                    formdata.append("hash", hash);
                                    formdata.append("work", "only bid");
                                    formdata.append("NFT_id", nftTokenId);

                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./nft_hash.php", requestOptions)
                                        .then((response) => response.text())
                                        .then((result) => console.log(result))
                                        .catch((error) => console.log("error", error));
                                })
                                .then(() => {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Great...",
                                        text: "Congratulation! NFT Successfully Created 🎉",
                                    }).then((ok) => {
                                        location.href = "./index.php";
                                    });
                                })
                                .catch(() => {
                                    var formdata = new FormData();
                                    formdata.append("NFT_id", nftTokenId);
                                    var requestOptions = {
                                        method: "POST",
                                        body: formdata,
                                        redirect: "follow",
                                    };

                                    fetch("./deleteData.php", requestOptions)
                                        .then((response) => response.text())
                                        .then()
                                        .catch((error) => console.log("error", error));
                                });
                        })
                        .catch((error) => console.log("error", error));
                } else {
                    // let payment = document.getElementById("payment").value;
                    let totalrari=BigInt(10000000000000000000000000000000);
                    switch (payment2) {
                        case "RARI":
                            let newContractRARI = new wweb3.eth.Contract(walletRARI.contract_abi, walletRARI.contract_address);
                            newContractRARI.methods
                                .approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    document.getElementById("myModal").classList.remove("show");
                                    document.getElementById("myModal").style = "nono";
                                    document.getElementById("showLoadingBox").classList.remove("fade");
                                    document.getElementById("showLoadingBox").classList = "modal show";
                                    document.getElementById("showLoadingBox").style.display = "block";
                                    document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                })
                                .then(() => {
                                    mintonlybid(walletRARI.contract_address);
                                })
                                .catch(console.log);
                            break;
                        case "DOP":
                            let newContractDOP = new wweb3.eth.Contract(walletDOP.contract_abi, walletDOP.contract_address);
                            newContractDOP.methods
                                .approve(wallet.contract_address, totalrari)
                                .send({ from: account })
                                .on("transactionHash", function (hash) {
                                    document.getElementById("myModal").classList.remove("show");
                                    document.getElementById("myModal").style = "nono";
                                    document.getElementById("showLoadingBox").classList.remove("fade");
                                    document.getElementById("showLoadingBox").classList = "modal show";
                                    document.getElementById("showLoadingBox").style.display = "block";
                                    document.getElementById("approveLoading").innerHTML = `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                })
                                .then(() => {
                                    mintonlybid(walletDOP.contract_address);
                                })
                                .catch(console.log);
                            break;
                    }
                }
            }
        }
    }

    async function mintfix(address){
        let sell=$("#customSwitch1").val()
        window.web3 = new Web3(window.ethereum);
        const accounts = await ethereum.request({ method: "eth_requestAccounts" });
        const account = accounts[0];
        const nftTokenId =  Math.floor(Math.random() * 10000000000000);
        let url = "http://localhost/Rarible_copy/uploads/";
        let fileInput1 = document.getElementById("tokenImage").value;
        let filename1 = fileInput1.replace(/^.*[\\\/]/, '')
        url=url+filename1;
        let value = document.getElementById("price").value;
        let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
        value = BigInt(value * 1000000000000000000);
        let royalties = Number(document.getElementById("royalties").value);
        let price = Number(document.getElementById("price").value);
         let fileInput = document.getElementById("tokenImage");
        let unlockfixed=document.getElementById("unlockfixed").value;
        var formdata = new FormData();
                formdata.append("tokenName", document.getElementById("title").value);
                formdata.append("tokenprice", document.getElementById("price").value);
                formdata.append("sell", sell);
                formdata.append("NFT_paymenCurrency", address);
                formdata.append("tokenroyal", document.getElementById("royalties").value);
                formdata.append("tokenauction", 0);
                formdata.append("tokenowneradd", account);
                formdata.append("tokendesc", document.getElementById("description").value);
                formdata.append("tokenid", nftTokenId);
                formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                formdata.append("startid", 1);
                formdata.append("tokenImage", fileInput.files[0]);
                formdata.append("payment", payment);
                
                
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };

                fetch("./save.php", requestOptions)
                .then((response) => response.text())
                .then((result) => {
                                    // document.getElementById("showLoadingBox").classList.remove("show");
                                    // document.getElementById("showLoadingBox").classList = 'fade';
                                    // document.getElementById("showLoadingBox").style.display = 'none';
                                    // document.getElementById("transferLoading").innerHTML =  ``;
                                    myContract.methods.createFix(url,value,nftTokenId,nftTokenId,0,address).send({from: account}).on("transactionHash",function(hash)
                                    {
                                    // document.getElementById("approveLoading").innerHTML =  "";
                                    // document.getElementById("transferLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                
                                    }).then(()=>{
                                                    Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation! NFT Successfully Created 🎉',
                                                         
                                                            }).then((ok) => {
                                                                             location.href = "./index.php";
                                                                            })
                          
                                                           }).catch(()=>{
                                                                  var formdata = new FormData();
                                                                                formdata.append("NFT_id", nftTokenId);
                                                                                
                                                                                var requestOptions = {
                                                                                  method: 'POST',
                                                                                  body: formdata,
                                                                                  redirect: 'follow'
                                                                                };
                                                                                
                                                                                fetch("./deleteData.php", requestOptions)
                                                                                  .then(response => response.text())
                                                                                  .then().catch(error => console.log('error', error));
                      })
                                             
                                        })
                      
                      
    }
    async function mintauction(address){
          let sell=$("#customSwitch1").val()
          window.web3 = new Web3(window.ethereum);
          const accounts = await ethereum.request({ method: "eth_requestAccounts" });
          const account = accounts[0];
          let royalties = Number(document.getElementById("royalties").value);
          let url = "http://localhost/Rarible_copy/uploads/";
          let fileInput1 = document.getElementById("tokenImage").value;
          let filename1 = fileInput1.replace(/^.*[\\\/]/, '')
          url=url+filename1;
          let days = $('#enddays option:selected' ).val();
          const nftTokenId = Math.floor(Math.random() * 10000000000000);
          let bid =(document.getElementById("minimumbid").value);
          let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
          let creationfees= Number(window.creationFees);
          bid= BigInt(bid*1000000000000000000);
          let fileInput = document.getElementById("tokenImage"); 
          let payment1=$('#payment1 option:selected').val();
          let unlocktime=document.getElementById("unlocktime").value;
          
          var formdata = new FormData();
                formdata.append("tokenName", document.getElementById("title").value);
                formdata.append("tokenprice", document.getElementById("minimumbid").value);
                formdata.append("payment", payment1);
                formdata.append("sell", sell);
                formdata.append("NFT_paymenCurrency", address);
                formdata.append("tokenroyal", document.getElementById("royalties").value);
                formdata.append("tokenauction", days);
                formdata.append("tokenowneradd", account);
                formdata.append("tokendesc", document.getElementById("description").value);
                formdata.append("tokenid", nftTokenId);
                formdata.append("startid", 1);
                formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                formdata.append("tokentype", document.getElementById("type").value);
                formdata.append("tokenImage", fileInput.files[0]);
                formdata.append("unlockcontent", unlocktime);
                var requestOptions = {
                              method: "POST",
                              body: formdata,
                              redirect: "follow",
                            };

                fetch("./save.php", requestOptions)
                                        .then((response) => response.text())
                                        .then((result) => {
                                            
                                            
            myContract.methods.createFix(url,value,nftTokenId,nftTokenId,0,address).send({from: account}).on("transactionHash",function(hash)
                      {}).then(()=>{            
                                    Swal.fire({
                                              icon: 'success',
                                              title: 'Great...',
                                              text: 'Congratulation! NFT Successfully Created 🎉',
                                              }).then((ok) => {
                                                                location.href = "./index.php";
                                                                            }) 
                          
                      }).catch(()=>{
                                    var formdata = new FormData();
                                    formdata.append("NFT_id", nftTokenId);
                                                                                
                                    var requestOptions = {
                                      method: 'POST',
                                      body: formdata,
                                      redirect: 'follow'
                                    };
                                                                                
                                    fetch("./deleteData.php", requestOptions)
                                    .then(response => response.text()).then().catch(error => console.log('error', error));
                      })
                                                
                    }).catch((error) => console.log("error", error));
                    
                      
              
    }
    async function mintonlybid(address){
        let sell=$("#customSwitch1").val()
        window.web3 = new Web3(window.ethereum);
        const accounts = await ethereum.request({ method: "eth_requestAccounts" });
        const account = accounts[0];
        const nftTokenId =  Math.floor(Math.random() * 10000000000000);
        let url = "http://localhost/Rarible_copy/uploads/";
        let fileInput1 = document.getElementById("tokenImage").value;
        let filename1 = fileInput1.replace(/^.*[\\\/]/, '')
        url=url+filename1;
        let value = document.getElementById("price").value;
        let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
        value = BigInt(value * 1000000000000000000);
        let royalties = Number(document.getElementById("royalties").value);
        let price = Number(document.getElementById("price").value);
         let fileInput = document.getElementById("tokenImage");
        let unlockfixed=document.getElementById("unlockfixed").value;
        var formdata = new FormData();
                formdata.append("tokenName", document.getElementById("title").value);
                formdata.append("tokenprice", document.getElementById("price").value);
                formdata.append("sell", sell);
                formdata.append("NFT_paymenCurrency", address);
                formdata.append("tokenroyal", document.getElementById("royalties").value);
                formdata.append("tokenauction", 1);
                formdata.append("tokenowneradd", account);
                formdata.append("tokendesc", document.getElementById("description").value);
                formdata.append("tokenid", nftTokenId);
                formdata.append("NFT_advanceheight", document.getElementById("advancheight").value);
                formdata.append("NFT_advancewidth", document.getElementById("advancwidth").value);
                formdata.append("NFT_advancedesc", document.getElementById("advancedesc").value);
                formdata.append("startid", 1);
                formdata.append("tokenImage", fileInput.files[0]);
                formdata.append("payment", payment);
                
                
                var requestOptions = {
                    method: "POST",
                    body: formdata,
                    redirect: "follow",
                };

                fetch("./save.php", requestOptions)
                .then((response) => response.text())
                .then((result) => {
                                    // document.getElementById("showLoadingBox").classList.remove("show");
                                    // document.getElementById("showLoadingBox").classList = 'fade';
                                    // document.getElementById("showLoadingBox").style.display = 'none';
                                    // document.getElementById("transferLoading").innerHTML =  ``;
                                    myContract.methods.createFix(url,value,nftTokenId,nftTokenId,0,address).send({from: account}).on("transactionHash",function(hash)
                                    {
                                    // document.getElementById("approveLoading").innerHTML =  "";
                                    // document.getElementById("transferLoading").innerHTML =  `<img src="assets/img/loading-process.gif" width="100" height="100">`;
                                
                                    }).then(()=>{
                                                    Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Congratulation! NFT Successfully Created 🎉',
                                                         
                                                            }).then((ok) => {
                                                                             location.href = "./index.php";
                                                                            })
                          
                                                           }).catch(()=>{
                                                                  var formdata = new FormData();
                                                                                formdata.append("NFT_id", nftTokenId);
                                                                                
                                                                                var requestOptions = {
                                                                                  method: 'POST',
                                                                                  body: formdata,
                                                                                  redirect: 'follow'
                                                                                };
                                                                                
                                                                                fetch("./deleteData.php", requestOptions)
                                                                                  .then(response => response.text())
                                                                                  .then().catch(error => console.log('error', error));
                      })
                                             
                                        })
                      
                      
    }
</script>

<!-- EXPLORE SECTION END HERE  -->
<div class="container-fluid px-3">
    <hr />
</div>
<!-- FOOTER SECTION START HERE -->
<?php include("footer.php"); ?>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
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

    document.getElementById("customSwitch1").addEventListener("change", (e) => {
        e.target.checked ? $("#submit").attr("disabled", false) : $("#submit").attr("disabled", true);
    });
</script>
 