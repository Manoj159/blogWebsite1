<?php include 'header.php'; ?>

<script>
    function addartfun() {
        window.location.href = "<?php echo base_url('home/homepage'); ?>";
    }

    function edit(articleId) {
        window.location.href = "<?php echo base_url('home/edit/'); ?>" + articleId;
    }

    function deleteart(articleId) {
        window.location.href = "<?php echo base_url('home/deleteart/'); ?>" + articleId;
    }
</script>

<div class="mt-5 container">
    <div class="card">
        <div class="card-header">MY ARTICLES</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Article Title</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $index => $article) { ?>
                        <tr>
                            <th scope="row"><?php echo $index + 1; ?></th>
                            <td><?php echo $article['a_tittle']; ?></td>
                            <td>
                                <button class="btn btn-primary" onclick="edit(<?php echo $article['id']; ?>)">EDIT</button>
                                <button class="btn btn-danger" onclick="deleteart(<?php echo $article['id']; ?>)">DELETE</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <button class="btn btn-primary" onclick="addartfun()">Add New Article</button>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
