
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Selectize select - Robust Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../../../robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../../robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../../robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../../../robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <!-- build:css robust-assets/css/vendors.min.css-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/bootstrap.css">
    <!-- /build-->
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->

    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/plugins/forms/selects/selectize.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/plugins/forms/selects/selectize.default.css">
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <!-- build:css robust-assets/css/app.min.css-->
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/bootstrap-robust.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../robust-assets/css/colors.css">
    <!-- /build-->
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="robust-content content container-fluid">
      <div class="content-wrapper">

        <div class="content-body"><!-- Selectize selects start -->


<!-- Advance Selectize Options start -->
<section class="advance-options">

	<div class="row match-height">
		<div class="col-xl-6 col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-block">

						<div class="form-group">
							<h5>Lock Single select</h5>
							<p>Add <code>.selectize-locked</code> class to lock single select </p>
							<select class="selectize-locked">
								<option value="">No input allowed...</option>
								<option value="A">Option A</option>
								<option value="B" selected>Option B</option>
								<option value="C">Option C</option>
							</select>
						</div>

						<div class="form-group">
							<h5>Selectize with Remove Button tags</h5>
							<p>Add <code>.remove-tags</code> class to get select with remove button</p>
							<input type="text" class="remove-tags" value="awesome,neat">
						</div>
						<div class="form-group">
							<h5>Selectize with Remove Button tags Disabled</h5>
							<p>Add <code>.remove-tags</code> class to get select with remove button &amp; disabled field</p>
							<input type="text" disabled class="remove-tags" value="you,are,awesome">
						</div>
						<div class="form-group">
							<h5>Selectize with restore on backspace</h5>
							<p>Add <code>.backup-restore</code> class to restore on backspace</p>
							<input type="text" class="backup-restore" value="you,are,awesome">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-block">
						<div class="form-group">
							<h5>Sort options of group</h5>
							<p>Add <code>.selectize-sort</code> class to sort select options </p>
							<select class="selectize-sort " multiple>
								<option value="" selected>Select gear...</option>
								<optgroup label="Climbing">
									<option value="pitons">Pitons</option>
									<option value="cams">Cams</option>
									<option value="nuts">Nuts</option>
									<option value="bolts">Bolts</option>
									<option value="stoppers">Stoppers</option>
									<option value="sling">Sling</option>
								</optgroup>
								<optgroup label="Skiing">
									<option value="skis">Skis</option>
									<option value="skins">Skins</option>
									<option value="poles">Poles</option>
								</optgroup>
							</select>
						</div>
						<div class="form-group">
							<div id="wrapper">
								<h5>Details about each event</h5>
								<p>Add <code>.selectize-event</code> class to find which event fire. </p>

								<select id="selectize-state remove-tags" multiple name="state[]" class="selectize-event">
									<option value="">Select a state...</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY" selected>Wyoming</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<h5>Get Movies List by API</h5>
							<p>Add <code>.selectize-movie</code> class to get movies API. </p>
							<select class="selectize-movie movies">
								<option value="" selected>Find a movie...</option>
							</select>
						</div>
						<div class="form-group">
							<h5>Options with Links</h5>
							<p>Add <code>.selectize-movie</code> class to get movies API. </p>
							<select class="selectize-links">
								<option value="" selected>Find Here..</option>
							</select>
						</div>
						<div class="form-group">
							<h5>Drag &amp; Drop options</h5>
							<p>Add <code>.selectise-drap-drop</code> class to sort options by drag and drop. </p>
							<input type="text" class="selectise-drap-drop" value="drag,these,items,around">
						</div>
						<div class="form-group" dir="rtl">
							<h5>RTL Input Selectize</h5>
							<p>Add <code>.selectize-rtl-input</code> class supports RTL to input. </p>
							<input type="text" class="selectize-rtl-input" value="drag,these,items,around">
						</div>
						<div class="form-group" dir="rtl">
							<h5>RTL Select field Selectize</h5>
							<p>Add <code>.selectize-rtl-select</code> class supports RTL to select </p>
							<select class="selectize-rtl-select">
								<option value="" selected>Select a person...</option>
								<option value="4">Thomas Edison</option>
								<option value="1">Nikola</option>
								<option value="3">Nikola Tesla</option>
								<option value="5">Arnold Schwarzenegger</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Advance Selectize Options end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-light">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <!-- build:js robust-assets/js/vendors.min.js-->
    <script src="../../../robust-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/jquery-sliding-menu.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/sliders/slick/slick.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/plugins/ui/screenfull.min.js" type="text/javascript"></script>
    <!-- /build-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../robust-assets/js/plugins/forms/select/selectize.min.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/core/libraries/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- build:js robust-assets/js/app.min.js-->
    <script src="../../../robust-assets/js/core/robust-menu.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/core/robust.js" type="text/javascript"></script>
    <script src="../../../robust-assets/js/components/ui/fullscreenSearch.js" type="text/javascript"></script>
    <!-- /build-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../robust-assets/js/components/forms/select/form-selectize.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
