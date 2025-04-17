<?php
	require(".src.php");

	$index = new Page("Home Page");
		$index->theme("light");
		$index->body("BEGIN");

			$links = array(
				$index->link("Home", "", true),
				$index->link("Show Data", "show_data.php", false),
				$index->link("Link 2", "/page", false),
			);

			$index->navbar("Navbar Title", "https://ourchat1202.net", $links, false);

			$index->container('.container-sm" style="margin:100px;"');

				$index->heading("Welcome", "text-align:center;", false);
				$index->heading(
					"This is a website test page.", 
					"text-align:center; margin-bottom:100px;", 
					false);

				$index->text(
					"This is just a simple project idea. A more easy way to code in php", 
					"text-align:center;", 
					false
				);

				$index->center("BEGIN");

					$index->text(
						"The Project is underdevelopment.", 
						"text-align:center; font-weight:bold;
						color:red;", 
						false
					);

				$index->center("END");

				$index->heading("Grid Test", "text-align:center; padding:20px;", false);

				$index->grid(
					3,
					1,
					array(
						$index->card("Card 1", "Card 1's body", "Test", true),
						$index->card("Card 2", "Card 2's body", "Test", true),
						$index->card("Card 3", "Card 2's body", "Test", true)
					)
				);

			$index->endDiv();

		$index->body("END");

	$index->endpage();
?>