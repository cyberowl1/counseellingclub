




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/228e6dba5e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="partials/css/style.css" class="rel">
    <title>counsellingclub</title>
  <style>
    .copywright
    {
      display:flex;
      position:flex-end;
      

    }
    .footer1
    {
      width:100%;
      height:350px;
      background-color:gray;
      display:flex;
      flex-wrap:wrap;
    }
    .navbar{
  position: absolute;
   width: 100%;
   background: transparent!important;
  z-index: 10;
  border: solid 2px grey;

}
.carousel-caption 
{
  bottom:300px;
}
.form-control{
  width: 50%;
  margin-left: 200px;

}
.navbar-expand-lg .navbar-collapse{
  display:flex;
  justify-content: flex-end;
  margin-right: 12px;
  flex-wrap:wrap;
}
.carousel-item{
  height:550px;
}
#cont1{
  width:100%;
  margin: 18px;
  display:flex;
  padding-left:350px;
  justify-content:center;
  font-family: "Lucida Console", Monospace;
 
}
#cont2

{
  display:flex;
  font-size:30px;
  justify-content:center;
  font-family: "Lucida Console", Monospace;
  flex-wrap:wrap;
}
#idcont2{
  height: 650px;
/* border:1px solid black;  */
}  
#coll2{
  flex: 0 0 33.33333%;
    max-width: 32.33333%;
    /* border: 2px solid red;  */
    margin:4px;
    padding-top:8px;
    flex-wrap:wrap;
    display:inline;

}
.row{
  height:320px;
  display:flex;
  flex-wrap:wrap;
  padding:4px;
  /* border:2px solid blue; */
}
#symbol1 
{
  font-size: 180px;
    padding-left: 66px;
    color: gray;
    
}
#icontext1
{
  text-decoration:none;
  text-color:black;
  text-align:center;
  color:black;
  font-family: "Monaco", Monospace;
  margin-top: 6px;

}
#row1
{
  
  margin-left:0px;
  display:flex;
  flex-wrap:wrap;
  

}
.container1{
  background-color:#afa2a2;
  width:100%;
  display:flex;
  flex-wrap:wrap;
  /* border:2px solid green; */
}
.smallcoll{
  height: 250px;
  width:250px;
  /* border:2px solid red; */
  margin:12px;
  color:white;
  background-color:#f3dbf9;
  
}
.adsec
{
  background-color:#775522;
  width : 100%;
  height: 350px;
  
}
#collegelist{
  height: 508px;
}
.row2
{
  height:252px;
  border : 2px solid blue;
}
.col2
{
  display:inline-flex;
  flex-wrap:wrap;
  height: 228px;
  width:333px;
  margin: 1px;
  margin-left: 2px;
  border: 2px solid white;
}
@media (max-width: 800px) {
  .col2 {
    flex-direction: column;
  }
}
.footercol2{
 
  width : 300px;
  height : 330px;
   /* border: 1px solid blue;  */
  margin : 10px;
  margin-left : 22px;
  color:white;
  
}
.footer3{
  width : 100%;
  background-color: black;
  height : 28px;
}

.ctext{
  color: white;
  position : absolute;
  right : 550px;
}
.pngicon
{
  width: 180px;
  height: 192px;
  margin-left: 66px;
}
.pngicon:hover
{
  width:184px;
  height: 196px;
}
.pngicon2{
  width : 120px;
  height : 150px;
  margin-left: 50px;
  margin-top: 10px;
}
#icontext2
{
  color: black;
  text-align:center;
  font-family: "Monaco", Monospace;
  margin-top: 18px;
}
.multi-collapse{
  z-index:20;
}
.logomain
{
width: 200px;


}
.footerulbox{
position:relative;
top:80px;
right:90px;
 

}
.footercol2 a{
  color:white;
}
.header{
  width:300px;
  height:50px;
  text-align:center;
  margin-top: 10px;
}
.pngicon3{
  height: 40px;
  width : 40px;
  margin: 6px;
}

.flex-box
{
  display: flex;
}
#socialbox
{
  position:relative;
  top: 20px;
  height: 50px;
  width: 50px;
  background:cyan;
  margin: 12px;
  /* transition: all; */

}
#socialbox:hover
{
  background: white;
  height: 55px;
  width : 55px;
}
.smallcoll:hover
{
  border: 2px solid blue;
}

  </style>
  </head>
  <body>
    <?php include "partials/header.php" ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-caption d-none d-md-block">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"><i class="fas fa-search"></i></i></button>
      </form>
      </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        
      <img class="d-block w-100" src="partials/slider1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="partials/slider2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="partials/slider3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container" id="cont1"><h3>Explore Education Items</h3></div> 

<div class="container" id="idcont2">
<div class="row">
<div class="col4" id="coll2">
<a href="#"> <span> <img class= "pngicon" src="image/college.png" alt=""></span>
<span><h6 class="lead" id="icontext1">Find Best Colleges</h6></span>

</a></div>
<div class="col4" id="coll2"><a href="#"><span> <img class= "pngicon" src="image/courses.png" alt=""></span>
<span><h6 class="lead" id="icontext1">Explore Courses</h6></span>

</a></div>

<div class="col4" id="coll2">
<a href="#"><span> <img class= "pngicon" src="image/admission.png" alt=""></span>
<span><h6 class="lead" id="icontext1">Get Admissions</h6></span>

</a>
</div>
</div>
<div class="row">
<div class="col4" id="coll2"><a href="#"><span> <img class= "pngicon" src="image/reviews.png" alt=""></span>
<span><h6 class="lead" id="icontext1">TOP REVIEWS</h6></span>

</a>
</div>
<div class="col4" id="coll2"><a href="#"><span> <img class= "pngicon" src="image/exams.png" alt=""></span>
<span><h6 class="lead" id="icontext1">EXPLORE EXAMS</h6></span>

</a></div>
<div class="col4" id="coll2"><a href="#"><span> <img class= "pngicon" src="image/customer.png" alt=""></span>
<span><h6 class="lead" id="icontext1">Talk To Experts</h6></span>

</a></div>

</div></div>
<!-- here                                working nowwwww
 -->

<div class="container1">
<div class="row1" id="row1">
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=management"><span> <img class= "pngicon2" src="image/management.png" alt=""></span>
<span><h6 class="lead" id="icontext2">MANAGEMENT</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=engineer"><span> <img class= "pngicon2" src="image/engineer.png" alt=""></span>
<span><h6 class="lead" id="icontext2">ENGINEER</h6></span>

</a></div>

<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=medical"><span> <img class= "pngicon2" src="image/doctor.png" alt=""></span>
<span><h6 class="lead" id="icontext2">MEDICAL</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=pharmacy"><span> <img class= "pngicon2" src="image/pharma.png" alt=""></span>
<span><h6 class="lead" id="icontext2">PHARMACY</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=nursing"><span> <img class= "pngicon2" src="image/nurse.png" alt=""></span>

<span><h6 class="lead" id="icontext2">NURSING</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=agriculture"><span> <img class= "pngicon2" src="image/agri.png" alt=""></span>
<span><h6 class="lead" id="icontext2">AGRICULTURE</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=hmanagement"><span> <img class= "pngicon2" src="image/chef.png" alt=""></span>
<span><h6 class="lead" id="icontext2">HOTEL MANAGEMENT</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=arts"><span> <img class= "pngicon2" src="image/arts.png" alt=""></span>
<span><h6 class="lead" id="icontext2">ARTS </h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=architecture"><span> <img class= "pngicon2" src="image/archi.png" alt=""></span>
<span><h6 class="lead" id="icontext2">ARCHITECTURE</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=dental"><span> <img class= "pngicon2" src="image/dental.png" alt=""></span>
<span><h6 class="lead" id="icontext2">DENTAL</h6></span>

</a></div>
<div class="smallcoll"><a href="/counsellingclub/collegelist.php?q=law"><span> <img class= "pngicon2" src="image/law.png" alt=""></span>
<span><h6 class="lead" id="icontext2">LAW</h6></span>

</a></div>

   
<!-- ADMISSION 20201 -->
<div class="adsec">
<div class="" id="cont2">AADMISSION 2021</div>

<div class="bttn">
<button type="button" class="btn-pills btn-outline-secondary">BTECH ADMISSON 2021</button>
<button type="button" class="btn btn-outline-success">MBA ADMISSON 2021</button>
<button type="button" class="btn btn-outline-danger">MBBS ADMISSON 2021</button>
<button type="button" class="btn btn-outline-warning">BAMS ADMISSON 2021</button>
<button type="button" class="btn btn-outline-info">DIPLOMA ADMISSON 2021</button>
<button type="button" class="btn btn-outline-light">ARCHITECTURE ADMISSON 2021</button>
<button type="button" class="btn btn-outline-dark">PGDM ADMISSON 2021</button>


</div>
</div>

<!-- php to fetch college from database÷ -->
<?php
include "partials/db_conn.php";
$sql = "SELECT * FROM `college`";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);
$cat = $row['1'];
$image = $row['3'];


?>
<div class="titleflex"><h4><div class="" id="cont2">TOP FEATURED COLLEGES</div></h4></div>
<!-- featured college  -->
<div class="container1" id="collegelist">
<div class="row2">
<div class="col2"><?php echo "".$cat?></div>
<div class="col2"><?php echo "".$row['3']?></div>
<div class="col2">3</div>
<div class="col2">4</div></div>
<div class="row2">
<div class="col2">1</div>
<div class="col2">2</div>
<div class="col2">3</div>
<div class="col2">4</div></div>

</div>';

<!-- SKILL COURSES -->
<div class="adsec">
<div class="" id="cont2">TOP DEMAND SKILLS </div>

<div class="bttn"><button type="button" class="btn btn-primary">GRAPHICS DESIGING</button>
<button type="button" class="btn btn-outline-secondary">WEB DEVELOPMENT</button>
<button type="button" class="btn btn-outline-success">UI/UX DESIGING</button>
<button type="button" class="btn btn-outline-danger">ITI</button>
<button type="button" class="btn btn-outline-warning">APP DEVELOPMENT</button>
<button type="button" class="btn btn-outline-info">PHARMACY</button>
<button type="button" class="btn btn-outline-light">NUSRSUING</button>
<button type="button" class="btn btn-outline-dark">POLYTECHINIC</button>


</div>
</div>
<!-- footer including  -->
<?php include "footer.php"?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>