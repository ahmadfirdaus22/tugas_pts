<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Add Transaction</h1>
        <form action="<?= \OOP\app\Core\Router::url("transaction_buy/adding") ?>" method="post">
            <p class="form_name">Exporter name</p>
            <select name="exporter_id" class="form_select">
                <?php foreach ($data as $row) { ?>
                    <option value="<?= $row->id ?>"><?= $row->name ?></option>
                <?php } ?>
            </select>
            <p class="form_name">Buyer name</p>
            <select name="buyer_id" class="form_select">
                <?php foreach ($data2 as $row2) { ?>
                    <option value="<?= $row2->id ?>"><?= $row2->company_name ?></option>
                <?php } ?>
            </select>
            <p class="form_name">Supplier name</p>
            <select name="supplier_id" class="form_select">
                <?php foreach ($data3 as $row3) { ?>
                    <option value="<?= $row3->id ?>"><?= $row3->company_name ?></option>
                <?php } ?>
            </select>
            <div class="card4">
                <p class="form_name2">Quantity</p>
                <p class="form_name3">Total Payment</p>
            </div>
            <div>
                <input type="text" placeholder="Quantity" name="quantity" class="form_input2">
                <input type="text" placeholder="Total Payment" name="total_payment" class="form_input2">
            </div>
            <div class="card5">
                <p class="form_name">Port Loading</p>
                <p class="form_name">Port Discharge</p>
            </div>
            <div>
                <input type="text" name="port_loading" class="form_input2">
                <input type="text" name="port_discharge" class="form_input2">
            </div>
            <div class="card5">
                <p class="form_name">Bank Origin</p>
                <p class="form_name">Bank Destination</p>
            </div>
            <div>
                <input type="text" name="bank_origin" class="form_input2">
                <input type="text" name="bank_destination" class="form_input2">
            </div>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>