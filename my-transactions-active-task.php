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
        
        	<div class="col-lg-3 property-leftbar">
            	<!-- Left Bar -->
                <img class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" src="images/property-image4.jpg" alt="image">
                
                <div class="list-box wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                	<div class="list-title">
                        <h4><a href="" data-toggle="modal" data-target="#quick_ontact">Buyer’s Roster</a></h4>
                        <button type="button" class="edit-button" data-toggle="modal" data-target="#buyer_seller_roster_edit">
                        	<img src="images/edit-icon.svg" alt="Icon">
                        </button> 
                    </div>
                    <ul class="buyer-add-list">
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Buyer<span>Li Qiang</span></a></li>
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Real Estate Attorney <span>David Collier</span></a></li>
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Home Inspector <span>Ken Hastings</span></a></li>
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Mortgage Broker <span>Glenn Groves</span></a></li>
                    </ul>
                </div> 
                <div class="list-box wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                	<div class="list-title">
                        <h4><a href="" data-toggle="modal" data-target="#quick_ontact">Seller’s Roster</a></h4> 
                        <button type="button" class="edit-button" data-toggle="modal" data-target="#buyer_seller_roster_edit">
                        	<img src="images/edit-icon.svg" alt="Icon">
                        </button> 
                    </div>
                    <ul class="buyer-add-list">
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Seller <span>Frank Groves</span></a></li>
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Seller’s Agent <span>Daphne Peterson</span></a></li>
                        <li><a href="" data-toggle="modal" data-target="#quick_ontact">Seller’s Attorney <span>Michael Miller</span></a></li>
                    </ul>
                </div>
                <!-- End Left Bar -->
            </div>
            
            <div class="col properties-rightside">
            	<!-- Right Bar -->
				<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Transaction Progress</h3>
                    <!-- Process Bar -->
                    <div class="process-plan wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="proce-line"></div>
                            <ul class="col-12">
                                <li class="blank active proces"><span><img src="images/right-process-arrow.svg" alt="icon"></span></li>
                                <li class="blank active proces"><span><img src="images/right-process-arrow.svg" alt="icon"></span></li>
                                <li class="blank active"><span></span></li>
                                <li class="blank"><span></span></li>
                                <li class="blank"><span></span></li>
                            </ul>
                        </div>
                    
                    <h4 class="blue-color wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Stage 3: Agree On Terms of Sale</h4>
                    
                    <div class="property-infotab">
    	            <ul class="nav nav-pills wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#tasks">Tasks</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#document">Documents</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#timeline">Timeline</a></li>
                    </ul>
        			<!-- Tab panes -->
	                <div class="tab-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    	<!-- Tab 1 -->
                        <div class="tab-pane active pt-4" id="tasks">
                        	<div class="past-due-date">
                                <h3>Active Tasks</h3>
                                <span class="manage-task float-right tak-btn"><a href="my-transactions-task">Save Changes</a></span>
                            </div>                            
                    		<div class="due-date-list active-tasks-list">
                        <table>
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Assigned To</th>
                                            <th>Due Date</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Home Inspection Report</td>
                                            <td>Ken Hastings</td>
                                            <td>January 5</td>
                                            <td class="close-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1">&times;</button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Radon Inspection Report</td>
                                            <td>Ken Hastings</td>
                                            <td>January 10</td>
                                            <td class="close-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1">&times;</button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Termite Inspection Report</td>
                                            <td>Ken Hastings</td>
                                            <td>January 10</td>
                                            <td class="close-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1">&times;</button>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Finalize Deal Sheet</td>
                                            <td>You</td>
                                            <td>Pending</td>
                                            <td class="close-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1">&times;</button>
                                            </td>
                                        </tr>
                                        
                                        
                                        
                                    </tbody>
                                </table>
                        <h3 class="add-document"><a href="#"><img src="images/plus-icon.svg" alt="Plus Icon"> Add New Task</a></h3>
                    </div>
                    
                            <div class="past-due-date">
                                <h3>Other Available Tasks</h3>
                            </div>                            
                    		<div class="due-date-list active-tasks-list">
                        <table>
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Assigned To</th>
                                            <th>Due Date</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Share HOA Rules & Regulations</td>
                                            <td>You</td>
                                            <td>TBD</td>
                                            <td class="plus-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1"> + </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Share Financial Statements</td>
                                            <td>You</td>
                                            <td>TBD</td>
                                            <td class="plus-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1"> + </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Share By-Laws</td>
                                            <td>You</td>
                                            <td>TBD</td>
                                            <td class="plus-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1"> + </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Share Offering Plan &amp; Amendments</td>
                                            <td>You</td>
                                            <td>TBD</td>
                                            <td class="plus-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1"> + </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Share Bold Minutes</td>
                                            <td>You</td>
                                            <td>TBD</td>
                                            <td class="plus-button">
                                                <button type="button" data-toggle="modal" data-target="#BuyerEdit1"> + </button>
                                            </td>
                                        </tr>
                                        
                                       
                                    </tbody>
                                </table>
                    </div>
                        </div>
                        <!-- Tab 2 -->
                        <div id="document" class="tab-pane fade">
                            <h4 class="pt-5">Document Comming soon</h4>
                        </div>
                        <!-- Tab 3 -->
                        <div id="timeline" class="tab-pane fade">
                            <h4 class="pt-5">Timeline Comming soon</h4>
                        </div>
                    </div>
                </div>
                
                    
                    
                    
                    
                <!-- End Right Bar -->                        
            </div>        	

        </div>
        
    </div>
</section>
<!--End Page Content-->

<!-- Buyers and Sellers Quick Contact Popup -->
<div class="container request-popup">
    <!-- Request Call Form -->
    <div class="modal fade" id="quick_ontact" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content gray">
            <div class="modal-header">
            <button type="button" class="close-btn" data-dismiss="modal">&times;</button>
                <h4>Quick Contact</h4>
            </div>
            <div class="modal-body">
                <div class="agent_contact_info popup">
                <p><strong>David Collier</strong> <br> Sotheby's Santa Rosa</p>
                <p><strong>Contact Info</strong><br>
                        <a href="tel:7075657000">707-565-7000</a> cell <br>
                        <a href="tel:7075657000">707-565-7000</a> x220 Office <br>
                <a href="mailto:davec@sothebyssantarosa.com">davec@sothebyssantarosa.com</a> </p>
                <form class="agent_contact_form">
                    <label class="title"><strong>Message</strong></label>
                    <textarea rows="4" placeholder=""></textarea>
                    <input value="Send" type="submit">
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div> 

<!-- Buyer’s and Seller's Roster Edit Popup  -->
<div class="container request-popup">
    <!-- Request Call Form -->
    <div class="modal fade" id="buyer_seller_roster_edit" role="dialog">
        <div class="modal-dialog">                    
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-dismiss="modal">&times;</button>
                    <h4>Add an Agent</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <label class="title">Name</label>
                        <input type="text" name="name" placeholder="Adam Koehler">
                        
                        <label class="title">Email Address</label>
                        <input type="email" name="email" placeholder="adam.koehler@reversedout.com">
                        
                        <label class="title">Phone Number</label>
                        <input type="number" name="phonenumber" placeholder="480-500-3794">
                        
                        <label class="title">Brokerage</label>
                        <input type="text" name="brokerage" placeholder="Keller Williams">
                        
                        <input type="submit" value="Save" >
                        <button type="button" class="close-text" data-dismiss="modal">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
	
	/* Click to remove */
	$(function(){
		$('.close-button button').click(function(){
			$(this).parents('tr').first().remove ();		
		});
	});
	</script>