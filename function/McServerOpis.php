<?php
    //$keysPage; адрес страницы DB::pdo()

    //$keysPage = "ANARHIYA";
    $server_pdo_dd = DB::pdo()->prepare("SELECT * FROM `server_info` where serverName = ?  limit 1");
    $server_pdo_dd->execute(array($keysPage));
    $server_array_dd = $server_pdo_dd->fetch(PDO::FETCH_ASSOC);

    if($server_array_dd['id'] >= 1)
    {
        
        $servres_opis_info_dd_r=
        '
        <div class="opis_serv_s1" id="server">
        <div class="opis_serv_h1" id="opis">Сервер: '.$server_array_dd['serverName'].'</div><br>
        <hr>
        <p>'.$server_array_dd['opisanie'].'</p>
        <br><br><hr>
        <div class="opis_serv_tabl">
            <div class="opis_serv_tabl_el"><div class="opis_serv_tabl_el_h2">Открытие сервера:</div><div class="opis_serv_tabl_el_text">'.$server_array_dd['open'].'</div></div>
            <div class="opis_serv_tabl_el"><div class="opis_serv_tabl_el_h2">Последний вайп:</div><div class="opis_serv_tabl_el_text">'.$server_array_dd['lustVape'].'</div></div>
            <div class="opis_serv_tabl_el"><div class="opis_serv_tabl_el_h2">Следующий вайп:</div><div class="opis_serv_tabl_el_text">'.$server_array_dd['nextVape'].'</div></div>
            <div class="opis_serv_tabl_el"><div class="opis_serv_tabl_el_h2">Версия:</div><div class="opis_serv_tabl_el_text">'.$server_array_dd['mods'].'</div></div>
        </div>
        <div class="opis_serv_tabl_el1"><div class="opis_serv_tabl_el_h2">Список модов</div><div class="opis_serv_tabl_el_text1">'.$server_array_dd['version'].'</div></div>
        </div>'
        ;
    }
    else
    {
        
        unset($server_array_dd);
        Show::way('e404','layouterror');
        exit;
    }
    
?>