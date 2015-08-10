<?php
//$sources = array(
//    'data' => $modx->getOption('core_path') . 'components/cosmos/contentResources/',
//);

//$addContent = $modx->getOption('add_content', $options, false);
//if ($addContent) {
//  $resources = include $sources['data'] . 'transport.resources.php';
//  foreach ($resources as $resource) {
//    $resource->save();
//  }
//}

$modx->addPackage('clientconfig', MODX_CORE_PATH . 'components/clientconfig/model/');

$blogItClientConfig = $modx->getObject('cgGroup', array('label' => 'BlogIt'));
if (!$blogItClientConfig) { 
  $blogItClientConfig = $modx->newObject('cgGroup');
  $blogItClientConfig->fromArray(array(
    'label' => 'BlogIt',
    'sortorder' => '10',
    'description' => 'Needed base settings'
  ));
  $blogItClientConfig->save();
}

$blog_container_id = $modx->getObject('cgSetting', array('key' => 'blogit.blog_container_id'));
if (!$blog_container_id) { 
  $blog_container_id = $modx->newObject('cgSetting');
  $blog_container_id->fromArray(array(
    'key' => 'blogit.blog_container_id',
    'label' => 'Blog container ID',
    'xtype' => 'numberfield',
    'description' => 'Fill in the ID of you blog container resource.',
    'is_required' => '1',
    'sortorder' => '1',
    'value' => '3',
    'group' => $blogItClientConfig->get("id")
  ));
  $blog_container_id->save();
}

$main_image_width = $modx->getObject('cgSetting', array('key' => 'blogit.main_image_width'));
if (!$main_image_width) { 
  $main_image_width = $modx->newObject('cgSetting');
  $main_image_width->fromArray(array(
    'key' => 'blogit.main_image_width',
    'label' => 'Main image width',
    'xtype' => 'numberfield',
    'description' => 'Fill in the width in pixels that the blog post main image should be resized to.',
    'is_required' => '1',
    'sortorder' => '2',
    'value' => '1280',
    'group' => $blogItClientConfig->get("id")
  ));
  $main_image_width->save();
}

$main_image_overview_width = $modx->getObject('cgSetting', array('key' => 'blogit.main_image_overview_width'));
if (!$main_image_overview_width) { 
  $main_image_overview_width = $modx->newObject('cgSetting');
  $main_image_overview_width->fromArray(array(
    'key' => 'blogit.main_image_overview_width',
    'label' => 'Overview main image width',
    'xtype' => 'numberfield',
    'description' => 'Will in the width in pixels that the blog post main image on the overview should be resized to.',
    'is_required' => '1',
    'sortorder' => '3',
    'value' => '300',
    'group' => $blogItClientConfig->get("id")
  ));
  $main_image_overview_width->save();
}

$main_image_overview_height = $modx->getObject('cgSetting', array('key' => 'blogit.main_image_overview_height'));
if (!$main_image_overview_height) { 
  $main_image_overview_height = $modx->newObject('cgSetting');
  $main_image_overview_height->fromArray(array(
    'key' => 'blogit.main_image_overview_height',
    'label' => 'Overview main image height',
    'xtype' => 'numberfield',
    'description' => 'Fill in the height in pixels that the blog post main image on the overview should be resized to.',
    'is_required' => '1',
    'sortorder' => '4',
    'value' => '300',
    'group' => $blogItClientConfig->get("id")
  ));
  $main_image_overview_height->save();
}

$main_image_overview_cz = $modx->getObject('cgSetting', array('key' => 'blogit.main_image_overview_cz'));
if (!$main_image_overview_cz) { 
  $main_image_overview_cz = $modx->newObject('cgSetting');
  $main_image_overview_cz->fromArray(array(
    'key' => 'blogit.main_image_overview_cz',
    'label' => 'Overview main image crop zoom',
    'xtype' => 'modx-combo',
    'options' => 'Yes==1||No==0',
    'description' => 'Do you want to crop zoom the image in the overview if needed?',
    'is_required' => '0',
    'sortorder' => '5',
    'value' => '1',
    'group' => $blogItClientConfig->get("id")
  ));
  $main_image_overview_cz->save();
}

$use_tags = $modx->getObject('cgSetting', array('key' => 'blogit.use_tags'));
if (!$use_tags) { 
  $use_tags = $modx->newObject('cgSetting');
  $use_tags->fromArray(array(
    'key' => 'blogit.use_tags',
    'label' => 'Use post tags',
    'xtype' => 'modx-combo',
    'options' => 'Yes==1||No==0',
    'description' => 'Use Tagger to display tags for your posts? (edit these under: Extras > Tagger)',
    'is_required' => '0',
    'sortorder' => '6',
    'value' => '1',
    'group' => $blogItClientConfig->get("id")
  ));
  $use_tags->save();
}

return true;