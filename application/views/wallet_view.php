<!-- Display wallet balance -->
<h2>Your Wallet Balance: $<?php echo $wallet['balance']; ?></h2>

<!-- Form for depositing money into the wallet -->
<form method="post" action="<?php echo base_url('wallet/deposit'); ?>">
    <input type="number" name="amount" placeholder="Enter amount to deposit" required>
    <button type="submit">Deposit</button>
</form>
<button id="claimButton" class="btn btn-primary" style="display: none;">Claim Daily Income</button>



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

