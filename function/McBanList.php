<?php
$ban_list = array(
    //   array(Никнейм,Дата создание бана,забанен до,причина,'забанил',идБан, идБанившего),
    //             0           1                 2      3        4       5         6 
);
$sth = DB::pdo()->prepare("SELECT * FROM `Ban` ORDER BY id DESC LIMIT 50 ");
$sth->execute(array());
$ban_n=0;
while ($array = $sth->fetch(PDO::FETCH_ASSOC)) {
    $ban_list[$ban_n][1] = $array['created'];
    $ban_list[$ban_n][2] = $array['expires_at'];
    $ban_list[$ban_n][3] = $array['reason'];
    $ban_list[$ban_n][5] = $array['id'];
    $ban_list[$ban_n][6] = $array['source_id'];
    //print_r($array);
    //echo $array['id'];
    $sth1 = DB::pdo()->prepare("SELECT * FROM `Users_Ban` where `ban_id` = ? ");
    $sth1->execute(array($ban_list[$ban_n][5]));
    $array1 = $sth1->fetch(PDO::FETCH_ASSOC);
    $ban_list[$ban_n][5] = $array1['user_id'];
    //print_r($array1);
    $sth2 = DB::pdo()->prepare("SELECT * FROM `Users` where `id` = ? ");
    $sth2->execute(array($ban_list[$ban_n][5]));
    $array2 = $sth2->fetch(PDO::FETCH_ASSOC);
    $ban_list[$ban_n][0] = $array2['name'];

    $sth3 = DB::pdo()->prepare("SELECT * FROM `Users` where `id` = ? ");
    $sth3->execute(array($ban_list[$ban_n][6]));
    $array3 = $sth3->fetch(PDO::FETCH_ASSOC);
    if ($array3['name'] != null) 
    {
        $ban_list[$ban_n][4] = $array3['name'];
    }
    else{
        $ban_list[$ban_n][4] = "Защитник";
    }
    //print_r($array2);
    
    //echo $array2['name'].'<br>';
    $ban_n++;
}


?>