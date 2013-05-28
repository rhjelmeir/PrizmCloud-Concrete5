ccmValidateBlockForm = function() {
  if( $('#pkey').val() == '') {
    ccm_addError('Key required');
  }
  return false;
}
