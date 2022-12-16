<div class="wrap">
    <div class="card" style="font-family: 'ubuntu';">
        <form action="<?= \OOP\app\Core\Router::url("logining") ?>" method="POST">
            <h1 style="text-align: center;">Login</h1>
            <table>
                <tr>
                    <td><label for="">Email</label></td>
                    <td>:</td>
                    <td><input type="text" name="email" class="log"></td>
                </tr>
                <tr>
                    <td><label for="">Password</label></td>
                    <td>:</td>
                    <td><input placeholder="" name="password" type="password" class="log pas"></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit" class="submit">Sign-In</button></td>
                </tr>
            </table>
            <br>
                <a href="<?= \OOP\app\Core\Router::url("sign-up") ?>">don't have an  account ?</a>
        </form>
    </div>
</div>