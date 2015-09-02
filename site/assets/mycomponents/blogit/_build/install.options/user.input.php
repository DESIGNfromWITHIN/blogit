<?php

/**
 * Script to interact with user during blogit package install
 *
 * Copyright 2015 by Menno Pietersen info@mpthemes.com
 * Created on 09-02-2015
 *
 * blogit is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * blogit is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * blogit; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package blogit
 */

/**
 * Description: Script to interact with user during blogit package install
 * @package blogit
 * @subpackage build
 */

/* The return value from this script should be an HTML form (minus the
 * <form> tags and submit button) in a single string.
 *
 * The form will be shown to the user during install
 *
 * This example presents an HTML form to the user with two input fields
 * (you can have as many as you like).
 *
 * The user's entries in the form's input field(s) will be available
 * in any php resolvers with $modx->getOption('field_name', $options, 'default_value').
 *
 * You can use the value(s) to set system settings, snippet properties,
 * chunk content, etc. based on the user's preferences.
 *
 * One common use is to use a checkbox and ask the
 * user if they would like to install a resource for your
 * component (usually used only on install, not upgrade).
 */

/* This is an example. Modify it to meet your needs.
 * The user's input would be available in a resolver like this:
 *
 * $changeSiteName = (! empty($modx->getOption('change_sitename', $options, ''));
 * $siteName = $modx->getOption('sitename', $options, '').
 *
 * */

$output = '<img src="http://blogit.mpthemes.com/assets/components/blogit/img/blogIt-logo.png" alt="BlogIt logo" style="width: 323px; display: block; margin-bottom: 14px;">
<h3>Thank you for installing BlogIt</h3>
<p>We spend a lot of time creating and maintaining this MODX Extra, please visit <a href="http://mpthemes.com" target="_blank">MPThemes.com</a> to find our premium MODX Revolution themes and support us.</p>
<p>Sincerely, <br>
Menno Pietersen - MPThemes</p>';
return $output;