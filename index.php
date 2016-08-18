<?php
 ini_set('display_errors', 0);
if(!isset($_SESSION))
	session_start();
	$user=$_SESSION["user"];
	$title="Assignment website kinh doanh máy tính xách tay";
?> 
<?php include "connect.php"; include "function.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php
echo $title;
?></title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/menu.css" />
<script language="JavaScript" type="text/JavaScript" src="js/quanly.js"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="ajax.js"></script>
<script language="JavaScript" type="text/JavaScript" src="Scripts/avim.js"></script>
</head>

<body onload="kt()">

<div id="container">
	<div id="header">
	  <?php include "include/header.php";?>
  </div>
    <div id="menu-ngang">      
	 <?php include "include/menu-top.php"; ?>   
    </div>
    <br clear="all" />
      
    <div id="main" style="margin-top:0px;">
    	<div id="content-left">
        <?php include "include/menu-left-or.php";?>        

        
        </div>
        
        <div id="content-right">
        <?php
        if(isset($_SESSION["success"])){
            include "controller/login_success.php";
        }
        else
            include "controller/login.php";
        ?>
        <div style="height:5px"></div>
        <?php include "include/timkiem.php"; ?>		
        <div style="height:5px"></div>
        <?php include "include/menu-giohang.php"; ?>	
        <div style="height:5px"></div> 
        <?php include "view/hotro.php"; ?> 
  
                   	         	  
        </div>
        	
        <div id="content">
		<?php
		$file="include/content.php";
		if(isset($_REQUEST["b"]))
		{
			$b=$_REQUEST["b"];
			if($b=="gioithieu")
				$file="view/gioithieu.php";
			if($b=="lienhe")
				$file="include/lienhe.php";				
			if($b=="huongdanmuahang")
				$file="include/huongdanmuahang.php";
			if($b=="ct")
				$file="view/chitiet.php";
			if($b=="ctm")
				$file="include/chitiet-menu.php";	
			if($b=="nsp")
				$file="view/nhomsp.php";
			if($b=="lsp")
				$file="view/loaisp.php";
			if($b=="tk")
				$file="controller/result.php";
			if($b=="dk")
				$file="controller/register.php";
			if($b=="cpw")
				$file="include/change-pw.php";
			if($b=="showcart")
				$file="contrller/showcart.php";
			if($b=="gh")
				$file="view/giohang.php";				
			if($b=="pay")
				$file="include/thanhtoan.php";	
			if($b=="listcart")
				$file="controller/cart.php";
			if($b=="m")
				$file="include/noidung-menu.php";
			if($b=="tintuc")
				$file="include/tintuc.php";						
			if($b=="ttcn")
				$file="view/thongtincanhan.php";					
			if($b=="change")
				$file="include/change.php";									
			if($b=="pwr")
				$file="include/create-pass.php";
		}
		include "$file";
		
		?>
        </div>
    </div>
</div>
<div id="footer">
<?php include "include/footer.php"; ?>   
</div>
</body>
</html>