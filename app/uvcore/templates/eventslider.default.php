<?php
	$uveventlisthtml = uv_get_eventlisthtml("eventslideritem");
	
	if($uv_cms_sliderid){
		$uvsliderappend = uv_get_feed($uv_cms_sliderid);
		
		if(is_array($uvsliderappend))
			foreach($uvsliderappend as $uvslideritem){
				$uvbeforeslider = ($uvslideritem["imageseonclick"]) ? "<a href='" . $uvslideritem["imageseonclick"] ."'>" : "";
				$uvafterslider = ($uvslideritem["imageseonclick"]) ? "</a>" : "";
				
				$uveventlisthtml .= $uvbeforeslider . "<div><img src='" . $uvslideritem["imagefolder"] . "/800SC400/" . $uvslideritem["imagefile"] . "'></div>" . $uvafterslider;
			}
	}
?>

<div class="uv-integration uv-eventslider">
	<div class="uv-evslidercont">
		<a class="uv-evsliderleft uvjs-evsliderprev" href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
		<a class="uv-evsliderright uvjs-evslidernext" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
		<div class="uv-evslider"><?=$uveventlisthtml;?></div>
	</div>
	<!--<a class="uv-pwby-cb" href="http://urvenue.com" target="_blank"></a>-->
</div>