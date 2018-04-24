<?php include 'header.php';?>

<!--Page Content-->
<section class="top-spacong middle-section buyproperty">
	<div class="container">
    	<div class="row">
        	<div class="col-12 agent-title">
            	<h2>Real Estate Agent Search</h2>
            </div>
        </div>
        <div class="row">
        	<div class="col">
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
        </div>
         
         
         
               
         
          
        <div class="row featured_agent wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">  
           
           <div class="reviewstop">
               <div class="reviews_filters">
                   <span>Filters:</span>
                   <div class="search_tag">
                       <span>United States <a href="#"><img src="images/close-icon.svg" alt=""></a></span>
                       <span>California <a href="#"><img src="images/close-icon.svg" alt=""></a></span>
                       <span>Los Angeles <a href="#"><img src="images/close-icon.svg" alt=""></a></span>
                       <span>Chinese <a href="#"><img src="images/close-icon.svg" alt=""></a></span> 
                   </div>
                   <div class="resetbtn"><a href="#1">RESET</a></div>
               </div>    
               
               <div class="reviews_pagination">
                   <div class="pagination">
                       <span>Page 1/4</span>
                       <div class="btns">
                       <a class="active" href="#1"><i class="fa fa-caret-left"></i></a>
                       <a href="#1"><i class="fa fa-caret-right"></i></a>
                       </div>
                   </div>
                   <div class="views">
                       <span>View:</span>
                       
                       <select>
                           <option>36</option>
                           <option>48</option>
                           <option>60</option> 
                        </select>
                       
                       <div class="btns">
                       <a class="active" href="#1"><i class="fa fa-th-list"></i></a>
                       <a href="#1"><i class="fa fa-th"></i></a>
                       </div>
                   </div>
               </div>
               
           </div>
           
             <div class="w-100"></div>
             
            <div class="col">
                <h3>Featured Agent</h3>
            </div>
               
            <div class="col-12 agent-list">
            	<div class="media">
                   <div class="img_block">
                	    <a href="about-agent"><img class="align-self-start" src="images/pipermoretti.jpg" alt="image"></a>
                	    <span>98%<span>Match</span></span>
                    </div>
                     
                  	<div class="media-body">
                       <h4><a href="about-agent">Piper Moretti <span>Co-Founder &amp; CEO</span></a></h4>
                       <div class="star-review">
                           <a href="client-reviews">
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon-off.svg"></span>
                            <span class="match-per">(98% Match)</span>
                            <span class="client-review">23 client reviews</span>
                            </a>
                        </div>
                        
                       <p>Piper Moretti is proud to have been a part of the first Bitcoin transaction in SoCal and has completed several transactions to date. Piper moved to Los Angeles in 1993 to pursue a career in entertainment and loved LA so much, she got her real estate license to help others enjoy California as much as she does. Working in Los Angeles over the years as part of the entertainment scene, she knows the city, its hot spots, its hidden gems, and how everything connects. She will use her knowledge and experience to help you find or sell your property using cryptocurrency.</p>
                        
                    <div class="btn"><a href="#">Ask Agent To Contact Me</a></div>
                    <div class="btn orange"><a href="about-agent">Learn more about agent</a></div>
                        
                    </div>
				</div>
                
            </div>
            <div class="col-12 agent-list">
            	<div class="media">
                    <a href="about-agent"><img class="align-self-start" src="images/agent-profile.jpg" alt="image"></a>
                  	<div class="media-body">
                        <h4><a href="about-agent">AgentFirst AgentLast <span>(RE/MAX In Motion)</span></a></h4>
                        <div class="star-review">
                           <a href="client-reviews">
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon-off.svg"></span>
                            <span class="match-per">(98% Match)</span>
                            <span class="client-review">23 client reviews</span>
                            </a>
                        </div>
                        
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit turpis et luctus mollis. Nunc ac porta justo. Phasellus tellus eros, bibendum non malesuada ut, scelerisque vitae sem.</p>
                        
                        <ul>
                        	<li>Morbi congue amet ultrices varius.</li>
                            <li>Morbi congue dui sit amet ultrices varius.</li>
                            <li>Suspendisse a ex ut nunc suscipit in quis felis.</li>
                            <li>Phasellus gravida magnah ornare ultrices.</li>
                        </ul>
                        <div class="btn">
                        	<a href="#">Ask Agent To Contact Me</a>
                        </div>
                        <div class="btn orange"><a href="about-agent">Learn more about agent</a></div>
                        
                    </div>
				</div>
            </div>
            <div class="col-12 agent-list">
            	<div class="media">
                    <a href="about-agent"><img class="align-self-start" src="images/agent-profile.jpg" alt="image"></a>
                  	<div class="media-body">
                        <h4><a href="about-agent">AgentFirst AgentLast <span>(RE/MAX In Motion)</span></a></h4>
                        <div class="star-review">
                           <a href="client-reviews">
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon-off.svg"></span>
                            <span class="match-per">(98% Match)</span>
                            <span class="client-review">23 client reviews</span>
                            </a>
                        </div>
                        
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit turpis et luctus mollis. Nunc ac porta justo. Phasellus tellus eros, bibendum non malesuada ut, scelerisque vitae sem.</p>
                        
                        <ul>
                        	<li>Morbi congue amet ultrices varius.</li>
                            <li>Morbi congue dui sit amet ultrices varius.</li>
                            <li>Suspendisse a ex ut nunc suscipit in quis felis.</li>
                            <li>Phasellus gravida magnah ornare ultrices.</li>
                        </ul>
                        <div class="btn">
                        	<a href="#">Ask Agent To Contact Me</a>
                        </div>
                        <div class="btn orange"><a href="about-agent">Learn more about agent</a></div>
                        
                    </div>
				</div>
            </div>
            <div class="col-12 agent-list">
            	<div class="media">
                    <a href="about-agent"><img class="align-self-start" src="images/agent-profile.jpg" alt="image"></a>
                  	<div class="media-body">
                        <h4><a href="about-agent">AgentFirst AgentLast <span>(RE/MAX In Motion)</span></a></h4>
                        <div class="star-review">
                           <a href="client-reviews">
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon-off.svg"></span>
                            <span class="match-per">(98% Match)</span>
                            <span class="client-review">23 client reviews</span>
                            </a>
                        </div>
                        
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit turpis et luctus mollis. Nunc ac porta justo. Phasellus tellus eros, bibendum non malesuada ut, scelerisque vitae sem.</p>
                        
                        <ul>
                        	<li>Morbi congue amet ultrices varius.</li>
                            <li>Morbi congue dui sit amet ultrices varius.</li>
                            <li>Suspendisse a ex ut nunc suscipit in quis felis.</li>
                            <li>Phasellus gravida magnah ornare ultrices.</li>
                        </ul>
                        <div class="btn">
                        	<a href="#">Ask Agent To Contact Me</a>
                        </div>
                        <div class="btn orange"><a href="about-agent">Learn more about agent</a></div>
                        
                    </div>
				</div>
            </div>
            <div class="col-12 agent-list">
            	<div class="media">
                    <a href="about-agent"><img class="align-self-start" src="images/agent-profile.jpg" alt="image"></a>
                  	<div class="media-body">
                        <h4><a href="about-agent">AgentFirst AgentLast <span>(RE/MAX In Motion)</span></a></h4>
                        <div class="star-review">
                           <a href="client-reviews">
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon.svg"></span>
                            <span><img src="images/star-icon-off.svg"></span>
                            <span class="match-per">(98% Match)</span>
                            <span class="client-review">23 client reviews</span>
                            </a>
                        </div>
                        
                    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum hendrerit turpis et luctus mollis. Nunc ac porta justo. Phasellus tellus eros, bibendum non malesuada ut, scelerisque vitae sem.</p>
                        
                        <ul>
                        	<li>Morbi congue amet ultrices varius.</li>
                            <li>Morbi congue dui sit amet ultrices varius.</li>
                            <li>Suspendisse a ex ut nunc suscipit in quis felis.</li>
                            <li>Phasellus gravida magnah ornare ultrices.</li>
                        </ul>
                        <div class="btn">
                        	<a href="#">Ask Agent To Contact Me</a>
                        </div>
                        <div class="btn orange"><a href="about-agent">Learn more about agent</a></div>
                        
                    </div>
				</div>
            </div>

       		<div class="btn orange" style="margin: 0 auto;text-align: center;"><a href="#">Confirm Agent Selection</a></div>
        </div>
        
    </div>
</section>
<!--End Page Content-->

<?php include 'footer.php';?>