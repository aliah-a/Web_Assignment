<ul>
	<li><a href="Home.php"
		<?php
			if($activemenu=="Home")
				echo "class=\"active\"";
		?>
		>Home</a>
	</li>

	<li><a href="Profile.html"
		<?php
			if($activemenu=="Profile")
				echo "class=\"active\"";
		?>
		>Profile</a>
	</li>


	<li><a href="services.php"
		<?php
			if($activemenu=="Services")
				echo "class=\"active\"";
		?>
		>Services</a>
	</li>

	<li><a href="Feedback.html"
		<?php
			if($activemenu=="Feedback")
				echo "class=\"active\"";
		?>
		>Feedback</a>
	</li>

	<li><a href="About.html"
		<?php
			if($activemenu=="About")
				echo "class=\"active\"";
		?>
		>About</a>
	</li>

	<li><a href="Contact.html"
		<?php
			if($activemenu=="Contact")
				echo "class=\"active\"";
		?>
		>Contact</a>
	</li>

	<li><a href="login.php"
		<?php
			if($activemenu=="Login")
				echo "class=\"active\"";
		?>
		>Login</a>
	</li>
</ul>