<?php
$fullUrl = "https://api.miniature.io/?force=true&amp;url=" . urlencode(ViewBag::get("url"));
?>
<img src="<?php esc($fullUrl);?>"
	alt="<?php translate("miniature_of_url", array("%url%"=>ViewBag::get("url")))?>" />
