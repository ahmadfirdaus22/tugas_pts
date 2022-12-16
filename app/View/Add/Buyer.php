<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Add Buyer</h1>
        <form action="<?= \OOP\app\Core\Router::url("buyer/adding") ?>" method="post">
            <p class="form_name">Company Name</p>
            <input type="text" name="company_name" class="form_input">
            <p class="form_name">Email</p>
            <input type="text" name="email" class="form_input">
            <p class="form_name">Country</p>
            <input type="text" name="country" class="form_input">
            <p class="form_name">Address</p>
            <textarea type="text" name="address" class="area_form"></textarea>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>