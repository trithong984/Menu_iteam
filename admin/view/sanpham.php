<div class="main">
    <h2>NHẬP SẢN PHẨM</h2>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select> <br> <br>
        <label>Code:</label> <br> 
        <input type="text" name="code" /> <br>  <br> 
        <label>Name:</label> <br>  
        <input type="text" name="name" /> <br> <br> 
        <label>List Price:</label> <br> 
        <input type="text" name="price" /> <br> <br> 
        <label>Hình ảnh:</label> 
        <input type="file" name="hinh" id=""> <br> <br>
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
    <?php
        if(isset($allproduct)&&(count($allproduct)>0)){
            $i=1;
            foreach ($allproduct as $product) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$product['productName'].'</td>
                        <td><img src="../images/'.$product['img'].'" width="100"></td>
                        <td>'.$product['listPrice'].'</td>
                        <td><a href="index.php?act=updatespform&id='.$product['productID'].'">Sửa</a> | <a href="index.php?act=delsp&id='.$product['productID'].'">Xóa</a></td>
                    </tr>';
                    $i++;
            }
        }
    ?>
        
    </table>
</div>