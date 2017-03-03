<?php

	$uvvideos = uv_get_feed($uv_cms_videosid);
	
	if(is_array($uvvideos)){
		$uvalbumthumprop = 60;
		$uvalbumdesigntemplate = $uvg_lib["albumdesigntemplate"];
		$uvalbumitemtemplate = $uvlib_designtemplates["photoitem"][$uvalbumdesigntemplate]["template"];
		$uvninitalbums = 40;
		$uvloadmoreitems = Array();
		$uvlib_global["uniqueintid"]++;
		$uvalbumintunicode = "photogallery" . $uvlib_global["uniqueintid"];
		$uvalbumloadpopurl = $uvv_lib["loadvideopopurl"];
	
		foreach($uvvideos as $uvalbum){
			$uvalbumname = $uvalbum["name"];
			$uvalbumdate = $uvalbum["uploaddate"];
			$uvalbumcode = $uvalbum["externalid"];
			$uvalbumddate = date($uvg_lib["albumdatephpformat"], strtotime($uvalbumdate));
			$uvalbumimg = $uvalbum["thumbnailHQ"];
			$uvalbumthumbnail = $uvalbumimg;
			
			$uvalbumitemhtml = str_replace(array("{thumbnail}", "{name}", "{ddate}", "{linkclass}", "{linkparams}"), array($uvalbumthumbnail, $uvalbumname, $uvalbumddate, "uvjs-loadalbumpop", "data-albumcode='$uvalbumcode' data-loadpopurl='$uvalbumloadpopurl'"), $uvalbumitemtemplate);
			
			if($uvninitalbums){
				$uvgalleryhtml .= $uvalbumitemhtml;
				$uvninitalbums--;
			}
			else
				$uvloadmoreitems[] = $uvalbumitemhtml;
		}
	}
	
	$uvloadmoreitemsscript = (count($uvloadmoreitems) > 0) ? json_encode($uvloadmoreitems) : "\"\"";
	$uverrornogals = "<h3 class='uv-nocontmsg'>There are no albums at this time</h3>";
?>
	
<?php if($uvgalleryhtml){ ?>
	<div class='uv-integration uv-photogallery'>
		<style>
			body .uv-mosaic-<?=$uvalbumdesigntemplate;?> .uv-mos-item:before{
				padding-top: <?=$uvalbumthumprop;?>%;
			}
		</style>
		<div class='uv-clearfix uv-mosaic uv-mosaic-<?=$uvalbumdesigntemplate;?>'>
			<?=$uvgalleryhtml;?>
		</div>
		<script>
			uv_loadmoreitems = (typeof(uv_loadmoreitems) == "undefined") ? [] : uv_loadmoreitems;
			uv_loadmoreitems["<?=$uvalbumintunicode;?>"] = <?=$uvloadmoreitemsscript;?>;
		</script>
		
		<a class="uv-pwby-cb" href="http://urvenue.com" target="_blank"></a>
	</div>
<?php }else echo($uverrornogals);
		
		
		
		
		
		
		
		
		
		