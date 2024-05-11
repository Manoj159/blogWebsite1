<?php
// PlanModel.php (saved in application/models directory)

class PlanModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        // Database is already loaded, no need to load it again here
    }

    // Method to insert plan data into the database
    public function insertPlan($data) {
        // Insert data into the 'plans' table
        $this->db->insert('plans', $data);
        // Check if the insert was successful
        return $this->db->affected_rows() > 0;
    }

    // Method to retrieve plan by ID
    public function getPlanById($plan_id) {
        return $this->db->get_where('plans', array('plan_id' => $plan_id))->row_array();
    }

    // Method to calculate final wallet balance after investment
    public function finalInvest($planData, $walData) {
        // Access plan price from $planData array
        $planPrice = $planData['plan_price'];
        
        // Assuming $walData is an associative array containing wallet data with a 'balance' key
        $walletBalance = $walData['balance'];
        
        // Deduct plan price from wallet balance
        if ($newWalletBalance = $walletBalance - $planPrice) {
            // Return the updated wallet balance
        return $newWalletBalance;   
        echo "Successfully Invested";    
         }
        else echo "Low Balance";

       
    }
}
?>
