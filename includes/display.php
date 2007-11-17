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


function displayMessagesUL($messages) {
    if (count($messages) > 0) {
        echo "<ul class=\"err\">\n";
        foreach ($messages as $message)
            echo "<li>$message</li>\n";
        echo "</ul>";
    }
}

function displayMessagesP($messages) {
    for($x = 0; $x < count($messages); $x++)
        echo "<p class=\"err\">".$messages[$x]."</p>\n";
}

?>