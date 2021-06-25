<?php
    if (!(isset($_GET["content"]) &&  isset($_GET["id"]) && isset($_GET["pwh"]))){
        header("Location: ./index.php?content=message&alert=hacker-alert");
    }
?>


<div class="section container">
    <div class="row" id="register">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="form-group">
                    <label for="InputPassword">Kies een nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="exampjeInputPassword" aria-describedby="passwordHelp">
                    <small id="passwordHelp" class="form-text text-muted">Kies een veilig wachtwoord..</small>
                </div>
                <div class="form-group">
                    <label for="InputPasswordCheck">Typ het wachtwoord opnieuw</label>
                    <input name="passwordCheck" type="password" class="form-control" id="PasswordHelpCheck" aria-describedby="passwordHelpCheck">
                    <small id="passwordHelp" class="form-text text-muted">Ter controle typ het wachtwoord opnieuw..</small>
                </div>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" >
            <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>" >
            <button type="submit" class="btn btn-danger btn-lg btn-block">Activeer</button>


            </form>

        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/kipO.png" alt="" class="img-fluid">
    </div>
    </div>
</div>