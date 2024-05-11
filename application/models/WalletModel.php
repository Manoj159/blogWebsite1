<?php
class WalletModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getWalletByUserId($user_id) {
        return $this->db->get_where('wallets', array('user_id' => $user_id))->row_array();
    }

    public function updateBalance($user_id, $amount) {
        $this->db->set('balance', $amount, FALSE);
        $this->db->where('user_id', $user_id);
        $this->db->update('wallets');
    }

    public function addMoney($user_id, $amount) {
        $this->db->set('balance', 'balance +' . $amount, FALSE);
        $this->db->where('user_id', $user_id);
        $this->db->update('wallets');
    }
}
?>
