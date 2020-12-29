<div class="container">


    <div style="padding-top:20px;" class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                </div>
                                <form class="user" method="POST" action="index.php?act=dangnhap">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password">
                                    </div>

                                    <input type="submit" name="btn_submit" value="Login" class="btn btn-primary btn-user btn-block">

                                </form>
                                <hr>
                                <?php
                                if (isset($txt_err_login) && $txt_err_login != "") {
                                    echo '<h3 style="color: red;">' . $txt_err_login . '</h3>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>