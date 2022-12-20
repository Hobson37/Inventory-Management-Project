	<div class="dashboardSidebar" id="dashboardSidebar">
		<h3 class="dashboardLogo" id="dashboardLogo">RIMS</h3>
	<div class="dashboardSidebarUser">
		<span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
	</div>
	<div class="dashboardSidebarMenu">
				<ul class="dashboardMenuList">
						<!-- class = " menuActive" -->
						<li>
						<a href="./dashboard.php"><i class="fa fa-dashboard"></i> <span class="menuText">Dashboard</span></a>
					</li>
 					<li>
						<a href="./users-add.php"><i class="fa fa-user-plus"></i> <span class="menuText">Create User</span></a>
					</li>
					<li>
						<a href=""><i class="fa fa-boxes"></i> <span class="menuText">Inventory Manager</span></a>
					</li>
					<li>
						<a href="./database/logout.php"><i class="fa fa-power-off"></i><span class="menuText">Log Out</span></a>
					</li>
				</ul></i>
	</div></div>
