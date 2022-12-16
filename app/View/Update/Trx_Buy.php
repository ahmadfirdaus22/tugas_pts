<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Add Transaction</h1>
        <form action="<?= \OOP\app\Core\Router::url("transaction_buy/updating") ?>" method="post">
            <p class="form_name">Exporter name</p>
            <select name="exporter_id" class="form_select">
                <?php foreach ($data2 as $row2) { ?>
                    <option value="<?= $row2->id ?>" <?php if($row2->id == $data->exporter_id){ echo 'selected';}else{'';} ?>><?= $row2->name ?></option>
                <?php } ?>
            </select>
            <p class="form_name">Buyer name</p>
            <select name="buyer_id" class="form_select">
                <?php foreach ($data3 as $row3) { ?>
                    <option value="<?= $row3->id ?>" <?php if($row3->id == $data->buyer_id){ echo 'selected';}else{'';} ?> ><?= $row3->company_name ?></option>
                <?php } ?>
            </select>
            <p class="form_name">Supplier name</p>
            <select name="supplier_id" class="form_select">
                <?php foreach ($data4 as $row4) { ?>
                    <option value="<?= $row4->id ?>" <?php if($row4->id == $data->supplier_id){ echo 'selected';}else{'';} ?>><?= $row4->company_name ?></option>
                <?php } ?>
            </select>
            <div class="card4">
                <p class="form_name2">Quantity</p>
                <p class="form_name3">Total Payment</p>
            </div>
            <div>
                <input type="text" value="<?= $data->quantity ?>" placeholder="Quantity" name="quantity" class="form_input2">
                <input type="text" value="<?= $data->total_payment ?>"  placeholder="Total Payment" name="total_payment" class="form_input2">
            </div>
            <div class="card5">
                <p class="form_name">Port Loading</p>
                <p class="form_name" >Port Discharge</p>
            </div>
            <div>
                <input type="text" value="<?= $data->port_loading ?>" name="port_loading" class="form_input2">
                <input type="text" value="<?= $data->port_discharge ?>" name="port_discharge" class="form_input2">
            </div>
            <div class="card5">
                <p class="form_name">Bank Origin</p>
                <p class="form_name">Bank Destination</p>
            </div>
            <div>
                <input type="text" value="<?= $data->bank_origin ?>" name="bank_origin" class="form_input2">
                <input type="text" value="<?= $data->bank_destination ?>" name="bank_destination" class="form_input2">
            </div>
            <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>