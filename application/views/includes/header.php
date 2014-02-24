<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/bootstrap.min.css');?>">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
  
        <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
        <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/bootstrap.css');?>">
       
       <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/main.css');?>">
       <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/main_login.css');?>">
       <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/profile_view.css');?>">
        <link rel="stylesheet" type='text/css' href="<?php echo base_url('css/template.css');?>">
		
		<script src="<?base_url().'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'?>"></script>
       
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experiensce.</p>
        <![endif]-->
    <div id="wholeSite">
    <div class="navbar navbar-default navbar-fixed-top" id="top-bar">
        <div class="navbar-header" id="nav-bar">
          <a class="navbar-brand" href="#"><img src="<?php echo base_url('logo.png');?>" width="150" height="45" id="logo"></a>
		  
          <?php if($this->session->userdata('userType') == 'A'){ ?>
          <!---start>
      <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="navbar-collapse collapse" id="admin-header">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?=$this->session->userdata('username')?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url().'index.php/borrower/view_borrower_profile_index'?>">View Profile</a></li>
                  <li><?=anchor('administrator/search_accounts', 'Search Accounts')?></li>
                  <li><?=anchor('administrator/create_account', 'Add Account')?></li>
                  <li><?=anchor('logout', 'Logout')?></li>
                </ul>
              </li>
            </ul>
          </div>    
        
          <?php }else if($this->session->userdata('userType') == 'L') { ?>
          <!---start>
          <!-- Collect the nav links, forms, and other content for toggling -->
        
          <div class="navbar-collapse collapse" id="librarian-header">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?=$this->session->userdata('username')?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">View Profile</a></li>
                   <li><a href="<?=base_url().'index.php/librarian/search_reference_index'?>">Search References</a></li>
                   <li class="dropdown-submenu">
                    <a tabindex="-1" href="#">Add Reference</a>
                        <ul class="dropdown-menu">
                             <li> <a href="<?= site_url('librarian/add_reference') ?>">View Add Reference Form</a></li>
                             <li><a href="<?= site_url('librarian/file_upload') ?>">File Upload</a></li>
                        </ul>
                    </li>
                  <li><a href="<?=base_url().'index.php/librarian/view_report_index'?>">Generate Report</a></li>
                  <li><a href="<?=base_url().'index.php/logout'?>">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>     
      <?php }else if($this->session->userdata('userType') == 'S' || $this->session->userdata('userType') == 'F') { ?>
          <!---start>
          <!-- Collect the nav links, forms, and other content for toggling -->
        
          <div class="navbar-collapse collapse" id="user-header">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('username')?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=base_url().'index.php/profile'?>">View Profile</a></li>
                  <li><a href="<?=base_url().'index.php/search'?>">Search References</a></li>
                  <li><a href="<?=base_url().'index.php/cart_controller/view_cart'?>">View Cart</a></li>
                  <li><a href="<?=base_url().'index.php/logout'?>">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>     
      <?php }else{ ?>
		 <!---start>
		  <!-- Collect the nav links, forms, and other content for toggling -->
		<div id="nav-in">
	        <form class="navbar-form navbar-left nav-in-search" role="search"action="http://localhost/icsls/index.php/search/search_rm" method="get" accept-charset="utf-8">
		        <div class="form-group">
					<input type="text" class="form-control" name="keyword" placeholder="Search" value=""/>
				</div>
	        <input class="btn btn-default"type="submit" name="search1" value="Search"/>
			<a href="#advanceSearch" data-toggle="modal"> <input type="submit" name="aSearch" class="btn btn-primary"  value="Advanced Search"/></a>
	        </form>
		    
		</div>
		
		
        <?php } ?>
		
        </div>
    </div>