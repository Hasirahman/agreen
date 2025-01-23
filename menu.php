<nav>
	<ul class="sf-menu">
		<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home2") ? " class='selected'" : ""); ?>>
			<a href="?page=home" title="Home">
				HOME
			</a>
			 
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="services" || $_GET["page"]=="service_interior_renovation" || $_GET["page"]=="service_design_build" || $_GET["page"]=="service_tiling_painting" || $_GET["page"]=="service_paver_walkways" || $_GET["page"]=="service_household_repairs" || $_GET["page"]=="service_solar_systems") ? " class='selected'" : ""); ?>>
			<a href="#" title="Services">
				SERVICES
			</a> 
			<ul>
				<li>
					<a href="#" title="">
					Designing & Drafting
					</a>
				</li>
				<li>
					<a href="#" title="">
					Installations
					</a>
				</li>
				<li>
					<a href="#" title="">
					Repairs & Services
					</a>
				</li>
				<li>
					<a href="#" title="">
					AMC's
					</a>
				</li>
				<li>
					<a href="#" title="">
					Quality Policy
					</a>
				</li>
			</ul>
			
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems") ? " class='selected'" : ""); ?>>
			<a href="#" title="Projects">
				PRODUCTS
			</a>
			<ul>
				<li>
					<a href="#" title="">
					Chiller System
					</a>
				</li>
				<li>
					<a href="#" title="">
					VRF System
					</a>
				</li>
				<li>
					<a href="#" title="">
					DX System
					</a>
				</li>
				<li>
					<a href="#" title="">
					Ventilation System
					</a>
				</li>
				<li>
					<a href="#" title="">
					Air Handling Unit
					</a>
				</li> 
			</ul>
			
		</li>
		<li <?php echo (isset($_GET["page"]) && ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems") ? " class='selected'" : ""); ?>>
			<a href="#" title="Projects">
				PROJECTS
			</a>
			<ul>
				<li>
					<a href="#" title="">
					Residential
					</a>
				</li>
				<li>
					<a href="#" title="">
					Commercial
					</a>
				</li>
				<li>
					<a href="#" title="">
					Industrial
					</a>
				</li> 
			</ul>
			
		</li>
		<li class="<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " selected" : ""); ?>">
			<a href="#" title="clients">
				CLIENTS
			</a>
		</li>
		<li class="<?php echo (isset($_GET["page"]) && $_GET["page"]=="team" ? " selected" : ""); ?>">
			<a href="#" title="Careers">
				CAREERS
			</a>
		</li> 
		
		<li class="left-flyout<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2") ? " selected" : ""); ?>">
			<a href="#" title="Contact">
				CONTACT
			</a> 
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu collapsible-mobile-submenus">
			<li<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home2") ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home">
					HOME
				</a>
				<a href="#" class="template-arrow-menu"></a>
				 
			</li>
			 
		</ul>
	</nav>
</div>