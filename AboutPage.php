<!DOCTYPE html>
<html lang="en">
<head>
<title>About Page</title>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/82fb063a14.js" crossorigin="anonymous"></script>
<style>
    body{
    }
    P {
        color: white;
        margin: 0;
        padding: 0;
        font-family: 'Graphik', sans-serif;
        font-size: 20px;
    }
    ul {
        list-style-type: "";
    }
    .header {
        height: 100vh;
        width: 100%;
        background: url(Images/City.jpg) no-repeat; /* https://unsplash.com/s/photos/city */
        background-size: cover;
        background-position: center;
    }
    .main {
        width: 50%;
        background: rgba(0,0,0,.7);
        color: white;
    }
    .btn {
        text-align: center;
        padding: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate (-50%, -50%);
        padding: 10px 20px;
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
    .btn:hover {
        background: green;
        color: white;
    }
</style>
</head>
<body>
<!-- Navigation bar -->
<section id="header">
<div class="nav-bar">
<nav>
<h1 class="logo"><b>Harrow Council</b></h1>
<ul>
<li><a href="homepage.html">Home</a></li>
<li><a href="Explore.html">Ride</a></li>
<li><a href="Sign up form.html">Sign up</a></li>
<li><a href="Contribute.html">contribute</a></li>
<li><a href="about.html">about</a></li>
<li><a href="contact.html">contact</a></li>
</ul>
</nav>
</div>
</section>
<!-- End of Navigation bar -->
<!- Main Section -->
<div class="header">
<div class="main">
<h1>About Us</h1>
<p>
</p>
<br>
We are the Harrow Council. Founded 30 years ago by Sir Charles Harrow, we decided
it was time to introduce a new scheme to promote healthy living. This is, Rent-a-Bike.
We have implemented 50 new cycle lanes around the borough and build 20 Bycicle shacks
where you can rent a bike for only £2 per hour. Famous fitness icons around the world have stated
that this scheme will bring out the best of people in the borough and people around the country
will travel to ride a bike. We are commited to:
<ul style="margin-top: 20px;">
</ul>
<li style="align-content: center; margin-bottom: 2px;" ><b>Promote healthy living</b></li>
<li><b>Getting everyone active</b></li>
<li><b>Making sure everyone has fun!</b></li>
<button class="btn">Sign Up <i class="fa fa-book-open"></i></button>
</div>
</div>
<!-- End of main section -->
</body>
</html>