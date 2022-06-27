<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="assets/stylesheets/bootstrap.css" rel="stylesheet">
    <link href="assets/stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="assets/stylesheets/styles.css" rel="stylesheet">
    <script src="assets/javascript/jquery.min.js"></script>
    <script src="assets/javascript/script.js"></script>
    <script src="assets/javascript/bootstrap.min.js"></script>
    <script src="assets/javascript/jquery.validate.min.js"></script>
    <title>SIGN UP</title>
</head>

<body>
    <div class="container">

        <div id="loginbox" style="margin-top:50px;" class="card card-container">
            <div align="center" style="margin-bottom: 30px">
                <img src="assets/images/flipkart_big.png" />
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                </div>

                <div style="padding-top:30px" class="panel-body">
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" action="process.php" method="post">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="F_N" type="text" class="form-control" name="F_N" value=""
                                placeholder="firstname">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="F_N" type="text" class="form-control" name="L_N" value=""
                                placeholder="lastname">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="city" type="text" class="form-control" name="city" value=""
                                placeholder="city">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value=""
                                placeholder="email">
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->

                            <div class="col-sm-12 controls">
                                <input type="submit" id="save" name="save" class="btn btn-success btn-large" value="Sign Up" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>