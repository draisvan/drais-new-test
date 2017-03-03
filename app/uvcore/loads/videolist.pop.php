<?php 

	$uvvideos = uv_get_feed($uv_cms_videosid);
	$uvacode = isset($ac) ? $ac : $_REQUEST["ac"];
	
	$uvpalistitemtemplate = $uvlib_designtemplates["albumlistitem"]["default"]["template"];
	
	if(is_array($uvvideos)){
		foreach($uvvideos as $uvpic){
			$uvpicfolder = $uvpic["thumbnailHQ"];
			$uvvideoextid = $uvpic["externalid"];
			
			$uvpicthumburl = $uvpicfolder;
			$uvpicbigurl = $uvvideoextid;
			$uvpiclinkclass = ($uvacode == $uvvideoextid) ? "uvjs-setvideo active" : "uvjs-setvideo";
			$uvpiclinkparams = "data-videoid='$uvpicbigurl'";
			
			$uvpicitemhtml = str_replace(array("{linkclass}", "{linkparams}", "{thumbnail}"), array($uvpiclinkclass, $uvpiclinkparams, $uvpicthumburl), $uvpalistitemtemplate);
			
			$uvpicshtml .= $uvpicitemhtml;
		}
	}
?>
<div class="uv-integration uv-photoalbumvisor">
	<!--<div class="uv-popvisorheader">
		<div class="uv-pa-title"><?=$uvpaname;?></div>
		<div class="uv-pa-date"><?=$uvpaddate;?></div>
	</div>-->

	<style>
		.uv-pa-list-default .uv-pa-item:before{
			padding-top: 60%;
		}
		.uv-pa-picvisor:before{
			padding-top: 60%;
		}
	</style>
	
	<a class="uvjs-pa-prevvid uv-outer-aleft" href="javascript:;"></a>
	<a class="uvjs-pa-nextvid uv-outer-aright" href="javascript:;"></a>

	<div class="uv-pa-picvisor">
		<div class="uv-pa-picharge"><iframe src="https://www.youtube.com/embed/<?=$uvvideoextid;?>?autoplay=1"allowfullscreen></iframe></div>
	</div>
	<div class="uv-pa-list uv-pa-list-default uv-clearfix"><?=$uvpicshtml;?></div>
</div>
<script>uvLoadFade();</script>






