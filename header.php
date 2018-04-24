<!DOCTYPE html>
<html lang="en">
   <head>
		<!-- Google Analytics -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104291020-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-104291020-2');
		</script>

   
      <!-- Basic Page Needs -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>CPROP MVP</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicons  -->
	  <link rel="icon" href="images/favicon.ico">
      <!--Style CSS-->
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!--[if gte IE 9]<style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>

<body id="top">
<div class="top-bar">
    <div class="container">
    	<div class="row">
        	<div class="col">
            	<ul class="inline-block">
                    <li><a href="#1"><img src="images/account-icon.svg" alt="Account Icon"> My Account</a></li>
                    <li><a href="wishlist"><img src="images/wishlist-icon.svg" alt="Account Icon"> My Wishlist</a></li>
                    <li><button type="button" data-toggle="modal" data-target="#Login"><img src="images/login-icon.svg" alt="Account Icon"> Login</button></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
<header id="mainNav" class="navbar-fixed-top">
   <div id="FixTopBar">
        <div class="container logo-search-box">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Logo -->
                     <div class="logo pull-left">
                        <a href="/" target="_blank" title="Property Portal Logo"><img src="images/portal-logo.svg" alt="Property Portal Logo" width="180" height="73"></a>
                        <a href="/" title="CPROP"><img src="images/logo.jpg" alt="CPROP"></a>
                     </div>
                 </div>
                 
                 <div class="col-lg-7">
                 
                    <div class="search-box">
                        <form action="search-result" method="post">
                            <input type="search" placeholder="Search here..." name="search" >
                            <select>
                                <option> Regions </option>
                                <option> Europe </option>
                                <option> Canada </option>
                                <option> USA </option>
                                <option> China </option>
                            </select>
                            <input type="submit" value="" />
                        </form>
                    </div>
                    
                   <div class="language-flag">
                       <form id="form1" runat="server">
    <div id="google_translate_element" style="display: none"></div>    
    <ul>
        <li class="init"><img src="images/english.jpg" alt="Flag image"></li>
        
        <li data-value="value 1"><a href="javascript:;" id="English" onclick="translateLanguage(this.id);">
            <img src="images/english.jpg" alt="" /></a></li>
            
        <li data-value="value 1"><a href="javascript:;" id="Chinese" onclick="translateLanguage(this.id);">
            <img src="images/chinese.jpg" alt="" /></a></li>
            
        <li data-value="value 2"><a href="javascript:;" id="French" onclick="translateLanguage(this.id);">
            <img src="images/french.jpg" alt="" /></a></li>
            
        <li data-value="value 3"><a href="javascript:;" id="German" onclick="translateLanguage(this.id);">     
            <img src="images/german.jpg" alt="" /></a></li>
            
        <li data-value="value 4"><a href="javascript:;" id="Japanese" onclick="translateLanguage(this.id);">
            <img src="images/japanese.jpg" alt="" /></a></li>
            
        <li data-value="value 5"><a href="javascript:;" id="Russian" onclick="translateLanguage(this.id);">
            <img src="images/russian.jpg" alt="" /></a></li>
            
        <li data-value="value 5"><a href="javascript:;" id="Spanish" onclick="translateLanguage(this.id);">
            <img src="images/spanish.jpg" alt="" /></a></li>
            
        <li data-value="value 6"><a href="javascript:;" id="Italian" onclick="translateLanguage(this.id);">
            <img src="images/italian.jpg" alt="" /></a></li>
                
        <li data-value="value 7"><a href="javascript:;" id="Turkish" onclick="translateLanguage(this.id);">
            <img src="images/turkish.jpg" alt="" /></a></li>
        
    </ul>
    </form> 
                   </div>
                    
                 </div>
                <!-- End Slim Menu -->
             </div>
        </div>
         
        <nav class="nav-bar">
             <div class="container">
                <div class="row">
                   <div class="col">
                    <!-- Slim Menu -->
                    <div class="main-menu">
                        <ul class="slimmenu"> 
                          <?php 
                           $currentFile = $_SERVER["PHP_SELF"];
   $parts = Explode('/', $currentFile);
  $page=  $parts[count($parts) - 1]; ?>
                                              
<li <?php if($page == 'my-transactions.php' || $page == 'my-transactions-task.php'  || $page == 'my-transactions-active-task.php'  || $page == 'transaction-progress.php') { ?>class="active"<?php } ?>><a href="my-transactions">My Transactions</a></li><li <?php if($page == 'properties-landing.php' || $page == 'regions.php') { ?>class="active"<?php } ?>><a href="properties-landing">Properties</a><ul><li><a href="regions">Europe</a></li>
                                    <li><a href="regions">Canada</a></li>
                                    <li><a href="regions">USA</a></li>
                                    <li><a href="regions">China</a></li>
                                </ul></li><li <?php if($page == 'featured-agent.php' || $page == 'agents-you-work-with.php' || $page == 'real-estate-agent.php' || $page == 'about-agent.php' || $page == 'client-reviews.php') { ?>class="active"<?php } ?>><a href="real-estate-agent">Real Estate Agents</a>

<ul>
                                  <li><a href="agents-you-work-with">Agents You Work With</a></li>
                                    
                                </ul>
                                </li><li><a href="#">Service Providers</a>
<ul>
                                	<li><a href="#1">Attorneys</a></li>
                                    <li><a href="#1">Insurance Brokers</a></li>
                                    <li><a href="#1">Mortgage Brokers</a></li>
                                    <li><a href="#1">Home Appraisers</a></li>
                                    <li><a href="#1">Home Inspectors</a></li>
                                    <li><a href="#1">Translators</a></li>
                                    <li><a href="#1">Title Companies</a></li>
                                </ul></li>
</ul>
                    </div>
                     <div class="float-right phone-call">
                        <a href="tel:+13478070784"> <img src="images/phone-icon.svg" alt="icon">+1 (347) 807-0784</a>
                    </div>
                  </div>
                </div>
             </div>
         </nav>
	</div>
</header>

<!--Start Wrapper-->
<div class="wrapper">