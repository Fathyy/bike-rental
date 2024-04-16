<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<style>
body{
background-image: url(Images/Trees.jpeg); /* https://www.pexels.com/photo/close-up-photography-of-leaves-with-droplets-807598/ */
background-size: cover;
}
.btn{
padding: 6px 10px;
font-family: Century Gothic;
font-size: large;
font-weight: 500;
border: none;
outline: none;
background: white;
border-radius: 8px;
cursor: pointer;
transition: 0.3s ease-in-out;
}
.btn:hover{
background: green;
color: white;
}
</style>

</head>
<body style="display: flex; height: 100vh; justify-content: center; align-items: center; padding: 10px;">
<!-- Navigation bar -->
<section id="header">
<div class="nav-bar">
<nav>
<h1 class="logo" style="outline: red"> <b>Harrow Council</b></h1>
<ul>
<li><a href="homepage.html">Home</a></li>
<li><a href="Explore.html">Ride</a></li>
<li><a href="Sign_up_Form.html">Sign up</a></li>
<li><a href="Contribute.html">contribute</a></li>
<li><a href="about.html">about</a></li>
<li><a href="contact.html">contact</a></li>
</ul>
</nav>
</div>
</section>
<!-- End of Navigation bar -->
<h1 style="margin-right: 200px; color: white"> Sign up now to get exclusive <br> news straight to your indox </h1>

<div class="container1" style="float: right; align=content:center">
  <div class="title">Sign up</div>
  <form onSubmit="return ClickMessage()">
    <div class="user-details">
      <div class="input-box">
        <span class="details"> First Name</span>
        <input type="text" placeholder="Enter your first name" required>
      </div>
      <div class="input-box">
        <span class="details"> Last Name</span>
        <input type="text" placeholder="Enter your last name" required>
      </div>
      <div class="input-box">
        <span class="details"> Phone Number</span>
        <input type="text" placeholder="Enter your phone number" required>
      </div>
      <div class="input-box">
        <span class="details"> Email Address</span>
        <input type="text" placeholder="Enter your email address" required>
      </div>
    </div>
  </form>
</div>
<div class="gender-details">
    <span class="gender-title">Gender</span>
    <div class="catagory">
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Male</span>
      </label>
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Female</span>
      </label>
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Prefer not to specify</span>
      </label>
    </div>
  </div>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <button class="btn">Sign Up</button>
  <div class="gender-details">
    <span class="gender-title">Gender</span>
    <div class="catagory">
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Male</span>
      </label>
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Female</span>
      </label>
      <label for="dot-1">
        <input type="radio" name="gender" id="dot-1" required>
        <span class="gender">Prefer not to specify</span>
      </label>
    </div>
  </div>
</body>
<!-- Script -->
<script language="JavaScript">
function ClickMessage() {
alert("You have successfully signed up!");
}
</script>
</html>