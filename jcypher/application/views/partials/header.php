	<nav>
		<svg>
			<a xlink:href="/">
				<circle cx="45" cy="45" r="43" fill="#ED663A" />
				<text fill="#ffffff" x="20" y="40">JON.</text>
				<text fill="#ffffff" x="16" y="63">LOUI</text>
			</a>
		</svg>
		<!-- <a href="/cypher" id='cypher_link' class="header_link">Cypher page</a> 
		<a href="/tloui" id='tloui_link' class="header_link">tloui.com</a>  -->
		<a href="/projects" id="projects_link" class="header_link">Projects</a> 
		<a href="/special_thanks" id="special_thanks_link" class="header_link">Special Thanks</a> 
		<a href="/coming_soon" id="coming_soon_link" class="header_link">Coming Soon</a>

		<?php
			if(isset($login_status) && $login_status)
			{
				echo "<a href='/user/profile/{$id}' id='user_profile_link'>{$user_name}</a>
					  <a href='/session/delete' id='log_link'>Logout</a>";
			}
			else
				echo "<a href='/' id='log_link'>Login</a>";
		?>
	</nav>