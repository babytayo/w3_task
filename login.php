<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <title>signug page</title>
  </head>
  <body>
    <div class="form_side">
      <div>
        <img
          src="./icons/back.png"
          onclick="location.href='index.html'"
          alt=""
        />
      </div>
      <form action="connect.php" method="POST">
        <label for="email"><b>Email address:</b></label
        ><br />
        <input
          type="email"
          size="35"
          placeholder="example@yahoo.com"
          id="email"
          name="email"
          required
        /><br />
        <br />

        <label for="password"><b>Password:</b></label
        ><br />
        <input
          type="password"
          size="35"
          id="password"
          name="password"
          placeholder="not more than 6 charater"
          maxlength="6"
          required
        /><br />
        <br />
        <p class="forget_password">Forget Password</p>
        <input type="submit" value="Sign in" name="submit" id="submit" />
      </form>
    </div>

    <script src="./JS/index.js"></script>
  </body>
</html>
