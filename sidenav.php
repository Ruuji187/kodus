<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<div class="sidenav" id="sidenav">
		<a href="http://crg-co1-23-0028/kodus/home">
			<img class="logo" id="logo" src="http://crg-co1-23-0028/kodus/assets/logo.png">
		</a>
		<hr>
		<a id="home" class="<?php addActiveClass('home.php', $currentPath); ?><?php addActiveClass('agusandelnorte.php', $currentPath); ?><?php addActiveClass('agusandelsur.php', $currentPath); ?><?php addActiveClass('dinagatislands.php', $currentPath); ?><?php addActiveClass('surigaodelnorte.php', $currentPath); ?><?php addActiveClass('surigaodelsur.php', $currentPath); ?>" href="http://crg-co1-23-0028/kodus/home"><i class="fa fa-home"></i> <span class="label">Home</span></a>

		<button id="dropdownBtn" class="<?php addActiveClass('data-tracking.php', $currentPath); ?><?php addActiveClass('data-tracking-meb.php', $currentPath); ?><?php addActiveClass('data-tracking-in.php', $currentPath); ?><?php addActiveClass('data-tracking-out.php', $currentPath); ?> dropdown-btn"><i class="fa fa-file-pen"></i><span class="label btn">Tracking</span>
			<i id="caret" class="fa fa-caret-down label"></i>
		</button>

		<div id="drpdwnCntnr" class="dropdown-container">
			<a id="dataTracking" class="<?php addActiveClass('data-tracking.php', $currentPath); ?>" href="http://crg-co1-23-0028/kodus/data-tracking"><i class="fa fa-table"></i> <span class="label">Documents</span></a>
			<a id="dataTrackingMeb" class="<?php addActiveClass('data-tracking-meb.php', $currentPath); ?>" href="http://crg-co1-23-0028/kodus/data-tracking-meb"><i class="fa fa-list"></i> <span class="label">MEB</span></a>
			<a id="dataTrackingIn" class="<?php addActiveClass('data-tracking-in.php', $currentPath); ?>" href="http://crg-co1-23-0028/kodus/data-tracking-in"><i class="fa fa-sign-in"></i> <span class="label">Incoming</span></a>
			<a id="dataTrackingOut" class="<?php addActiveClass('data-tracking-out.php', $currentPath); ?>" href="http://crg-co1-23-0028/kodus/data-tracking-out"><i class="fa fa-sign-out"></i> <span class="label">Outgoing</span></a>
		</div>
		<!-- <a href="#">Link</a> -->
	</div>
</body>
</html>