<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Register</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="current"><span>Register</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 mb-sm--50">
                            <div class="login-box">

                            </div>
                        </div> -->
                <div class="col-md-6">
                    <div class="register-box">
                        <h4 class="heading__tertiary mb--30">Register</h4>
                        <form name="myform" onsubmit="return validateform();" class=" form form--login" action="" method="POST">
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email <span class="required">*</span></label>
                                <input type="text" class="form__input form__input--2" id="email" name="email">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="username">Username <span class="required">*</span></label>
                                <input type="text" class="form__input form__input--2" id="username" name="username">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="register_password">Password <span class="required">*</span></label>
                                <input type="password" class="form__input form__input--2" id="register_password" name="password">
                            </div>
                            <p class="privacy-text mb--20"><?php if (isset($txt_err_register)) echo $txt_err_register ?></p>
                            <div class="form__group">
                                <input type="submit" value="Register" class="btn btn-submit btn-style-1" name="btn_register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validateform() {
        const reUsername = /^[a-z_][a-z0-9_\.\s]{4,31}$/;
        const rePassword = /^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,}$/;
        const reEmail = /^[a-z][a-z0-9_\.]{4,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
        var username = document.myform.username.value;
        var password = document.myform.password.value;
        var email = document.myform.email.value;
        if (reEmail.test(email) == false) {
            alert("Email không hợp lệ");
            email = null;
            return false;
        }
        if (reUsername.test(username) == false) {
            alert("Tên dăng nhập không hợp lệ ");
            username = null;
            return false;
        }
        if (rePassword.test(password) == false) {
            alert("Mật khẩu không hợp lệ");
            password = null;
            return false;
        }

    }
</script>