<?php
// PlanModel.php (saved in application/models directory)

class PlanModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        // Load the database library if it's not auto-loaded
        $this->load->database();
    }

    // Method to insert plan data into the database
    public function insertPlan($data) {
        // Insert data into the 'plans' table
        $this->db->insert('plans', $data);
        // Check if the insert was successful
        return $this->db->affected_rows() > 0;
    }
    public function getPlanById($plan_id) {
    return $this->db->get_where('plans', array('id' => $plan_id))->row_array();
}

    public function finalInvest($planData,$walData){
        return $planPrice = plans[plan_price];

    }
}
