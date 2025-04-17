<?php

	require(".src.php");

	$sd = new Page("Show Data Page");

		$sd->theme("dark");
		$sd->body("BEGIN");

			$links = array(
				$sd->link("Home", "", false),
				$sd->link("Show Data", "show_data.php", true),
				$sd->link("Link 2", "/page", false),
			);

			$sd->navbar("Navbar Title", "https://ourchat1202.net", $links, false);

			$sd->heading(
				"This is a heading",
				"text-align:center;",
				false

			);

		$sd->body("END");

	$sd->endPage();

?>