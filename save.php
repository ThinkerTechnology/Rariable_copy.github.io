<?php
include "config.php";

$nftname = $_POST['tokenName'];
$nftprice = $_POST['tokenprice'];
$sell = $_POST['sell'];
$royalties = $_POST['tokenroyal'];
$tokenauction = $_POST['tokenauction'];
$owneradd = $_POST['tokenowneradd'];
$tokenid = $_POST['tokenid'];
$desc=$_POST['tokendesc'];
$nftpayment=$_POST['payment'];
$paymentcurrency=$_POST['NFT_paymenCurrency'];
$advanceheight=$_POST['NFT_advanceheight'];
$advancewidth=$_POST['NFT_advancewidth'];
$advancedesc=$_POST['NFT_advancedesc'];
$start_id=$_POST['startid'];
$unlockcontent=$_POST['unlockcontent'];
// $user="SELECT * FROM nft_user where Useraddress='$owneradd'";
// $data = mysqli_query($con , $user);
// $result=mysqli_fetch_assoc($data);
$username= "demoname";
$useradd="ghjkhkj";
$userimage='';

$valid_extension = array('jpeg','jpg','png', 'gif','mp4','jfif');
$path = "./uploads/";

$img = $_FILES['tokenImage']['name'];
$tmp = $_FILES['tokenImage']['tmp_name'];
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

$final_image = rand(1000, 1000000) . $img;


if (in_array($ext, $valid_extension))
{

    $path = $path.strtolower($final_image);

    if (true)
    {
        move_uploaded_file($tmp, $path);
        $path = "uploads/" . strtolower($final_image);
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d h:i:s");

        if ($tokenauction == '0')
        {
            

            $NFT_auction_time = 0;
            $sql = "INSERT INTO `nft_info`(`NFT_name`, `NFT_price`, `NFT_payment`, `NFT_paymenCurrency`, `NFT_auction_time`, `Nft_auction_status`,  `NFT_resell`, `NFT_owner`, `Nft_owner_image`, `NFT_owner_address`, `NFT_creator`, `Nft_creator_image`, `NFT_creator_add`, `NFT_discription`, `NFT_id`, `NFT_image`, `NFT_type`, `NFT_time`,`NFT_advance_height`,`NFT_advance_width`,`NFT_advance-dsc`, `nft_priority`, `block`, `NFT_like`, `status`,`NFT_start_id`,`NFT_end_id`,`NFT_unlockcontent`) 
            VALUES ('$nftname','$nftprice','$nftpayment','$paymentcurrency','$NFT_auction_time','$tokenauction','$sell','$username','$userimage','$useradd','$username','$userimage','$useradd','$desc','$tokenid','$path','0','$date','$advanceheight','$advancewidth','$advancedesc','0','0','0','0','$start_id','$start_id','$unlockcontent')";
            $data = mysqli_query($con, $sql);

            if ($data)
            {

                echo "Success";
                

            }
            else
            {
                echo "failed";
            }
        }
        else
        {

            $NFT_auction_time = time() + $tokenauction * 86400;
            $sql = "INSERT INTO `nft_info`(`NFT_name`, `NFT_price`, `NFT_payment`, `NFT_paymenCurrency`, `NFT_auction_time`, `Nft_auction_status`, `NFT_resell`, `NFT_owner`, `Nft_owner_image`, `NFT_owner_address`, `NFT_creator`, `Nft_creator_image`, `NFT_creator_add`, `NFT_discription`, `NFT_id`, `NFT_image`, `NFT_type`, `NFT_time`, `NFT_advance_height`,`NFT_advance_width`,`NFT_advance-dsc`,`nft_priority`, `block`, `NFT_like`, `status`,`NFT_start_id`,`NFT_end_id`,`NFT_unlockcontent`) 
            VALUES ('$nftname','$nftprice','$nftpayment','$paymentcurrency','$NFT_auction_time','$tokenauction','$sell','$username','$userimage','$useradd','$username','$userimage','$useradd','$desc','$tokenid','$path','0','$date','$advanceheight','$advancewidth','$advancedesc','0','0','0','0','$start_id','$start_id','$unlockcontent')";
            $data = mysqli_query($con, $sql);

            if ($data)
            {
                echo "Success";
               
            }
            else
            {
                echo "failed";
            }
        }
    }
}

?>
