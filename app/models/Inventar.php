<?php
class Inventar
{

    public static function ShowServerItem($server = 1)
    {
        $user_id = $_SESSION['id'];

        $sth = DB::pdo()->prepare("SELECT * FROM `invent` where 
        ((user_id = ?) and (`server` = ?))   ");
        $y=0;
        $sth->execute(array($user_id,$server));
        while($array = $sth->fetch(PDO::FETCH_ASSOC))
        {
            if($array['data_udaleniya'] == null)
            {
                

                $sth1 = DB::pdo()->prepare("SELECT * FROM `id_items` where id = ?   ");

                $sth1->execute(array($array['pred_id']));
                $array1 = $sth1->fetch(PDO::FETCH_ASSOC);

                $arr_items[$y]['id_item_inventar'] = $array['id'];
                $arr_items[$y]['collich'] = $array['collich'];
                $arr_items[$y]['gl_id'] = $array['pred_id'];
                $arr_items[$y]['gl_name'] = $array1['name'];
                $arr_items[$y]['gl_nameRu'] = $array1['nameRu'];
                $arr_items[$y]['rar'] = $array1['rar'];
                $tttrrr = 's'.$server;
                $arr_items[$y]['id_Rcom'] = $array1[$tttrrr];
                $y++;
            }

        }

        
        return $arr_items;
        
    }
    public static function ShowItem($id_item)
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `invent` where id=? limit 1");
        
        $sth->execute(array($id_item));
       $array = $sth->fetch(PDO::FETCH_ASSOC);
       return $array;
    }
    public static function ShowItemID($id_item)
    {
        $sth = DB::pdo()->prepare("SELECT * FROM `id_items` where id=? limit 1");
        
        $sth->execute(array($id_item));
       $array = $sth->fetch(PDO::FETCH_ASSOC);
       return $array;
    }

    public static function removeItem($id_item,$coll)
    {
        $sth = DB::pdo()->prepare("UPDATE `invent` SET collich = collich - ? WHERE id = ?");
        
        $sth->execute(array($coll,$id_item));
      
       return true;
    }

}

?>