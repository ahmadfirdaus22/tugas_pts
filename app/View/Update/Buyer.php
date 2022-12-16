<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Update Buyer</h1>
        <form action="<?= \OOP\app\Core\Router::url("buyer/updating") ?>" method="post">
            <input type="text" name="id" hidden value="<?= $data->id?>">
            <p class="form_name">Company Name</p>
            <input type="text" value="<?= $data->company_name ?>" name="company_name" class="form_input">
            <p class="form_name">Email</p>
            <input type="text" name="email" value="<?= $data->email ?>" class="form_input">
            <p class="form_name">Country</p>
            <input type="text" name="country" value="<?= $data->country ?>" class="form_input">
            <p class="form_name">Address</p>
            <textarea type="text" name="address" class="area_form"><?= $data->address ?></textarea>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>