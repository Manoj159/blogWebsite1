<?php 
class loginmodel extends CI_Model{
    public function register($data){
        $this->db->insert('users',$data);
    }
    public function loginuser($mnumber,$pwd){
        $q=$this->db->where(['mnumber'=>$mnumber,'pwd'=>$pwd])
                    ->get('users');

                    if ($id=$q->row()->id) {
                        return $id;
                    }else {
                        return false;
                    }
                }
            }
        ?>