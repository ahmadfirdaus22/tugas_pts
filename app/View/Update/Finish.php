<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Update Account</h1>
        <form action="<?= \OOP\app\Core\Router::url("exporter/updating") ?>" method="post">
            <input type="text" name="id" hidden value="<?= $data->id?>">
            <p class="form_name">Name</p>
            <input type="text" name="name" class="form_input">
            <p class="form_name">Phone</p>
            <input type="text" name="phone" class="form_input">
            <p class="form_name">Country</p>
            <input type="text" name="country" class="form_input">
            <p class="form_name">Address</p>
            <textarea type="text" name="address" class="area_form"></textarea>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>