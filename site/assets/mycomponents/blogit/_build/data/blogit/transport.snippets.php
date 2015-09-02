<?php
/**
 * snippets transport file for blogit extra
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
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'blogit.lexicon_load',
  'description' => 'Blogit - Created by MPThemes http://mpthemes.com',
  'properties' => 
  array (
  ),
), '', true, true);
$snippets[1]->setContent(file_get_contents(MODX_BASE_PATH . 'core/components/blogit/elements/snippets/blogit.lexicon_load.php'));

return $snippets;
