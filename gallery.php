<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<head>
	<style>
	body  {
    background-repeat:repeat;
    background-color:#C2D1F0;
		}
   a.gallery{
      color:red;
      background-color:white;
    }
	ul {
    list-style-type: none;
    margin: 10;
    padding: 10;
		}

	a,li {
    display: inline;
     font-size: 30px;
    text-decoration: none;
		}
	a:hover {
    background-color:#E0CCFF;
		}
	div.list {
	font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
	z-index: 1;
	opacity:0.7;
    background-color:#F0E0FF;
    font-color:black;
    margin:10px;
    padding:8px;
	}
	div.image{
		width: 700px;
		margin: auto;
	}

  nav {
      font-family: Goudy Old Style,Garamond,Big Caslon,Times New Roman,serif;
       z-index: 1;
       font-size: 20px;
    line-height:30px;
    background-color:white;
    opacity:0.7;
    height:500px;
    width:270px;
    float:right;
    padding:5px; position:relative;
    top:117px;
    left:1025px;
}
  pre.sky{
    position:fixed;
  }
</style>
</head>

<body>
<div class="list">
<ul >
  <li ><A HREF="home.php?">&nbsp Home &nbsp </A></li>
  <li > </li>
  <li ><A HREF="gallery.php?" class="gallery">&nbsp Gallery &nbsp </A></li>
  <li >&nbsp  </li>
  <li ><A HREF="menu.php?" >&nbsp Menu &nbsp</A></li>
 <li > &nbsp  </li>
  <li ><A HREF="tableBooking.php?">&nbsp Table Booking &nbsp</A></li>
 <li >   </li>
  <li ><A HREF="bookingStatus.php?">&nbsp Booking Status &nbsp</A></li>
 <li >  </li>
  <li ><A HREF="comment.php?">&nbsp Visitor's Comment &nbsp</A></li>
 <li >&nbsp </li>
  <li ><A HREF="contactUs.php?">&nbsp Contact Us &nbsp</A></li>
</ul>
</div>
<div class="image">
	<img id="top"src="">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		  <li data-target="#myCarousel" data-slide-to="5"></li>
		  <li data-target="#myCarousel" data-slide-to="6"></li>
		  <li data-target="#myCarousel" data-slide-to="7"></li>
		  <li data-target="#myCarousel" data-slide-to="8"></li>
		  <li data-target="#myCarousel" data-slide-to="9"></li>
		  <li data-target="#myCarousel" data-slide-to="10"></li>
		  <li data-target="#myCarousel" data-slide-to="11"></li>
	    <li data-target="#myCarousel" data-slide-to="12"></li>
			<li data-target="#myCarousel" data-slide-to="13"></li>
	  </ol>


	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="images/img.jpg" alt="Chania">
	    </div>
	    <div class="item">
	      <img src="images/img1.jpg" alt="Chania">

	    </div>
	    <div class="item">
	      <img src="images/img2.jpg" alt="Flower">

	    </div>
	    <div class="item">
	      <img src="images/img5.jpg" alt="Flower">

	    </div>
			<div class="item">
				<img src="images/img6.jpg" alt="Flower">

			</div>
			<div class="item">
					<img src="images/img7.jpg" alt="Flower">

			</div>
		  <div class="item">
				<img src="images/img10.jpg" alt="Flower">

			</div>
			<div class="item">
				<img src="images/img12.jpg" alt="Flower">

			</div>
		 <div class="item">
			 <img src="images/img13.jpg" alt="Flower">

		 </div>
			<div class="item">
				<img src="images/img14.jpg" alt="Flower">

			</div>
		 <div class="item">
			 <img src="images/img15.jpg" alt="Flower">

		 </div>
		 <div class="item">
				<img src="images/img17.jpg" alt="Flower">

			</div>

			<div class="item">
				<img src="images/img18.jpg" alt="Flower">

			</div>

			<div class="item">
				<img src="images/img19.jpg" alt="Flower">

			</div>
		  <div class="item">
			 <img src="images/img20.jpg" alt="Flower">

			</div>

	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<br>
</div>
</body>
</html>
