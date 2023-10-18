<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/database.php";
        include "../model/category_db.php";
        include "../model/product_db.php";
        include "view/header.php";

        if(isset($_GET['act'])){
            switch ($_GET['act']) {
                case 'addsp':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
                $code = filter_input(INPUT_POST, 'code');
                $name = filter_input(INPUT_POST, 'name');
                $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
                $target_dir = "../images/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                   move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    add_product($category_id, $code, $name, $price,$target_dir);
                    }
                    $categories=get_categories();
                    include "view/danhmuc.php";
                    break;
                case 'danhmuc':
                    $categories = get_categories();
                    include "view/danhmuc.php";
                    break;
                case 'adddm':
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $name = filter_input(INPUT_POST, 'name');
                        add_category($name);
                    }
                    $categories=get_categories();
                    include "view/danhmuc.php";
                    break;
                case 'deldm':
                        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
                        delete_category($category_id);
                    include "view/danhmuc.php";
                    break;
                case 'updatedmform':
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $kqone=getonedm($id);
                        $kq=get_categories();
                        include "view/updatedmform.php";
                    }
                    if(isset($_POST['id'])){
                        $id=$_POST['id'];
                        $tendm=$_POST['tendm'];
                        updatedm($id,$tendm);
                        //cần dsdm
                        $kq=getall_dm();
                        include "view/danhmuc.php";
                    }
                    
                    break;
                case 'sanpham':
                    $categories=get_categories();
                    $allproduct=get_all_product();
                    include "view/sanpham.php";
                    break;
                case 'thoat':
                    if(isset($_SESSION['role'])) unset($_SESSION['role']);
                    header('location: login.php');              
                default:
                    include "view/home.php";
                    break;
            }
        }else{
            include "view/home.php";
        }

        include "view/footer.php";
}else{
    header('location: login.php');
}

?>