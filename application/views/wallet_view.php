<?php include('header.php') ?>


<!-- Display wallet balance -->

<div class="mt-5 container" style=" width: 50%;">
    <div class="card">
        <div class="card-header" style="text-align: center;">Wallet</div>
        <div class="card-body" style="display: flex; flex-direction: row; justify-content: space-between;">
            <h6>Added Funds</h6>
            <div style="border: 1px solid black;"><?php echo $wallet['balance']; ?></div>
            
        </div>
    </div>
</div>
<h2>Your Wallet Balance: $</h2>

<!-- Form for depositing money into the wallet -->
<form method="post" action="<?php echo base_url('wallet/deposit'); ?>">
    <input type="number" name="amount" placeholder="Enter amount to deposit" required>
    <button type="submit">Deposit</button>
</form>
<button id="claimButton" class="btn btn-primary" style="display: none;">Claim Daily Income</button>


<script type="text/javascript">
    
    $(document).ready(function() {
    // Check if 24 hours have passed since the last claim
    var lastClaimTime = <?php echo $last_claim_time; ?>; // Get the last claim time from the server
    var now = Math.floor(Date.now() / 1000); // Current timestamp in seconds
    var timeSinceLastClaim = now - lastClaimTime; // Time elapsed since last claim in seconds

    // Check if 24 hours have passed since the last claim
    if (timeSinceLastClaim >= 24 * 60 * 60) {
        // Show the claim button
        $('#claimButton').show();
    } else {
        // Calculate the remaining time until the next claim
        var remainingTime = 24 * 60 * 60 - timeSinceLastClaim;
        
        // Schedule the appearance of the claim button after the remaining time
        setTimeout(function() {
            $('#claimButton').show();
        }, remainingTime * 1000); // Convert seconds to milliseconds
    }
});

</script>

<?php include('footer.php') ?>