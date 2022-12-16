<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Update Product</h1>
        <form action="<?= \OOP\app\Core\Router::url("product/updating") ?>" method="post">
            <p class="form_name">Product Name</p>
            <input type="text" name="id" value="<?= $data->id ?>" hidden>
            <input type="text" name="name" value="<?= $data->name ?>" class="form_input">
            <p class="form_name">HS Code</p>
            <input type="text" name="hs_code" value="<?= $data->hs_code ?>" class="form_input">
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>