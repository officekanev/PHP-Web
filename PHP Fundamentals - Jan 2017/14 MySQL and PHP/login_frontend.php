<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login to the sex </title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="bs-component">
            <form method="post" class="form-horizontal">
                <fieldset>
                    <legend>Login</legend>

                    <div class="form-group">
                        <label for="nickname" class="col-lg-2 control-label">Nick name</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="nickname" id="nickname" placeholder="Nickname" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>