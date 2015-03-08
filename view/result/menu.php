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
 * end license */ ?>
<div id="submenu">
    <h2 class="hide">Results Submenu</h2>
    <ul>
    <?php
    for($x=0;$x<$numresults;$x++)
    {
        if ($roundno==($x+1))
        $tag="class=\"activemain\"";
        else
        $tag="";
        echo "<li><a href=\"result.php?moduletype=round&amp;action=display&amp;roundno=".($x+1)."\" $tag>Round ".($x+1)." </a></li>\n";
    }
    ?>
        <li><a href="result.php?moduletype=currentround&amp;action=display" <?php echo ($roundno=="")?"class=\"activemain\"":""?>>Current Round</a></li>
    </ul>
</div>
