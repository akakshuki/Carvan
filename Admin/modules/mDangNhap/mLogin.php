

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login System Management</h1>
                                    </div>
                                    <form class="form-horizontal" name="frmDangNhap" action="index.php?c=0&a=2"
                                        method="post">
                                        <div class="form-group">
                                            <input type="text" name="txtUserAd" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" placeholder="User">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="txtPasswordAd" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <?php
                                                if(isset($_GET["err"])){
                                                    echo "<strong><i>Tên đăng nhập hoặc mật khẩu bị sai</i></strong>";
                                                }
                                            ?>
                                        </div>
                                        <!-- Button -->
                                        
                                            <div class="col-md-4">
                                                <button type="submit"
                                                    class="btn btn-google btn-user btn-block">Login</button>
                                            </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </form>