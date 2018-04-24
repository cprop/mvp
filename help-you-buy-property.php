<?php include 'header.php';?>

<!--Page Content-->
<section class="top-spacong middle-section buyproperty">
	<div class="container">
    	<div class="row">
        	<div class="col-12 buy-property-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="padding-bottom: 20px;">
            	<h2>Overview of Purchase Process</h2>
            </div>
        </div>
        
		<div class="row">
			<div class="col-lg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
				<img src="images/process-flowchart-help.png" alt="" style="text-align:center;display:block;margin:0 auto;">
			</div>
		</div>

            
        <div class="row">
            <div class="col-12 site-popup wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <button type="button" class="popup-form" data-toggle="modal" data-target="#RequestButton">Next: Create Free CPROP Account</button>
                <!-- Find An Agent Now Popup  -->
				<div class="container request-popup">
                  <!-- Request Call Form -->
                  <div class="modal fade" id="RequestButton" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body row">
                        
                        	<div class="col-lg-7 left-form">
                            	<h3>Sign in</h3>
                                <form action="real-estate-agent" method="post">
                                	<div class="email">
    	                            	<label>Email :</label>
	                                	<input type="text" name="email" placeholder="Username" value="Demo">
                                    </div>
                                    <div class="password">
	                                    <label>Password :</label>
    	                            	<input type="password" name="password" placeholder="Password" value="demo123">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                    	<input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <input type="submit" value="Log in" name="login">
                                </form>
                                <span class="rigister-now">Don’t have an account ? <a href="#1">Register now</a></span>
                            </div>
                            
                            <div class="col-lg-5 right-signin">
                            	<h3>Sign in with</h3>
                                <ul class="sign-in-with">
                                	<li class="sign-qq"><a href="#"><img src="images/qq-icon.svg" alt="image"> SIGN IN WITH QQ</a></li>
                                	<li class="sign-welbo"><a href="#"><img src="images/welbo-icon.svg" alt="image"> SIGN IN WITH WEIBO</a></li>
                                </ul>
                            </div>
                            
                        </div>
                      </div>
                      
                    </div>
                  </div>
				</div>
            </div>
            <p class="team-con wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">By using the CPROP real estate agent search tool, you agree that Juwai may share your contact information with CPROP and you agree to the CPROP Terms &amp; Conditions.</p>
        </div>
        
    </div>
</section>
<!--End Page Content-->

<?php include 'footer.php';?>