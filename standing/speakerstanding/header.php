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
  <div>
    <h2 class="hide">Speakerstandings Submenu</h2>
    <form action=standing.php?moduletype=speakerstanding method="POST">
        <label for="list">List Type: </label>
        <select id="list" name="list">
            <option value="all" <?php echo ($list=="all")?"selected":"" ?>>All</option>
            <option value="esl" <?php echo ($list=="esl")?"selected":"" ?>>ESL</option>
            <option value="efl" <?php echo ($list=="efl")?"selected":"" ?>>EFL</option>
            <option value="novice" <?php echo ($list=="novice")?"selected":"" ?>>Novice</option>
        </select> <br/><br/>

        <label for="round">Round: </label>
        <?php
	if ($numresults > 0) {
		echo '<select id="round" name="round">';
	        if (!$round)
	            $round=$numresults;
	        for ($i=1;$i<=$numresults;$i++) {
		    $text="<option value=\"".$i."\" ";
	            if ($i==$round)
	                $text.="selected";
	            $text.=">Round: ".$i."</option>";
	            echo "$text";
		}
		echo "</select>";
	} else {
		echo "<strong> No rounds completed, so no results</strong>";
	}
    ?>
     <br/><br/>

    <input type="submit" value="Change"/>
     </form>
   </div>
