<?php if (isset($msgErreur)) : ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Mots de passe incorrect</strong> <?= $this->nettoyer($msgErreur) ?>
    </div>
<?php endif; ?>
<div class="login-box">
    <div class="login-logo">
        <a><b>Connexion</b> Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

        <form action="connexion/connecter" method="post">
            <div class="form-group has-feedback">
                <input name="login" type="email" class="form-control" placeholder="Login">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="mdp"  type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-xs-6">
                    <button href="" type="submit" class="btn btn-primary btn-block btn-flat">Se connecter</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
</br>
</br>
</br></br></br></br></br></br></br>

