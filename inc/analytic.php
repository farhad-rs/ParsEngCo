<?php 
	$host = strtolower($_SERVER['HTTP_HOST']);
	if( !($template['debug'] or $host == "127.0.0.1" or $host == "localhost") ){
?>
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://1dws.com/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '95f7670397ddd0a20efd89b09315b65e']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
})();
//]]>
</script>
<?php } ?>