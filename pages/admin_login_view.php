        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">ADMIN PANEL</h5>
                    <form class="form-signin" action="core/loginCheck.php" method="POST">
                        <div class="form-label-group">
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email" required autofocus>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
