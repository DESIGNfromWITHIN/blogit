<?php
/**
 * chunks transport file for blogit extra
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
/* @var xPDOObject[] $chunks */


$chunks = array();

$chunks[1] = $modx->newObject('modChunk');
$chunks[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'blogit.blog_row_tpl',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[1]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/chunks/Blogit/blogit.blog_row_tpl.html'));

$chunks[2] = $modx->newObject('modChunk');
$chunks[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'name' => 'blogit.tag_links_tpl',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[2]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/chunks/Blogit/blogit.tag_links_tpl.html'));

$chunks[3] = $modx->newObject('modChunk');
$chunks[3]->fromArray(array (
  'id' => 3,
  'property_preprocess' => false,
  'name' => 'blogit.container',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[3]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/chunks/Blogit/blogit.container.html'));

$chunks[4] = $modx->newObject('modChunk');
$chunks[4]->fromArray(array (
  'id' => 4,
  'property_preprocess' => false,
  'name' => 'blogit.get_posts',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[4]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/chunks/Blogit/blogit.get_posts.html'));

$chunks[5] = $modx->newObject('modChunk');
$chunks[5]->fromArray(array (
  'id' => 5,
  'property_preprocess' => false,
  'name' => 'blogit.taglist',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$chunks[5]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/chunks/Blogit/blogit.taglist.html'));

return $chunks;
