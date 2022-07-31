<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap css-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;700&family=Pacifico&family=Russo+One&display=swap" rel="stylesheet">
	<!--css-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--budgetPlanner-->
	<link rel="stylesheet" href="Reference/css/budgetPlanner.css" />

	<title>Budget Planner</title>
	<!--internal css-->
	<style>
		.header{
			height: 600px;
		}
		.header img{
			position: absolute;
			height: 600px;
			width: 100%;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			display: flex;
			flex-direction: column;
		}
	</style>
</head>
<body>
	<!--bootstrap-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!--budgetPlanner-->
	<script src="Reference/javascript/budgetPlanner.js"></script>

	<!--top navigation bar-->
	<div class="navTop">
		<div><a href="#">WELCOME TO WEDDING.LK</a></div>
		<div id="push"><a href="dashboard.php">DASHBOARD</a></div>
		<div><a href="logout.php">LOGOUT</a></div>
	</div>
	<!--/top navigation bar-->
	<!--slider-->
	<div class="header">
		<img src="Reference/Images/content1/image01.jpg" class="img-fluid" alt="Responsive image">
		<!--navigation bar-->
		<div class="nav">
			<div style="font-family: 'Pacifico', cursive;"><a href="#">Wedding.lk</a></div>
			<div id="push1"><a href="index.php">HOME</a></div>
			<div><a href="Vendor.php">VENDORS</a></div>
			<div><a href="about.php">ABOUT</a></div>
			<div><a href="contacts.php">CONTACT</a></div>
		</div>
		<div class="text1">
			<h1 style="font-family: 'Russo One', sans-serif;">Budget Planner</h1>
			<p>Budgeting only has one rule; Do not go over budget.</p>
		</div>
		<!--/navigation bar-->
	</div>
	<!--/slider-->
	<!--content-->
	  <div class="top">
	    <div class="budget">
	      <div class="budget__title">
	        Available Budget in <span class="budget__title--month">%Month%</span>:
	      </div>

	      <div class="budget__value">+ 2,345.64</div>

	      <div class="budget__income clearfix">
	        <div class="budget__income--text">Income</div>
	        <div class="right">
	          <div class="budget__income--value">+ 4,300.00</div>
	          <div class="budget__income--percentage">&nbsp;</div>
	        </div>
	      </div>

	      <div class="budget__expenses clearfix">
	        <div class="budget__expenses--text">Expenses</div>
	        <div class="right clearfix">
	          <div class="budget__expenses--value">- 1,954.36</div>
	          <div class="budget__expenses--percentage">45%</div>
	        </div>
	      </div>
	    </div>
	  </div>


	  <div class="bottom">
	    <div class="add">
	      <div class="add__container">
	        <select class="add__type">
	                        <option value="inc" selected>+</option>
	                        <option value="exp">-</option>
	                    </select>
	        <input type="text" class="add__description" placeholder="Add description">
	        <input type="number" class="add__value" placeholder="Value">
	        <button class="add__btn"><i class="ion-ios-checkmark-outline"></i></button>
	      </div>
	    </div>

	    <div class="container clearfix">
	      <div class="income">
	        <h2 class="income__title">Income</h2>

	        <div class="income__list">
	        </div>
	      </div>


	      <div class="expenses">
	        <h2 class="expenses__title">Expenses</h2>

	        <div class="expenses__list">
	        </div>
	      </div>
	    </div>
	  </div>

	<!--.Footer-->
	<footer class="section footer-classic context-dark bg-image" style="background: black;">
	        <div class="container">
	          <div class="row row-30">
	            <div class="col-md-4 col-xl-5">
	              <div class="pr-xl-4">
	              	<h5>About Wedding.lk</h5>
	                <p style="text-align:justify;">Are you wondering here and there to find wedding vendors according to your budget and preference? Let us take your burden and we promise you to make your big day memorable one. Plan your biggest day with us.Let us know your requirements and we promise you to find the best vendors according to your budget.</p>
	              </div>
	            </div>
	            <div class="col-md-4">
	              <h5>Contacts</h5>
	              <dl class="contact-list">
	                <dt>Address:</dt>
	                <dd>University of Vavuniya,Vavuniya</dd>
	              </dl>
	              <dl class="contact-list">
	                <dt>email:</dt>
	                <dd><a href="mailto:#">weddinglk@gmail.com</a></dd>
	              </dl>
	              <dl class="contact-list">
	                <dt>phones:</dt>
	                <dd>076xxxxxxx</dd>
	              </dl>
	            </div>
	            <div class="col-md-4 col-xl-3">
	              <h5>Links</h5>
	              <ul class="nav-list">
	                <li><a href="budgetPlanner.php">Budget Planner</a></li>
	                <li><a href="guestList.php">Guest List</a></li>
	                <li><a href="checkList.php">Check List</a></li>
	                <li><a href="locations.php">Wedding locations</a></li>
	                <li><a href="review.php">Reviews</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
				<div class="fBottom">
					<!-- Rights-->
	                <p class="rights"><span>©  </span><span class="copyright-year">2022</span><span> </span><span>Wedding.lk</span><span>. </span><span>All Rights Reserved.</span></p>
				</div>	
			</div>
		</section>
		<!-- ./Footer -->

</body>
</html>
