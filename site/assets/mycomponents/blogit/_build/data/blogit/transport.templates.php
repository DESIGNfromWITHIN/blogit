<?php
/**
 * templates transport file for blogit extra
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 09-02-2015
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
/* @var xPDOObject[] $templates */


$templates = array();

$templates[1] = $modx->newObject('modTemplate');
$templates[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'templatename' => 'Blogit container',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'icon' => '',
  'template_type' => 0,
  'properties' => NULL,
), '', true, true);
$templates[1]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/templates/Blogit/Blogit container.html'));

$templates[2] = $modx->newObject('modTemplate');
$templates[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'templatename' => 'Blogit post',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'icon' => '',
  'template_type' => 0,
  'properties' => NULL,
), '', true, true);
$templates[2]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/templates/Blogit/Blogit post.html'));

return $templates;
