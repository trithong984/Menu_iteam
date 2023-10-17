<?php
require('model/database.php');
require('model/product_db.php');
require('model/category_db.php');
$categories = get_categories(); 
$allproduct = get_all_product();
require('view/header.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'list_products') {
    $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
    $product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);

    if ($category_id === NULL || $category_id === FALSE) {
        $products = $allproduct; 
        $category_name = "Tất cả sản phẩm";
    } else {
        $categories = get_categories();
        $category_name = get_category_name($category_id);
        $products = get_products_by_category($category_id);
    }
    require('product_list.php');
    // if (!empty($products)) {
    //     foreach ($products as $product) {
    //         $code = $product['productCode'];
    //         $name = $product['productName'];
    //         $list_price = $product['listPrice'];
    //         $image_filename = 'images/' . $code . '.png';
    //         $image_alt = 'Image: ' . $code . '.png';
    //     }
    // }
}else if ($action == 'view_product') {
    $product_id = filter_input(INPUT_GET, 'product_id', 
            FILTER_VALIDATE_INT);   
    if ($product_id == NULL || $product_id == FALSE) {
        $error = 'Missing or incorrect product id.';
    } else {
        $categories = get_categories();
        $product = get_product($product_id);
        $code = $product['productCode'];
        $name = $product['productName'];
        $id = $product['productID'];
        $list_price = $product['listPrice'];
        $image_filename = '../images/' . $code . '.png';
        $image_alt = 'Image: ' . $code . '.png';
        include('product_view.php');
    }
}
require('view/footer.php');
?>