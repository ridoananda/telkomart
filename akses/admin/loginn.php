<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
margin-left:450px;
margin-top:130px;
width: 30%;
height:50%;
}
form {border: 3px solid #f1f1f1;
border-radius:0px 1px 30px 30px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color:#faf6f6;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
h2{
  background-color:red;
  color: white;
  padding:20px;
  border:1px solid red;
  border-radius:30px 30px 0px 0px;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 992px) {
  body{
    margin-left:10px;
margin-top:10px;
width:95%;

  }
  span.psw {
     display: block;
     float: none;
  }

</style>
</head>
<body>

<h2>Login Form</h2>

<form action="akses_singgah.php" method="post">

    
  </div>

  <div class="container">
    <label for="uname"><b>E-mail address</b></label>
    <input type="text" placeholder="main@address.com" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    
  </div>
  </div>
</form>

</body>
</html>