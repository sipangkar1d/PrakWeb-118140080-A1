<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

</head>

<body>
    <h1 class="h2">Login</h1>
    <form action="<?= site_url('admin/login') ?>" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" name="username" placeholder="username" required />
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required />
        </div>
        <div>
            <input type="submit" value="Login" />
        </div>
    </form>
</body>
</html>