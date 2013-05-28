<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

global $c;

if(!$c->isEditMode()) {

	if ($pkey) { 

	  // build iframe src url
	  $url_base = 'http://connect.ajaxdocumentviewer.com/?key=';
	  $type     = ($ptype) ? $ptype : '';
	  $document = ($doc_url) ? $doc_url : '';
	  $iwidth   = ($width) ? '&viewerwidth=' . $width : '100%';
	  $iheight  = ($height) ? '&viewerheight=' . $height : '100%';
	  $print    = ($print_button) ? 'Yes' : 'No';
	  $color    = ($toolbar_color) ? '&toolbarColor=' . $toolbar_color : '';

	  $url      = $url_base . $pkey . '&viewertype=' . $type . '&document=' . $document . $iheight . $iwidth .  '&printButton=' . $print . $color;

	?>
	  <div class="prizm_docs_frame">
	  <iframe src="<?php echo $url ?>" width="<?php echo $width + 20 ?>" height="<?php echo $height + 20 ?>" id="prizm_docs_iframe"></iframe>
	  </div>
	<?php 

	} else {

	?>
	<div class="error">Please sign up for an account to use PrizmCloud Docs Viewer. If you already signed up, add your key by editing this block. <a href="http://prizmcloud.accusoft.com/register.html" target="_blank" title="PrizmCloud ">Prizm Cloud Sign Up</a> </div>
<?php }
} else {
 ?>
	<p>PrizmCloud Viewer will display after you are done editing this page</p>
<?php } ?>
