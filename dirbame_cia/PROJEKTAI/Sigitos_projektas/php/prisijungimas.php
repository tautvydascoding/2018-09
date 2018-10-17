<div class="container">
    <h5>Prisijungimas</h5>
    <div id="user-login" class="row">
        <div class="col s12 card-panel">
            <form class="login-form" name="login-form" method="POST"
                action="">
                <div class="row margin">
                    <div class="input-field">
                        <i class="mdi-social-person-outline prefix"></i>
                        <input class="validate" id="username"
                            name="username" type="text" required>
                        <div class=usererr><?php if (! empty($username_error)) { echo $username_error; } ?></div>
                        <label for="username" data-error="wrong"
                            data-success="right" class="center-align">Naudotojo vardas</label>
                    </div>
                </div>

                <div class="row margin">
                    <div class="input-field">
                        <i class="mdi-action-lock-outline prefix"></i> <input
                            id="user_pass" name="user_pass"
                            type="password" required>
                        <div class=pwderr><?php if (! empty($password_error)) { echo $password_error; } ?></div>
                        <label for="password">Slaptažodis</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field">
                        <input type="submit"
                            class="btn-lg"
                            id="btnsubmit" name="submit" value="Prisijungti" />
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
