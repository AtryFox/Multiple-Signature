<?php
	$cases = array();
	
	class SigCase {
		public $tid;
		public $img;
		public $urlb;
		public $url;	
		
		function __construct($tidC = null, $imgC = null,$urlbC = null, $urlC = null) {
			if($tidC != null) $this->tid = $tidC;
			else $this->tid = 0;
			
			if($urlbC != null) $this->urlb = $urlbC;
			else $this->urlb = false;
			
			if($urlC != null) $this->url = $urlC;
			else $this->url = "";
			
			if($imgC != null) $this->img = $imgC;
			else $this->img = "";
		}
	}
		
	function addCase($tid, $img, $urlb, $url) {
		global $cases;
		array_push($cases, new SigCase($tid, $img, $urlb, $url));
	}
?>