<?php

/* CMS lib */
$uv_cms_sliderid = "1505815180";
$uv_cms_galleryid = "1505815187";
$uv_cms_videosid = "1505815182";

/*UV Core Options*/
$uv_opts = array();
$uv_opts["uvvenueid"] = "1505805077";
$uv_opts["veaid"] = "148681";
$uv_opts["wbcode"] = "draisvancouver";
$uv_opts["uvserver"] = "draisvc.urvenue.com";
$uv_opts["uvg-pwidth"] = 800;
$uv_opts["uvg-pheight"] = 500;
$uv_opts["uvg-albumpoptemplate"] = "";
$uv_opts["eventurl"] = "/event.php?id={eventid}&dt={seventdate}";
$uv_opts["map-reqid"] = "1505805081";


/*UvCore Inclution*/
$uv_corepath = ($uv_corepath) ? $uv_corepath :  "uvcore";
$uv_coreurl =  "/uvcore";
$uv_proxyurl = "/uvcore/uvcore.proxy.php";

include_once("$uv_corepath/uvcore.functions.php");