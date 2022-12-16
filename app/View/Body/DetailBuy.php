<div class="detailbuy">
    <div class="title2">Detail Transaction</div>
    <div class="content">
        <table class="tabledetail">
            <tr>
                <td>Transaction date</td>
                <td>:</td>
                <td><?= $data->date ?></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <?php foreach ($data5 as $row5) { ?>
                    <?php if ($data->product_id == $row5->id) {
                        echo '<td>' . $row5->name . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>HS Code</td>
                <td>:</td>
                <?php foreach ($data5 as $row5) { ?>
                    <?php if ($data->product_id == $row5->id) {
                        echo '<td>' . $row5->hs_code . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Exporter Name</td>
                <td>:</td>
                <?php foreach ($data4 as $row4) { ?>
                    <?php if ($data->exporter_id == $row4->id) {
                        echo '<td>' . $row4->name . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Exporter Email</td>
                <td>:</td>
                <?php foreach ($data4 as $row4) { ?>
                    <?php if ($data->exporter_id == $row4->id) {
                        echo '<td>' . $row4->email . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Exporter Country</td>
                <td>:</td>
                <?php foreach ($data4 as $row4) { ?>
                    <?php if ($data->exporter_id == $row4->id) {
                        echo '<td>' . $row4->country . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Buyer Name</td>
                <td>:</td>
                <?php foreach ($data2 as $row2) { ?>
                    <?php if ($data->buyer_id == $row2->id) {
                        echo '<td>' . $row2->company_name . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Buyer Email</td>
                <td>:</td>
                <?php foreach ($data2 as $row2) { ?>
                    <?php if ($data->buyer_id == $row2->id) {
                        echo '<td>' . $row2->email . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Buyer Country</td>
                <td>:</td>
                <?php foreach ($data2 as $row2) { ?>
                    <?php if ($data->buyer_id == $row2->id) {
                        echo '<td>' . $row2->country . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td style="vertical-align: top;">Buyer Address</td>
                <td style="vertical-align: top;">:</td>
                <?php foreach ($data2 as $row2) { ?>
                    <?php if ($data->buyer_id == $row2->id) {
                        echo '<td>' . $row2->address . '</td>';
                    } ?>
                <?php } ?>
            </tr>
        </table>
        <table class="tabledetail">
            <tr>
                <td>Quantity</td>
                <td>:</td>
                <td><?= $data->quantity ?></td>
            </tr>
            <tr>
                <td>Total Payment</td>
                <td>:</td>
                <td><?= $data->total_payment ?></td>
            </tr>
            <tr>
                <td>Port of Loading</td>
                <td>:</td>
                <td><?= $data->port_loading ?></td>
            </tr>
            <tr>
                <td>Port of Discharge</td>
                <td>:</td>
                <td><?= $data->port_discharge ?></td>
            </tr>
            <tr>
                <td>Bank Origin</td>
                <td>:</td>
                <td><?= $data->bank_origin ?></td>
            </tr>
            <tr>
                <td>Bank Destination</td>
                <td>:</td>
                <td><?= $data->bank_destination ?></td>
            </tr>
            <tr>
                <td>Supplier Name</td>
                <td>:</td>
                <?php foreach ($data3 as $row3) { ?>
                    <?php if ($data->supplier_id == $row2->id) {
                        echo '<td>' . $row3->company_name . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Supplier Email</td>
                <td>:</td>
                <?php foreach ($data3 as $row3) { ?>
                    <?php if ($data->buyer_id == $row3->id) {
                        echo '<td>' . $row3->email . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td>Supplier Country</td>
                <td>:</td>
                <?php foreach ($data3 as $row3) { ?>
                    <?php if ($data->buyer_id == $row3->id) {
                        echo '<td>' . $row3->country . '</td>';
                    } ?>
                <?php } ?>
            </tr>
            <tr>
                <td style="vertical-align: top;">Supplier Address</td>
                <td style="vertical-align: top;">:</td>
                <?php foreach ($data3 as $row3) { ?>
                    <?php if ($data->buyer_id == $row3->id) {
                        echo '<td>' . $row3->address . '</td>';
                    } ?>
                <?php } ?>
            </tr>
        </table>
    </div>
</div>