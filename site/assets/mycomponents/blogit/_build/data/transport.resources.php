<?php
/**
 * resources transport file for blogit extra
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
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array (
  'id' => 1,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Blog',
  'longtitle' => '',
  'description' => 'Demo blog container page for Blogit.',
  'alias' => 'blog',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => true,
  'template' => 'Blogit container',
  'menuindex' => 2,
  'searchable' => true,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'CollectionContainer',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/blog.content.html'));

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array (
  'id' => 2,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Post 1',
  'longtitle' => '',
  'description' => 'Demo post 1 for the BlogIt extra.',
  'alias' => 'post-1',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => 'Demo summary of post 2 for the BlogIt extra.',
  'richtext' => true,
  'template' => 'Blogit post',
  'menuindex' => 0,
  'searchable' => true,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 0,
  'properties' => NULL,
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/post_1.content.html'));

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array (
  'id' => 3,
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'Post 2',
  'longtitle' => '',
  'description' => 'Demo post 2 for the BlogIt extra.',
  'alias' => 'post-2',
  'link_attributes' => '',
  'published' => true,
  'isfolder' => false,
  'introtext' => 'Demo summary of post 2 for the BlogIt extra.',
  'richtext' => true,
  'template' => 'Blogit post',
  'menuindex' => 1,
  'searchable' => true,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => false,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 0,
  'properties' => NULL,
), '', true, true);
$resources[3]->setContent(file_get_contents($sources['data'].'resources/post_2.content.html'));

return $resources;
