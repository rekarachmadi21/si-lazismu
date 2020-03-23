<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <form action="../../index3.html" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Username  ">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" value="login" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
            </div>

        </form>
        <br>
        <center> <a href="<?= base_url('') ?>auth/lupa_akun">Lupa Akun </center>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->