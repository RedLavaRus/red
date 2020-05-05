<?php
class ServerOnline
{
    public static function add($online){

        $server_time = time();
        //echo $server_time;
        $xx=0;
        while($xx != 9)
        {
            if (!isset($online["$xx"][4])) 
            {
                $online["$xx"][4] = 0;
            }
            $xx++;
        }
        $total = $online[0][4]+$online[1][4]+$online[2][4]+$online[3][4]+$online[4][4]+$online[5][4]+$online[6][4]+$online[7][4]+$online[8][4];
        $sth1 = DB::pdo()->prepare("INSERT INTO `serversOnlines` SET 
        `dataAdd` = ?, 
        `server1` = ?,
        `server2` = ?,
        `server3` = ?,
        `server4` = ?,
        `server5` = ?,
        `server6` = ?,
        `server7` = ?,
        `server8` = ?,
        `server9` = ?,
        `totalOnline` = ?"
        );
        $sth1->execute(array($server_time,$online[0][4],$online[1][4],$online[2][4],$online[3][4],$online[4][4],$online[5][4],$online[6][4],$online[7][4],$online[8][4],$total));
    }

}
?>