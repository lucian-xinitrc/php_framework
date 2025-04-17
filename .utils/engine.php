<?php

	class Components{
		protected $th = "dark";

		function theme($choice){
			$this->th = $choice;
		}

		function container($type){
			echo '<div class="'.$type.'" style="margin-left:100px; margin-right:100px;" data-bs-theme="'.$this->th.'">';
		}

		function grid($columns, $rows, $array){
			$n = 0;
			echo '<div class="container text-center" data-bs-theme="'.$this->th.'">';
			for($i = 0; $i < $rows; $i++){
				echo '<div class="row" style="margin:10px;" data-bs-theme="'.$this->th.'">';
				for($j = 0; $j < $columns; $j++){
					echo '<div class="col" data-bs-theme="'.$this->th.'">'.$array[$n].'</div>';
					$n++;
				}
				echo '</div>';
			}
			echo '</div>';

		}

		function endDiv(){
			echo '</div>';
		}

		function card($headerText, $cardBody, $cardFooter, $ret){
			$string = '
				  <div class="card" data-bs-theme="'.$this->th.'">
					  <div class="card-header" data-bs-theme="'.$this->th.'">
					    '.$headerText.'
					  </div>
					  <div class="card-body" data-bs-theme="'.$this->th.'">
					    '.$cardBody.'
					  </div>
					  <div class="card-footer text-body-secondary" data-bs-theme="'.$this->th.'">
					    '.$cardFooter.'
					  </div>
				</div>
			';
			if(!$ret){
				echo $string;
			} else {
				return $string;
			}
		}

		function center($string){
			echo ($string == "BEGIN") ? '<div style="display:flex; justify-content:center;">' : '</div>';
		}

		function link($text, $href, $active){
			$true = '<a class="nav-link active" href="'.$_SERVER["REQUEST_URI"].$href.'">'.$text.'</a>';
			$false = '<a class="nav-link" href="'.$_SERVER["REQUEST_URI"].$href.'">'.$text.'</a>';
			return ($active == true) ? $true : $false;
		}

		function navbar($title, $titleLink, $navs, $ret){

			echo '
				<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="'.$this->th.'">
				  <div class="container-fluid" data-bs-theme="'.$this->th.'">
				    <a class="navbar-brand" href="'.$titleLink.'">'.$title.'</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent" data-bs-theme="'.$this->th.'">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0" data-bs-theme="'.$this->th.'">
				        '; 
				        for($i = 0; $i < count($navs); $i++){
				        	echo '<li class="nav-item">'.$navs[$i].'</li>';
				        }
				        echo'
				          </ul>
				      </ul>
				    </div>
				  </div>
				</nav>
			';
		}

		function heading($text, $style, $ret){
			$string = '<h1 style="'.$style.'">'.$text.'</h1>';
			if(!$ret){
				echo $string;
			} else {
				return $string;
			}
		}

		function text($text, $style, $ret){
			$string = '<p style="'.$style.'">'.$text.'</p>';
			if(!$ret){
				echo $string;
			} else {
				return $string;
			}
		}
	}

	class Page extends Components{
		private $title, $css_file, $language = "en";
		function __construct($title){
			$this->title = $title;
			echo '
				<!DOCTYPE html>
				<html lang="'.$this->language.'">
					<head>
						<title>'.$this->title.'</title>
						<meta charset="utf-8">
    					<meta name="viewport" content="width=device-width, initial-scale=1">
    					<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
						<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
					</head>
			';
		}

		
		function __construct1($title, $css_file){
			$this->title = $title;
			$this->css_file = $css_file;
			echo '
				<!DOCTYPE html>
				<html lang="'.$this->language.'">
					<head>
						<title>'.$this->title.'</title>
						<meta charset="utf-8">
    					<meta name="viewport" content="width=device-width, initial-scale=1">
    					<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
					</head>
			';
		}
		function __construct2($title, $language, $css_file){
			$this->title = $title;
			$this->language = $language;
			$this->css_file = $css_file;
			echo '
				<!DOCTYPE html>
				<html lang="'.$this->language.'">
					<head>
						<title>'.$this->$title.'</title>
						<meta charset="utf-8">
    					<meta name="viewport" content="width=device-width, initial-scale=1">
    					<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
					</head>
			';
		}

		function body($string){
			if($string == "BEGIN"){
				if($this->th == "dark")
					echo '<body data-bs-theme="'.$this->th.'">';
				else
					echo '<body>';
			} else {
				echo '</body>';
			}
		}

		function htmlCode($code){
			echo $code;
			return $code;
		}

		function endpage(){
			echo '</html>';
		}
	}

?>
