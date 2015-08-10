<?php
/**
 * templateVars transport file for blogit extra
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 08-10-2015
 *
 * @package blogit
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $templateVars */


$templateVars = array();

$templateVars[1] = $modx->newObject('modTemplateVar');
$templateVars[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'type' => 'image',
  'name' => 'blogit.post_main_image',
  'caption' => 'Main image',
  'description' => 'Select the main image to show with this post, leave blank for no image, a re-sized verzion will be shown on the blog post overview.',
  'elements' => '',
  'rank' => 1,
  'display' => 'default',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
$templateVars[2] = $modx->newObject('modTemplateVar');
$templateVars[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'type' => 'text',
  'name' => 'blogit.post_main_image_alt',
  'caption' => 'Alt text for the main image',
  'description' => 'Fill in a description of the image (used mostly for Google).',
  'elements' => '',
  'rank' => 2,
  'display' => 'default',
  'default_text' => '',
  'properties' => 
  array (
  ),
  'input_properties' => 
  array (
    'allowBlank' => 'true',
    'maxLength' => '',
    'minLength' => '',
  ),
  'output_properties' => 
  array (
  ),
), '', true, true);
return $templateVars;
