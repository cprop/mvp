</div>
<!--End Wrapper-->
<!-- Login Popup -->
<div class="col	site-popup login-popup-btm">
    <!-- Find An Agent Now Popup  -->
    <div class="container request-popup">
      <!-- Request Call Form -->
      <div class="modal fade" id="Login" role="dialog">
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
                            <input type="email" name="email" placeholder="Username">
                        </div>
                        <div class="password">
                            <label>Password :</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember Me</label>
                        </div>
                        <input type="submit" value="Log in" name="login">
                    </form>
                    <span class="rigister-now">Don’t have an account ? <a href="/user-registration">Register now</a><br><br>Are you an agent ? <a href="/agent-brokerage-registration">Register here</a></span>
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
<footer class="footer">
	<div class="container">
    	<div class="row">
           <div class="col">
        	<p>Copyright &copy; 2018 CryptoProperties LLC.</p>
            <ul class="right-menu">
            	<li><a href="#">Global Listings</a></li>
                <li><a href="#">Universal New Disk</a></li>
                <li><a href="#">Top Luxury</a></li>
                <li><a href="#">Home Information </a></li>
            </ul>
          </div>
        </div>
    </div>
</footer>
 <!-- Go Top -->
<div class="go-up rounded-top"><img src="images/top-slider-arrow.svg" alt="image"></div>
<!-- End Go Top -->



	<!-- Main Js Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="js/popper.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu JavaScript -->
    <script src="js/jquery.slimmenu.js"></script> 
    <!-- SliderPro JavaScript -->
    <script src="js/jquery.sliderPro.min.js"></script>     
    <!-- WOW Script -->
    <script src="js/wow.min.js"></script>
	<!-- GA Link Tracking -->
    <script src="js/linktracking.js"></script> 
    
    <!-- Google Teanslate Script --> 
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
        type="text/javascript"></script>
    <script>
        function translateLanguage(lang) {

            var $frame = $('.goog-te-menu-frame:first');
            if (!$frame.size()) {
                alert("Error: Could not find Google translate frame.");
                return false;
            }
            $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
            return false;
        }
    </script>
       	
    <!-- Custom Script -->
    <script src="js/custom.js"></script>
          
</body>
</html>