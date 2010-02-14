<?php

/**
 * Plugin Name: Embed PHP in posts
 * Plugin URI: http://appswp.com/apps:445
 * Description: You can easily embed php codes in posts.
 * Version: 1.0
 * Author: Alex Emilov
 * Author URI: http://appswp.com/
 *
 * @package Embed PHP in posts
 * @author Alex Emilov <hahh.bg@gmail.com>
 * @license http://www.opensource.org/licenses/gpl-3.0.html
 *
 * --------------------------------------------------------
 *   A plugin for Wordpress for loading a box with random post continously
 *   Copyright (C) 2010 Mattias Wirf
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * --------------------------------------------------------
 */

add_shortcode('phpcode', 'php_func');

function php_func($null, $content='') {

$mycode = '' . $content . '';

$stvarno = array ("<", ">");

$zamjenjeno = array ("&lt;","&gt;");

$code = str_replace($stvarno, $zamjenjeno, $mycode);

return ('' . $code . '');

}

?>
