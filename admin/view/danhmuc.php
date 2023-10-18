<div class="main">
    <h2>DANH MỤC</h2>
    <form action="index.php?act=adddm" method="post">
    <input type="text" name="name" />
        <input type="submit" name="themmoi" value="Thêm mới">
    </form>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Hành động</th>
        </tr>
    <?php
        if(isset($categories)&&(count($categories)>0)){
            $i=1;
            foreach ($categories as $category) {
                echo '<tr>
                        <td>'.$category['categoryID'].'</td>
                        <td>'.$category['categoryName'].'</td>
                        <td><a href="index.php?act=updatedmform&id='.$category['categoryID'].'">
                        Sửa
                        </a> | <a href="index.php?act=deldm&id='.$category['categoryID'].'">Xóa</a></td>
                    </tr>';
            }
        }
    ?>   
    </table>
</div>