<?php include 'header.php'; ?>
<script>
    function investBtn(planId) {
        window.location.href = "<?php echo base_url('Wallet/invest/') ?>" + planId;
    }
</script>

<div class="mt-5 container">
    <div class="card">
        <div class="card-header">Plans To Invest</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Plan Image</th>
                        <th scope="col">Plan Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pldata as $index => $plan) { ?>
                        <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td>
                                <div>
                                    <?php if ($plan['image']) { ?>
                                        <img style="height: 130px; border-radius: 5px;" src="data:image/jpeg;base64,<?php echo base64_encode($plan['image']); ?>" alt="Plan Image">
                                    <?php } else { ?>
                                        <!-- Placeholder image or message if no image is available -->
                                        <img style="height: 100px; border-radius: 5px;" src="placeholder.jpg" alt="No Image Available">
                                    <?php } ?>
                                </div>
                            </td>
                            <td>
                                <div class="ml-3">
                                    <div>
                                        <p><strong><?php echo $plan['plan_name']; ?></strong></p>
                                    </div>
                                    <div>
                                        <p><strong>Duration:</strong> <?php echo $plan['plan_duration']; ?> days</p>
                                    </div>
                                    <div>
                                        <p><strong>Plan Price:</strong> <?php echo $plan['plan_price']; ?></p>
                                    </div>
                                    <div>
                                        <p><strong>Daily Income:</strong> <?php echo $plan['plan_price']*5/100; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-success invest-btn" onclick="investBtn(<?php echo $plan['id']; ?>)">Invest</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
