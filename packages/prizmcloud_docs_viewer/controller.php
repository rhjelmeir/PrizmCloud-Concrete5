<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class PrizmCloudDocsViewerPackage extends Package {

	protected $pkgHandle = 'prizmcloud_docs_viewer';
	protected $appVersionRequired = '5.3.0';
	protected $pkgVersion = '1.0.0';

	public function getPackageDescription() {
		return t("Embed our document viewer in your site to view your documents in the cloud in any of 300+ file types. Just like that. Your documents stay on your server and in your control.");
	}

	public function getPackageName() {
		return t("PrizmCloud Docs Viewer");
	}

	public function install() {
		$pkg = parent::install();

		// install block
		BlockType::installBlockTypeFromPackage('prizmcloud_docs_viewer', $pkg);

	}

	public function uninstall() {
		parent::uninstall();
		$db = Loader::db();
	    $db->Execute('drop table btPrizmCloudDocsViewer');
	}
}
