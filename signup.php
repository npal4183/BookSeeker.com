<?php
	require "header.php";
	require 'sidebar.php';
	?>

<main>
	
		<div class="form-style-10">
<h1>Sign Up Now!<span>START SELLING YOUR NEW AND OLD BOOKS TODAY.</h1>
<form method="post" action="includes/signup.inc.php">
    <div class="section"><span>1</span>First Name & Address</div>
    <div class="inner-wrap">
        <label>USERNAME <input type="text" name="uname" /></label>
        <label class="label-half">First Name <input type="text" name="fname" /></label>
        <label class="label-half">Last Name <input type="text" name="lname" /></label>
        <label>Address <textarea name="address"></textarea></label>
    </div>

    <div class="section"><span>2</span>Email & Phone</div>
    <div class="inner-wrap">
        <label>Email Address <input type="email" name="mail" /></label>	
        <label>Phone Number <input type="text" name="phone" /></label>
    </div>

    <div class="section"><span>3</span>Passwords</div>
        <div class="inner-wrap">
        <label class="label-half">Password <input type="password" name="pwd" /></label>
        <label class="label-half">Confirm Password <input type="password" name="pwd_repeat" /></label>
    </div>
    <div class="section"><span>4</span>Are You Book Retailer</div>
    <div class="inner-wrap">
        <label class="label-half">Yse <input type="radio" name="seller" value="Yse" /></label>	
        <label class="label-half">No <input type="radio" name="seller" value="No" /></label>
    </div>
    <div class="button-section">
     <input type="submit" name="signup-submit" value="Sign Up" />
    </div>
</form>
</div>
</main>

<?php
	require "footer.php";
	?>	