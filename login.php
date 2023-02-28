<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Design by foolishdeveloper.com -->
  <title>Login</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <style media="screen">
    *,
    *:before,
    *:after {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #e1ebf5;
    }

    .background {
      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .background .shape {
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }

    form {
      height: 600px;
      width: 400px;
      background-color: whitesmoke;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 40%;
      left: 50%;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
      padding: 50px 35px;
    }

    form * {
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.5px;
      outline: none;
      border: none;
    }

    form h3 {
      font-size: 40px;
      font-weight: 500;
      color: black;
      line-height: 70px;
      text-align: center;
      margin-bottom: 32px;
    }

    label {
      display: block;
      color: black;
      margin-top: 30px;
      font-size: 16px;
      font-weight: 500;
    }

    input {
      display: block;
      height: 50px;
      width: 100%;
      background-color: rgb(128, 128, 128, 0.2);
      border-radius: 3px;
      padding: 0 10px;
      margin-top: 8px;
      font-size: 14px;
      font-weight: 300;
    }

    ::placeholder {
      color: rgb(0, 0, 0, 0.8);
    }

    button {
      margin-top: 50px;
      width: 100%;
      background-color: #6c9ef0;
      color: white;
      padding: 15px 0;
      font-size: 18px;
      font-weight: 600;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
      background: #1860d6;
    }

    .social {
      margin-top: 30px;
      display: flex;
    }

    .social div {
      background: red;
      width: 150px;
      border-radius: 3px;
      padding: 5px 10px 10px 5px;
      background-color: rgba(255, 255, 255, 0.27);
      color: #eaf0fb;
      text-align: center;
    }

    .social div:hover {
      background-color: rgba(255, 255, 255, 0.47);
    }

    .social .fb {
      margin-left: 25px;
    }

    .social i {
      margin-right: 4px;
    }
  </style>
  <style>
    img {
      width: 100px;
      height: 100px;


    }
  </style>
</head>

<body>



  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>

  <form name="login" method="post" action="validation.php">
    <center><img src="Lions_Clubs_International_logo.svg.png"></center>
    <h3>Login</h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Name" required="required" name="uname">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" required="required" name="password">

    <button>Log In</button>

  </form>
</body>

</html>