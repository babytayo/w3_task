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
      <form action="connect2.php" method="POST">
        <label for="name"><b>Name:</b></label
        ><br />
        <input
          type="text"
          size="35"
          id="name"
          name="name"
          placeholder="Enter your name..."
          required
        /><br />
        <br />
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

        <label for="phone"><b>Phone number:</b></label
        ><br />
        <input
          type="text"
          size="35"
          id="phone"
          name="phone"
          placeholder="+234-000-0000-000"
          required
        /><br />
        <br />
        <label for="gender"><b>Gender:</b></label
        ><br />
        <input
          type="radio"
          value="male"
          id="gender"
          name="gender"
          required
        /><label for="male"><b>Male</b></label
        ><br />
        <input type="radio" value="female" id="gender" name="gender" required />
        <label for="female"><b>Female</b></label
        ><br />
        <input type="radio" value="others" id="others" name="gender" required />
        <label for="female"><b>Others</b></label
        ><br /><br />

        <label for="password"><b>Password:</b></label
        ><br />
        <input type="password" size="35" id="password" maxlength="6"
        name="password" placeholder="not more than 6 charater" required /><br />
        <br />
        <label for="password"><b>Confirm Password:</b></label
        ><br />
        <input
          type="password"
          size="35"
          id="password2"
          name="password2"
          placeholder="confirm password"
          required
        /><br />
        <input type="submit" value="Sign up" id="submit" />
      </form>
      <script src="./JS/index.js"></script>
    </div>
  </body>
</html>
