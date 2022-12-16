<div class="container2">
    <div class="title">Products</div>
    <button class="add"><a href="<?= \OOP\app\Core\Router::url("product/add") ?>" class="ad">New Product</a></button>
    <div class="wrap2">
        <?php foreach ($data as $row) { ?>
            <form action="<?= \OOP\app\Core\Router::url("product/update/$row->id") ?>" method="POST">
                <div class="card2">
                    <input type="text" name="id" hidden value="<?= $row->id ?>">
                    <p><?= $row->name ?></p>
                    <p><?= $row->hs_code ?></p>
                    <button type="submit" class="update">Update</button>
                    <button formaction="<?= OOP\app\Core\Router::url("product/delete") ?>" class="delete">Delete</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>