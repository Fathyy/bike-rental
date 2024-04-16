<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore Page</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
  /*background: linear-gradient(Odeg, rgba(87,180,123,1) 0%, rgba(87,180,123,1) 56%); */
  background-image: url(Images/Bike Landscape.jpg); /* https://unsplash.com/photos/VfUND4Uy40 */
  background-size: cover;
  align-content: center;
  justify-content: center;
}

.container {
  background: none;
  margin-top: 400px;
  margin-left: 50%;
  align-content: center;
}

.container {
  min-height: 70vh;
  width: 100%;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.bike-price {
  width: 60%;
  height: 50%;
  margin: 10px auto;
}

.wrapper {
  align-content: center;
  float: right;
  width: auto;
  display: flex;
  justify-content: center;
  text-align: center;
  flex-wrap: wrap;
}

.wrapper .item {
  width: 450px;
  height: 450px;
  margin: 10px;
  background-color: ghostwhite;
  border-radius: 5px;
  border: 1px solid lightblue;
  position: relative;
  padding: 30px 20px 65px;
  box-shadow: blue;
}

.wrapper item h3 {
  letter-spacing: 2px;
  color: #69bbb;
  margin-bottom: 20px;
}

.wrapper .bike-info p {
  font-size: 20px;
  color: #alala;
  margin-bottom: 5px;
}

.wrapper item price {
  margin-top: 20px;
}

.wrapper item.bike.button {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 300px;
  padding: 20px;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  background: #69bbb;
  margin-bottom: 10px;
}

.wrapper item .bike button a {
  display: block;
  color: #fff;
}
.profilesteps {
    float: right;
    margin: 20px 20px 0;
    margin-top: 35;
    margin-right: 22%;
}

.profileStep {
    position: relative;
    float: right;
    width: 200px;
    height: 0px;
}

.profilestep .connect {
    position: absolute;
    top: 10px;
    left: 0;
    width: 200px;
    height: 15px;
    margin-left: -5px;
    background-color: #24d4ec;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

.profileStep icon {
    position: absolute;
    top: -8;
    right: 0;
    width: 50px;
    height: 50px;
    background-color: #244;
    -webkit-border-radius: 5px;
    border-radius: 15px;
    color: #fff;
    font-size: 25px;
    line-height: 0px;
    text-align: center;
}

.profilestep.info {
    position: absolute;
    bottom: 0;
    left: 30px;
    width: 105px;
    color: #fff;
    font-size: 20px;
    line-height: 20px;
    text-align: center;
}

.profileStepPassive .connect {
    background-color: rsrsrs;
}

.profileStepPassive.icon {
    background-color: #24d4c;
    color: #24d4c;
}
    </style>
</head>

<body>
    <!-- Navigation bar -->
    <section id="header">
        <div class="nav-bar">
            <nav>
                <h1 class="logo"> <b>Harrow Council</b></h1>
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

    <h1 class="container" style="font-size: 50px; letter-spacing: 2px; text-shadow: 5px 5px Lightgreen;">
        <hr style="width: 200px; margin-right: 20px; border-width: 1px;">GET RIDING
        <hr style="width: 200px; margin-left: 20px; border-width: 1px;">
    </h1>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb11m18!1m12:1m3!1d79318.4714571656812d-0.4031427438773469413d51.5920205083182312m311f012f013f0!3m2!11102412176814f13.113n311m2!1s0x48761158a02507f9%3A0x24d74f8999e25bd9:2sHarrow!5e0!3m2!1sen!2suk:4v161399199231215m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="wrapper" style="float: right; margin-top: -8%; margin-left:10px">
        <div class="item item_1">
            <h1 style="font-size: 30px; margin-bottom: 20px; color: #69b0bb;">Rent a Bike</h1>
            <img src="Images/Bycicle.png" alt="Bicycle" width="100px;" height="100px;">
            <div class="bike_info">
                <p>Price:</p>
            </div>
            <div class="bike_price">
                <h3>£2 / 24 hours</h3>
            </div>
            <div class="bike_button">
                <a href="Sign_up_Form.html">Learn More</a>
            </div>
        </div>
    </div>

    <!-- Step by Step Menu -->
    <div class="profileSteps">
    <div class="profileStep profileStepActive profileStepOne">
        <div class="connect"></div>
        <div class="icon">1</div>
        <div class="info">Plan Route</div>
    </div>
    <div class="profileStep profileStepActive profileStepOne">
        <div class="connect"></div>
        <div class="icon">2</div>
        <div class="info">Find Shack</div>
    </div>
    <div class="profileStep profileStepActive profileStepOne">
        <div class="connect"></div>
        <div class="icon">3</div>
        <div class="info">Rent Bike</div>
    </div>
    <div class="profileStep profileStepPassive profileStepOne">
        <div class="connect"></div>
        <div class="icon">4</div>
        <div class="info">Enjoy</div>
    </div>
    <div class="profileStep profileStepPassive profileStepOne">
        <div class="connect"></div>
        <div class="icon">5</div>
        <div class="info">Return</div>
    </div>
</div>