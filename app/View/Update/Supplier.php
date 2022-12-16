<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Update Supplier</h1>
        <form action="<?= \OOP\app\Core\Router::url("supplier/updating") ?>" method="post">
            <input type="text" hidden name="id" value="<?= $data->id ?>">
            <p class="form_name">Company Name</p>
            <input type="text" value="<?= $data->company_name ?>" name="company_name" class="form_input">
            <p class="form_name">Email</p>
            <input type="text" value="<?= $data->email ?>" name="email" class="form_input">
            <p class="form_name">Country</p>
            <input type="text" value="<?= $data->country ?>" name="country" class="form_input">
            <p class="form_name">Product name</p>
            <select name="product_id" class="form_select">
                <?php foreach($data2 as $row){ ?>
                    <option value="<?= $row->id ?>" <?php if($row->id == $data->product_id){ echo 'selected';}else{'';} ?>><?= $row->name ?></option>
                <?php } ?>
            </select>
            <p class="form_name">Max Quantity</p>
            <input type="number" value="<?= $data->max_quantity ?>" name="max_quantity" class="form_input">
            <p class="form_name">Address</p>
            <textarea type="text" name="address" class="area_form"><?= $data->address ?></textarea>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>