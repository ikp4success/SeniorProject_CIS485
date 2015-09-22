<html>
<head lang="en">
	<title>Clicker App Student Home Page</title>
<?php
include("views/sidebar-head.php");
?>
</head>
<body style="background-color:#D8D8D8;">

<?php
include("views/sidebar-body.php");
?>
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="col-lg-12">
				<div class="row">
					<div>
						<p>
							Student User Portal -- UNDER CONSTRUCTION

							<!-- 	 -->
						</p>

					</div>
					<div class="col-lg-12">
						<h1>Simple Sidebar</h1>
						<p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
						<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
						<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide Menu</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>




</div>



</body>
</html>