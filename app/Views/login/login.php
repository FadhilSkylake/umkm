<?= $this->extend('login/template/index'); ?>

<?= $this->section('login-content'); ?>
<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <span class="login100-form-title p-b-34 p-t-27">
                <?= lang('Auth.loginTitle') ?>
            </span>
            <?= view('Myth\Auth\Views\_message_block') ?>

            <form class="login100-form validate-form" action="/login" method="post">
                <?= csrf_field() ?>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" type="text" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                    </div>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="<?= lang('Auth.password') ?>">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>
                <?php if ($config->allowRemembering) : ?>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                        <?php if (old('remember')) : ?> checked <?php endif ?>>
                            <?= lang('Auth.rememberMe') ?>
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                    </div>
                <?php endif; ?>
                <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">

                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
<?= $this->endSection(); ?>