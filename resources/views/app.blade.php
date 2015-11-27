<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sky-These</title>


	<!-- Bootstrap Core CSS -->
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">

	<!-- Morris -->
	<link href="{{ URL::asset('css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">
	<!-- Gritter -->
	<link href="{{ URL::asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

	<link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

@yield('navigation', View::make('navigation'))

<div id="page-wrapper" class="gray-bg">
	<div class="row border-bottom">
		<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
				<form role="search" class="navbar-form-custom" method="post" action="search_results.html">
					<div class="form-group">
						<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
					</div>
				</form>
			</div>
			<ul class="nav navbar-top-links navbar-right">
				<li>
					<span class="m-r-sm text-muted welcome-message">Welcom to Skylar These</span>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope"></i>  <span class="label label-warning">0</span>
					</a>
					<ul class="dropdown-menu dropdown-messages">
						<li>
							<div class="dropdown-messages-box">
								<a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="img/a7.jpg">
								</a>
								<div>
									<small class="pull-right">46h ago</small>
									<strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
									<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
								</div>
							</div>
						</li>
						<li class="divider"></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<i class="fa fa-bell"></i>  <span class="label label-primary">0</span>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li>
							<a href="mailbox.html">
								<div>
									<i class="fa fa-envelope fa-fw"></i> You have 16 messages
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="profile.html">
								<div>
									<i class="fa fa-twitter fa-fw"></i> 3 New Followers
									<span class="pull-right text-muted small">12 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="grid_options.html">
								<div>
									<i class="fa fa-upload fa-fw"></i> Server Rebooted
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<div class="text-center link-block">
								<a href="notifications.html">
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>


				<li>
					<a href="login.html">
						<i class="fa fa-sign-out"></i> Log out
					</a>
				</li>
			</ul>
		</nav>
	</div>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

<!-- Mainly scripts -->
<script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Flot -->
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.symbol.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.time.js') }}"></script>

<!-- Peity -->
<script src="{{ URL::asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ URL::asset('js/inspinia.js') }}"></script>
<script src="{{ URL::asset('js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ URL::asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Jvectormap -->
<script src="{{ URL::asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- EayPIE -->
<script src="{{ URL::asset('js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>

<!-- Sparkline -->
<script src="{{ URL::asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ URL::asset('js/demo/sparkline-demo.js') }}"></script>

<script>
	$(document).ready(function() {
		$('.chart').easyPieChart({
			barColor: '#f8ac59',
//                scaleColor: false,
			scaleLength: 5,
			lineWidth: 4,
			size: 80
		});

		$('.chart2').easyPieChart({
			barColor: '#1c84c6',
//                scaleColor: false,
			scaleLength: 5,
			lineWidth: 4,
			size: 80
		});

		var data2 = [
			[gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
			[gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
			[gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
			[gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
			[gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
			[gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
			[gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
			[gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
		];

		var data3 = [
			[gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
			[gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
			[gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
			[gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
			[gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
			[gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
			[gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
			[gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
		];


		var dataset = [
			{
				label: "Number of orders",
				data: data3,
				color: "#1ab394",
				bars: {
					show: true,
					align: "center",
					barWidth: 24 * 60 * 60 * 600,
					lineWidth:0
				}

			}, {
				label: "Payments",
				data: data2,
				yaxis: 2,
				color: "#464f88",
				lines: {
					lineWidth:1,
					show: true,
					fill: true,
					fillColor: {
						colors: [{
							opacity: 0.2
						}, {
							opacity: 0.2
						}]
					}
				},
				splines: {
					show: false,
					tension: 0.6,
					lineWidth: 1,
					fill: 0.1
				},
			}
		];


		var options = {
			xaxis: {
				mode: "time",
				tickSize: [3, "day"],
				tickLength: 0,
				axisLabel: "Date",
				axisLabelUseCanvas: true,
				axisLabelFontSizePixels: 12,
				axisLabelFontFamily: 'Arial',
				axisLabelPadding: 10,
				color: "#d5d5d5"
			},
			yaxes: [{
				position: "left",
				max: 1070,
				color: "#d5d5d5",
				axisLabelUseCanvas: true,
				axisLabelFontSizePixels: 12,
				axisLabelFontFamily: 'Arial',
				axisLabelPadding: 3
			}, {
				position: "right",
				clolor: "#d5d5d5",
				axisLabelUseCanvas: true,
				axisLabelFontSizePixels: 12,
				axisLabelFontFamily: ' Arial',
				axisLabelPadding: 67
			}
			],
			legend: {
				noColumns: 1,
				labelBoxBorderColor: "#000000",
				position: "nw"
			},
			grid: {
				hoverable: false,
				borderWidth: 0
			}
		};

		function gd(year, month, day) {
			return new Date(year, month - 1, day).getTime();
		}

		var previousPoint = null, previousLabel = null;

		$.plot($("#flot-dashboard-chart"), dataset, options);

		var mapData = {
			"US": 298,
			"SA": 200,
			"DE": 220,
			"FR": 540,
			"CN": 120,
			"AU": 760,
			"BR": 550,
			"IN": 200,
			"GB": 120,
		};

		$('#world-map').vectorMap({
			map: 'world_mill_en',
			backgroundColor: "transparent",
			regionStyle: {
				initial: {
					fill: '#e4e4e4',
					"fill-opacity": 0.9,
					stroke: 'none',
					"stroke-width": 0,
					"stroke-opacity": 0
				}
			},

			series: {
				regions: [{
					values: mapData,
					scale: ["#1ab394", "#22d6b1"],
					normalizeFunction: 'polynomial'
				}]
			},
		});
	});
</script>

</html>
