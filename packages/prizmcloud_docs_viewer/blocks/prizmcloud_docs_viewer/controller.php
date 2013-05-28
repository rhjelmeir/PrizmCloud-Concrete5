<?php   
	defined('C5_EXECUTE') or die(_("Access Denied."));

        /*
         * Responsible for standard (Concrete5) block functionality
         */
	class PrizmCloudDocsViewerBlockController extends BlockController {

		protected $btInterfaceWidth = 400;
		protected $btInterfaceHeight = 410;
		protected $btTable = 'btPrizmCloudDocsViewer';
    protected $btWrapperClass = 'cmm-ui';

    public function getBlockTypeDescription() 
    {
			  return t("Embed our document viewer in your site to view your documents in the cloud in any of 300+ file types. Just like that. Your documents stay on your server and in your control.");
	   }

    public function getBlockTypeName() 
    {
		  return t("PrizmCloud Docs Viewer");
    } 
   
    public function getJavaScriptStrings() 
    {
      return array(
        'pkey-required' => t('You must enter in your key')
      );
    }
	}
?>
