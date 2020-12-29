<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="user-dashboard-tab flex-column flex-md-row">
                        <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                            <a class="nav-link" href="index.php?act=logout">Logout</a>
                        </div>
                        <div class="user-dashboard-tab__content tab-content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <p>
                                    Hello <strong><?= $user['name'] ?></strong> (not
                                    <strong><?= $user['name'] ?></strong>?
                                    <a href="index.php?act=logout">Log out</a>)
                                </p>
                                <p>
                                    From your account dashboard. you can easily
                                    check &amp; view your
                                    <a href="#">recent orders</a>, manage your
                                    <a href="#">shipping and billing addresses</a>
                                    and
                                    <a href="#">edit your password and account
                                        details</a>.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="accountdetails">
                                <form name="formaccount" action="index.php?act=myaccount" method="post" onsubmit="return validateform();" class="form form--account">
                                    <div class="row mb--20">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <label class="form__label form__label--2" for="d_name">Display name
                                                    <span class="required">*</span></label>
                                                <input type="text" value="<?= $user['name'] ?>" name="d_name" id="d_name" class="form__input" />
                                                <span class="suggestion"><em>This will be how your
                                                        name will be displayed
                                                        in the account section
                                                        and in reviews</em></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb--20">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <label class="form__label form__label--2" for="email">Email Address
                                                    <span class="required">*</span></label>
                                                <input type="email" value="<?= $user['email'] ?>" name="email" id="email" class="form__input" />
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="form__fieldset mb--20">
                                        <legend class="form__legend">
                                            Password change
                                        </legend>

                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="new_pass">New password (leave
                                                        blank to leave
                                                        unchanged)</label>
                                                    <input type="password" name="new_pass" id="new_pass" class="form__input" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="conf_new_pass">Confirm new
                                                        password</label>
                                                    <input type="password" name="conf_new_pass" id="conf_new_pass" class="form__input" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input type="submit" value="Save Changes" class="btn btn-style-1 btn-submit" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function validateform() {
        const rePassword = /^(?=.*\d)(?=.*\W)(?=.*[A-Z]).{8,}$/;
        var new_password = document.formaccount.new_pass.value;
        var cf_password = document.formaccount.conf_new_pass.value;
        if (rePassword.test(new_password) == false) {
            alert("Pass không hợp lệ ");
            username = null;
            return false;
        }
        if (cf_password != new_password) {
            alert("Confirm pass không hợp lệ");
            password = null;
            return false;
        }

    }
</script>