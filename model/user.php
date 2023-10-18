<?php
function checkuser($user,$pass){
    global $db;
    $query='SELECT * FROM tbl_user WHERE user = :user AND pass = :pass';
    $statement = $db->prepare($query);
    $statement->bindValue(':user', $user);
    $statement->bindValue(':pass', $pass);
    $statement->execute();  
    $kq = $statement->fetchAll();
    $statement->closeCursor();  
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
}
function getuserinfo($user,$pass){
    global $db;
    $query='SELECT * FROM tbl_user WHERE user = :user AND pass = :pass';
    echo $query;
    $statement = $db->prepare($query);
    $statement->execute();  
    $kq = $statement->fetchAll();
    $statement->closeCursor(); 
    return $kq;
}


?>