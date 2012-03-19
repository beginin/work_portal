<?php


class Logsmodel extends CI_Model {

   
  
function  get_current_users()
{
    $sql = "SELECT `User` FROM `ad`.`log_in_out` WHERE `Time` > DATE_ADD(NOW(), INTERVAL -60 DAY)   GROUP BY `User`";
    $query = $this->db->query($sql);
    return $query->result();
    //$row = $query->row_array();
    //return $row;
}

function get_current_users_with_comp()
{
    $sql = "SELECT `User` FROM `ad`.`log_in_out` WHERE `Time` > DATE_ADD(NOW(), INTERVAL -60 DAY)   GROUP BY `User`";
    $query = $this->db->query($sql);
    $users = $query->result();
    $arr = Array();
    $i=0;
    foreach ($users as $user)
    {
        $user=(array)$user;
        $man=$user['User'];
        $arr[$i]['User'] = $man;
        $sql  = "SELECT * FROM `ad`.`log_in_out` WHERE `User`='$man' ORDER BY `ad`.`log_in_out`.`Time`  DESC limit 5 ";
        $query = $this->db->query($sql);
        $j=0;
        foreach ($query->result_array() as $row)
        {
            
            $arr[$i]['log'][$j]['Comp']= $row['Comp'];          
            $arr[$i]['log'][$j]['Time']= $row['Time'];         
            $arr[$i]['log'][$j]['in']= $row['in'];
            $j++;
        }
        
        $i++;
    }
    return $arr;
}

function get_current_comps_with_user()
{
    $sql = "SELECT `Comp` FROM `ad`.`log_in_out` WHERE `Time` > DATE_ADD(NOW(), INTERVAL -60 DAY)   GROUP BY `Comp`";
    $query = $this->db->query($sql);
    $users = $query->result();
    $arr = Array();
    $i=0;
    foreach ($users as $user)
    {
        $user=(array)$user;
        $man=$user['Comp'];
        $arr[$i]['Comp'] = $man;
        $sql  = "SELECT * FROM `ad`.`log_in_out` WHERE `Comp`='$man' ORDER BY `ad`.`log_in_out`.`Time`  DESC limit 5 ";
        $query = $this->db->query($sql);
        $j=0;
        foreach ($query->result_array() as $row)
        {
            
            $arr[$i]['log'][$j]['User']= $row['User'];          
            $arr[$i]['log'][$j]['Time']= $row['Time'];         
            $arr[$i]['log'][$j]['in']= $row['in'];
            $j++;
        }
        
        $i++;
    }
   
    return $arr;
}

}