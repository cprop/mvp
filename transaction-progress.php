<?php include 'header.php';?>

<!--Page Content-->
<section class="top-spacong middle-section my-transactions-task">
	<div class="container">
    	<div class="row mb-4">
        	<div class="col-12 agent-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            	<h2>Li Qiang</h2>
                <span class="buy-update"><img src="images/buyer-requests-icon.svg" alt="Icon">  Buyer Requests Update</span>
            </div>
            
            <div class="col-12 pt-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            	<div>13560 Nightsky Drive, Santa Rosa, California, United States</div>
			</div>
            
        </div>
        
        
        <div class="row">
        
        	<div class="col-lg-3 property-leftbar wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            	<!-- Left Bar -->
                <img src="images/property-image5.jpg" alt="image">
                
                <div class="list-box">
                	<div class="list-title">
    		            <h4>Buyer’s Roster</h4>
		                
                        <button type="button" class="edit-button" data-toggle="modal" data-target="#BuyerEdit">
                        	<img src="images/edit-icon.svg" alt="Icon">
                        </button>
		                
                
                    </div>
                    <ul class="buyer-add-list">
                    	<li>Buyer <span>Li Qiang</span> </li>
                        <li>Real Estate Attorney <span>David Collier</span> </li>
                        <li>Home Inspector <span>Ken Hastings</span> </li>
                        <li>Mortgage Broker <span>Glenn Groves</span> </li>
                    </ul>
                </div>
                
                <div class="list-box">
                	<div class="list-title">
    		            <h4>Seller’s Roster</h4>
		                
                        <button type="button" class="edit-button" data-toggle="modal" data-target="#SellersEdit">
                        	<img src="images/edit-icon.svg" alt="Icon">
                        </button>
		                
                
                    </div>
                    <ul class="buyer-add-list">
                    	<li>Seller <span>Frank Groves</span> </li>
                        <li>Seller’s Agent <span>Daphne Peterson</span> </li>
                        <li>Seller’s Attorney <span>Michael Miller</span> </li>
                    </ul>
                </div>
                <!-- End Left Bar -->
            </div>
            
            <div class="col properties-rightside wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            	<!-- Right Bar -->
				<h3 class="progress-title">Transaction Progress</h3>
                    <!-- Process Bar -->
                    <ul class="transaction_progress only-progress-page">
                    	<li class="current"><span>1</span>Onboarding</li>
                        <li class="current"><span>2</span>Agent Selection</li>
                        <li><span>3</span>Agree to Terms</li>
                        <li><span>4</span>Financing</li>
                        <li><span>5</span>Closing</li>
                    </ul>
                    
                    
                    
                    <div class="past-due-date stage-title">
                    	<h4>Stage 1: Onboarding</h4>
					</div>   
                                             
                    <div class="due-date-list pro-list">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Document</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Agency Disclosure Form.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        <tr>
                                            <td>Power of Attorney.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Multiple Buyer Disclosure.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Buyer Broker Agreement.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Affilated Business Disclosure.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
					<div class="past-due-date stage-title">
                    	<h4>Stage 2: Property Search</h4>
					</div>                            
                    <div class="due-date-list pro-list">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Document</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>1354 Nightsky Drive Property Profile Sheet.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                    
                    <div class="past-due-date stage-title">
                    	<h4>Stage 3: Agree On Terms of Sale</h4>
					</div>                            
                    <div class="due-date-list pro-list">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Document</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Home Inspection Report.pdf</td>
                                            <td>Complete</td>
                                        </tr>
                                        <tr>
                                            <td>Offer Form.pdf</td>
                                            <td>In Progress</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                    
                <!-- End Right Bar -->                        
            </div>         	

        </div>
        
    </div>
</section>
<!--End Page Content-->

<?php include 'footer.php';?>

<!-- Date Picker -->
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script>
		/* ----- Date 1 ----- */
        $('.form_date').datetimepicker({ language:  'fr', weekStart: 1, todayBtn:  1, autoclose: 1, todayHighlight: 1, startView: 2, minView: 2, forceParse: 0 });
		/* ----- Date 2 ----- */
		$('.form_date1').datetimepicker({ language:  'fr', weekStart: 1, todayBtn:  1, autoclose: 1, todayHighlight: 1, startView: 2, minView: 2, forceParse: 0 });
	
	
	/* ====== Click to Radio Button open Div ====== */
	$(document).ready(function() {
		// By Default Disable radio button
		$(".first").attr('disabled', false);
		$(".second").attr('disabled', true);
		$(".modal-body .first").css('opacity', '1');
		$(".modal-body .second").css('opacity', '0.2'); // This line is used to lightly hide label for disable radio buttons.
			// Disable radio buttons function on Check Disable radio button.
			
		$(".date-format").click(function(){
			$(".second").attr('checked', false);
				$(".second").attr('disabled', true);
				$(".modal-body .first").css('opacity', '1');
				$(".modal-body .second").css('opacity', '0.2');
				$(".first").attr('checked', true);
				$(".first").attr('disabled', false);
					
		});
		
		
		$(".select-box").click(function(){
			$(".second").attr('checked', false);
				$(".second").attr('disabled', false);
				$(".first").attr('disabled', true);
				
				$(".modal-body .second").css('opacity', '1');
				$(".modal-body .first").css('opacity', '0.2');
				$(".second").attr('checked', true);
				
					
		});
	}); 
	</script>