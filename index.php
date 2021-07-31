<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlayChat</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://use.fontawesome.com/fd6de61138.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Welcome to PlayChat</header>
      <form action="#">
        <div class="error-text">This is an error message!!</div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" placeholder="First Name">
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name">
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="email" placeholder="Enter you email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" placeholder="Enter new password">
          <i class="fa fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file">
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Already signed up?<a href="#">Login now</a></div>
    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/signup.js"></script>
</body>

</html>