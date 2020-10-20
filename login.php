
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="header">
		<h2 class="l1">Please LogIn Here</h2>
	</div>
        <section class="cm-login">
	
	<form  class="cm-login-form" method="post" action="login.php">

		

			<label>Email</label>
			<input type="text" class="cm-text-input" name="Email" >

		
			<label>Password</label>
			<input type="password" class="cm-text-input" name="password">
		
        <div class="remember-me">
               <input type="checkbox" name="remember" id="remember" class="cm-toggle" /> Remember Me 
            </div>
		
			<button type="submit" class="cm-submit" name="login_btn">Login</button>

                    <a class="lost-pass" href="#lost-password">
            <i class="fa fa-frown-o"></i>
            I have lost my password </a>
            <div class="social-login">
               <h4> Social Login </h4>
               <p> Login using your social media profile. </p>
                <a class="cm-btn btn-fb" href="#fb"> Facebook</a>
                   <a class="cm-btn btn-lk" href="#lk"> LinkedIn</a>
                   <a class="cm-btn btn-tw" href="#tw"> Twitter</a>
            </div>
		<p>
            Not yet a member? <a href="index.php #register" class="l2"><b>Sign up</b></a>
		</p>
	</form>
    </section>
    
    
          <div class="dim-overlay"></div>
    
    
    <style>
     

body {
	font-family: 'Montserrat', sans-serif;
	background: #19092b;
	color: rgba(255, 255, 255, 0.90);
}
        .l1{
            text-align: center;
            margin-top: 20px;
        }
        .l2{
            
            font-family: cursive;
            font-weight: 250;
           color:#FFE4E1;
            
        }

.cm-login {
    margin-left: 350px;

}

.cm-login-form {
	user-select: none;
	-webkit-user-select: none;
	padding: 20px;
    margin-bottom: 20px;
}

.cm-login-form .cm-text-input {
	background: rgba(255, 255, 255, 0.5);
	padding: 10px;
	display: black;
	width: 100%;
	border: 0;
	outline: 0;
	border-radius: 16px;
	margin: 15px 0;
}

.cm-text-input::placeholder {
	color: rgba(255, 255, 255, 0.85);
}

.cm-login-form .fa {
	color: rgba(255, 255, 255, 0.45);
}

.remember-me,
a.lost-pass {
	text-decoration: none;
	color: rgba(255, 255, 255, 0.75);
	display: block;
	margin: 10px 0;
}

.social-login {
	text-align: center;
	margin-top: 30px;
	color: rgba(255, 255, 255, 0.75);
}

.social-login p {
	margin: 10px;
	font-size: 13px;
	text-align: left;
}


/* Social Buttons */

.cm-btn {
	text-decoration: none;
	display: inline-block;
	padding: 10px;
	border-radius: 2px;
	color: rgba(255, 255, 255, 0.85);
}

.btn-fb {
	background: #3b5998
}

.btn-tw {
	background: #00acee
}

.btn-lk {
	background: #0077B5
}

.btn-fb:before,
.btn-tw:before,
.btn-lk {
	font-family: FontAwesome;
}

.btn-fb:before {
	content: '\f09a'
}

.btn-tw:before {
	content: '\f099'
}

.btn-lk:before {
	content: '\f0e1'
}


/* Toggle Button */

.cm-toggle {
	-webkit-appearance: none;
	-webkit-tap-highlight-color: transparent;
	position: relative;
	border: 0;
	outline: 0;
	cursor: pointer;
}

.cm-toggle:after {
	content: '';
	width: 36px;
	height: 14px;
	display: inline-block;
	background: rgba(255, 255, 255, 0.45);
	border-radius: 18px;
	clear: both;
}

.cm-toggle:before {
	content: '';
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	left: 0;
	top: -3px;
	border-radius: 50%;
	background: rgb(255, 255, 255);
	box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}

.cm-toggle:checked:before {
	left: 18px;
	box-shadow: -1px 1px 3px rgba(0, 0, 0, 0.6);
}

.cm-toggle:checked:after {
	background: #16a085;
}

.cm-toggle,
.cm-toggle:before,
.cm-toggle:after,
.cm-toggle:checked:before,
.cm-toggle:checked:after {
	transition: ease .3s;
	-webkit-transition: ease .3s;
	-moz-transition: ease .3s;
	-o-transition: ease .3s;
}


/* Submit Button */

.cm-submit {
	-webkit-appearance: none;
	background: #EB3349;
	/* fallback for old browsers */
	background: -webkit-linear-gradient(to top, #F45C43, #EB3349);
	/* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to top, #F45C43, #EB3349);
	/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	padding: 10px 16px;
	border: 0;
	width: 100%;
	border-radius: 16px;
	color: rgba(255, 255, 255, 0.85);
}

.btn-submit:focus {
	outline: 0;
}

.cm-btn,
.btn-submit {
	-webkit-tap-highlight-color: transparent;
	transition: .3s;
	cursor: pointer;
}

. .cm-btn:hover,
.cm-submit:hover {
	opacity: 0.9;
	transition: .3s;
}


/* Animation */

@keyframes slideLeft {
	from {
		left: -100%;
	}
	to {
		left: 100px;
	}
}


/* Responsive PC view*/

@media only screen and (min-width: 480px) {
	body {
		background: url('img/b1.jpg') no-repeat;
		background-size:cover;
        
	}
	.cm-login-form {
		position: absolute;
		top: 20px;
        bottom: 50px;
		left: 100px;
		width: 360px;
		height: 460px;
		z-index: 5;
		box-shadow: 1px 1px 8px 1px rgba(255, 255, 255, 0.65);
		position: relative;
		background: rgba(255, 255, 255, 0.25);
		border: 1px solid rgba(255, 255, 255, 0.65);
		animation: slideLeft 1s ease forwards;
		-webkit-animation: slideLeft 1s ease forwards;
	}
	/* Dim background effect */
	.dim-overlay {
		display: block;
	}
	.dim-overlay:before {
		content: "";
		background-color: rgba(0, 0, 0, .25);
		height: 100vh;
		left: 0;
		position: fixed;
		top: 0;
		width: 100%;
		overflow: hidden;
		z-index: 2;
	}
}
    </style>
</body>
</html>