<?php /* begin license *
 * 
 *     Tabbie, Debating Tabbing Software
 *     Copyright Contributors
 * 
 *     This file is part of Tabbie
 * 
 *     Tabbie is free software; you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation; either version 2 of the License, or
 *     (at your option) any later version.
 * 
 *     Tabbie is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 * 
 *     You should have received a copy of the GNU General Public License
 *     along with Tabbie; if not, write to the Free Software
 *     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * end license */

//Determine action and moduletype and branch accordingly

if (isset ($ntu_override_module)) {
    $moduletype = $ntu_override_module;
} else {
    $moduletype=trim(@$_GET['moduletype']); 
    if (!$moduletype)
        $moduletype=$ntu_default_module;
}

$action=trim(@$_GET['action']);
if (!$action) $action=$ntu_default_action;

if (! isset($title))
    $title = "";

if (array_key_exists($moduletype, $ntu_titles))
    $title .= " " . $ntu_titles[$moduletype] . " ";
else 
    $title = " " . ucfirst($moduletype) . " ";

include("view/header.php");
include("view/mainmenu.php");
include("view/$ntu_controller/menu.php");

//Load respective module
include("$ntu_controller/$moduletype.php");

include("view/footer.php");
?>
