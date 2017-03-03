<?php

$uvpx_action = (isset($action)) ? $action : $_REQUEST["action"];

if(!$uv_cms_galleryid){
	$uv_corepath = "../uvcore";
	include_once("uvcore.options.php");
}

if($uvpx_action == "uvpx_loadalbumpop"){
	include_once($uv_corepath . "/loads/photoalbum.pop.php");
}
else if($uvpx_action == "uvpx_loadcal"){
	include_once($uv_corepath . "/loads/uvcmonth.load.php");
}
else if($uvpx_action == "uvpx_loadvideopop"){
	include_once($uv_corepath . "/loads/videolist.pop.php");
}
else if($uvpx_action == "uvpx_sendresform"){
	include_once($uv_corepath . "/loads/uvreservation.pro.php");
}