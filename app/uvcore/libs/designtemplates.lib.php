<?php

$uvlib_designtemplates = array(
	"photoitem" => array(
		"default" => array(
			"template" => "<a class='{linkclass}' {linkparams} href='javascript:;'><div class='uv-mos-item'><img class='uv-loadfade' src='{thumbnail}'><div class='uv-mos-info'><div class='uv-mos-name'>{name}</div><div class='uv-mos-date'>{ddate}</div></div></div></a>",
		)
	),
	"albumlistitem" => array(
		"default" => array(
			"template" => "<a class='{linkclass}' {linkparams} href='javascript:;'><div class='uv-pa-item'><img class='uv-loadfade' src='{thumbnail}'><div class='uv-pa-itembor'></div></div></a>"
		)
	),
	"eventslideritem" => array(
		"default" => array(
			"flyerprioritycode" => "slider",
			"flyerimksize" => "800KT400",
			"template" => "<a href='{eventlink}'><div><img src='{eventflyer}'></div></a>"
		)
	),
	"eventcarouselitem" => array(
		"default" => array(
			"flyerprioritycode" => "carousel",
			"ddatephpformat" => "l n/j",
			"flyerimksize" => "300KT300",
			"template" => "<div><div class='uv-name'>{eventname}</div><div class='uv-ddate'>{eventddate}</div><a href='{eventlink}'><img src='{eventflyer}'></a>{eventlinkbtns}</div>"
		)
	),
	"eventlistitem" => array(
		"default" => array(
			"flyerprioritycode" => "calendar",
			"ddatephpformat" => "l, F jS",
			"flyerimksize" => "300KT300",
			"template" => "<div class='uv-panel uv-listitem'><a href='{eventlink}'><div class='uv-flyer uv-flyerbox' style='background-image: url({eventflyer});'><img class='uv-loadfade' src='{eventflyer}' data-target='parent'></div></a><div class='uv-info'><div class='uv-vcenter'><div class='uv-name'>{eventname}</div><div class='uv-date uv-oneline'>{eventddate}</div></div></div><div class='uv-actions'><div class='uv-vcenter'><a href='{eventlink}' class='uv-btn uv-btn-p uv-btn-100'><span>Buy </span>Tickets</a><a class='uv-btn uv-btn-s uv-btn-100' href='{eventlink}'><span>Book </span>Table</a></div></div></div>"
		)
	)
);






