<?php include 'header.php';?>

<!--Page Content-->
<section class="top-spacong middle-section buyproperty">
	<div class="container">
    	<div class="row">
        	<div class="col-12 agent-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            	<h2>Real Estate Agent Search</h2>
            </div>
        </div>
        <form action="featured-agent" method="post">
        <div class="row find-agent justify-content-md-center">
                <div class="col-md-4 find-box">
                    <h4><img src="images/location-icon.svg" alt="icon" >
                    Property Location</h4>
                    <select>
                        <option>United States of America</option>
                        <option>England</option>
                        <option>New Zealand</option>
                        <option>Belize</option>
                    </select>
                    <select>
                        <option>California</option>
                        <option>Greenville</option>
                        <option>Washington</option>
                    </select>
                    <select>
                        <option>City Name (Optional)</option>
                        <option>City Name (Optional)</option>
                        <option>City Name (Optional)</option>
                    </select>
                    <select>
                        <option>Years of Experience</option>
                        <option>At least 1 Year</option>
                        <option>At least 5 Years</option>
                        <option>At least 10 Years</option>
                    </select>
</div>
                <div class="col-md-4 find-box">
                    <h4><img src="images/language-icon.svg" alt="icon" >
                    Preferred Language</h4>
                    <select>
                        <option>Chinese (Mandarin)</option>
                        <option>Chinese (Mandarin)</option>
                        <option>Chinese (Mandarin)</option>
                    </select>
                    <select>
                        <option>Other</option>
                        <option> Other 1</option>
                        <option> Other 2</option>
                    </select> 
                    
</div>
                <div class="col-md-4 find-box">
                    <h4><img src="images/rating.svg" alt="icon" >
                    Experience and Rating</h4>
                    <select>
                        <option>Years of Experience</option>
                        <option>1 Year</option>
                        <option>2 Years</option>
                        <option>3 Years</option>
                        <option>4 Years</option>
                        <option>5 Years</option>
                    </select>

                    <select>
                        <option>Overall rating Score</option>
                        <option>1 Star</option>
                        <option>2 Star</option>
                        <option>3 Star</option>
                        <option>4 Star</option>
                        <option>5 Star</option>
                    </select> 

</div>
                <div class="col-md-4 find-box"> 

                    <h4><img src="images/english-icon.svg" alt="icon" >
                    Your English Fluency</h4>
                    <select>
                        <option>Some spoken English</option>
                        <option>Some Spoken Only</option>
                        <option>Fluent Spoken Only</option>
                        <option>None</option>
                    </select>
                    
                    <select>
                        <option>Some written English</option>
                        <option>Some written English</option>
                        <option>Some written English</option>
                        <option>None</option>
                    </select>
                    
                    <input type="submit" value="Find Agents" name="findagents">
                    </div>
            </div>
        
        </form>
        
        
    </div>
</section>
<!--End Page Content-->

<?php include 'footer.php';?>