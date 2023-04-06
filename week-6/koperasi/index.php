<?php
include_once('db_koneksi.php');
include_once('Models/Product.php');
include_once('Models/ProductCategory.php');
include_once('Models/Vendor.php');
include_once('Models/Customer.php');
include_once('Models/Card.php');
include_once('Models/Purchase.php');
include_once('Models/Payment.php');
include_once('Models/Order.php');
include_once('navbar.php');
include_once('sidebar.php');

$page = $_REQUEST['page'];
if (!empty($page)) {
	include_once $page . '.php';
} else {
	include_once 'home.php';
}


include_once('footer.php');

?>
