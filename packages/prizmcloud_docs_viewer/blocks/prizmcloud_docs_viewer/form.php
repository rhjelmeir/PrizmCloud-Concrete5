<?php defined('C5_EXECUTE') or die(_("Access Denied.")); 

$form = Loader::helper('form');
$fh   = Loader::helper('form/color');
?>
<style>
.prizm_docs_viewer p label:not(.radio),
.prizm_docs_viewer .prizm_picker label {
  min-width:25%;
  padding-right:0.5em;
  display:block;
  float:left;
}
.prizm_docs_viewer input.long {
  width:50%;
}
.prizm_docs_viewer input.short {
  width:50px;
}
.prizm_docs_viewer p.note {
  font-size:0.9em;
  color:#888;
}
.prizm_docs_viewer .prizm_picker label,
.prizm_docs_viewer .prizm_picker input
{
  float:left;
}
.prizm_docs_viewer .prizm_picker input {
  margin-right:0.5em;
}
.colorpicker {
  z-index: 1200 !important;
}
.prizm_docs_viewer .prizm_picker
</style>
<div class="prizm_docs_viewer">

  <?php $key = ($prizmObj->pkey) ? $prizmObj->pkey : ''; ?>
  <p class="note">Please <a href="http://prizmcloud.accusoft.com/register.html" target="_blank" title="PrizmCloud ">sign up</a> for an account and copy your key to this field. This is required to use this document viewer.</p>
  <p>
    <?php echo $form->label('pkey', 'Viewer Key') ?>
    <?php echo $form->text('pkey',$key, array('placeholder' => 'Your Viewer Key', 'id' => 'prizm_viewer_key', 'class' => 'long')) ?>
  </p>

  <?php $type = ($prizmObj->ptype) ? $prizmObj->ptype : 'html'; ?>
  <p>
    <?php echo $form->label('ptype', 'Viewer Type') ?>

    <?php echo $form->radio('ptype', 'flash', $type) ?>
    <?php echo $form->label('ptype', 'flash', array('class' => 'radio')) ?>
    <?php echo $form->radio('ptype', 'html5', $type ) ?>
    <?php echo $form->label('ptype', 'html5', array('class' => 'radio')) ?>
  </p>

  <?php $doc_url = ($prizmObj->doc_url) ? $prizmObj->doc_url : ''; ?>
  <p>
    <?php echo $form->label('doc_url', 'Document url') ?>
    <?php echo $form->text('doc_url', $doc_url, array('class' => 'long'))?>
  </p>

  <?php $width = ($prizmObj->width) ? $prizmObj->width : ''; ?>
  <p>
    <?php echo $form->label('width', 'Viewer width') ?>
    <?php echo $form->text('width', $width, array('class' => 'short'))?>
    <em class="extra">px</em>
  </p>

  <?php $height = ($prizmObj->height ) ? $prizmObj->height : ''; ?>
  <p>
    <?php echo $form->label('height', 'Viewer height') ?>
    <?php echo $form->text('height', $height, array('class' => 'short'))?>
    <em class="extra">px</em>
  </p>

  <?php $print_button = ($prizmObj->print_button) ? $prizmObj->print_button : '0'; ?>
  <p>
    <?php echo $form->label('print_button', 'Print Button?') ?>
    <?php echo $form->radio('print_button', 1, $print_button) ?>
    <?php echo $form->label('print_button', 'yes', array('class' => 'radio')) ?>
    <?php echo $form->radio('print_button', 0, $print_button) ?>
    <?php echo $form->label('print_button', 'no', array('class' => 'radio')) ?>
  </p>

  <?php $toolbar_color = ($prizmObj->toolbar_color) ? $prizmObj->toolbar_color : 'CCCCCC'; ?>
  <div class="prizm_picker">
    <?php echo $form->label('toolbar_color', 'Toolbar Color') ?>
    <?php //echo $form->text('toolbar_color', $toolbar_color, array('id' => 'prizm_toolbar_color'))?>
    <?php echo $fh->output('toolbar_color', '', $toolbar_color, $includeJavaScript = true) ?>
  </div>
</div>
