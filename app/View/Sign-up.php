<div class="wrap">
    <div class="card" style="font-family: 'ubuntu';">
        <form action="<?= OOP\app\Core\Router::url("exporter/adding") ?>" method="POST">
            <h1 style="text-align: center;">Sign-Up</h1>
            <table>
                <tr>
                    <td><label for="">Email</label></td>
                    <td>:</td>
                    <td><input type="text" class="log" name="email"></td>
                </tr>
                <tr>
                    <td><label for="">Password</label></td>
                    <td>:</td>
                    <td><input placeholder="" type="password" name="password" class="log pas"></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit" class="submit">Sign-up</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>