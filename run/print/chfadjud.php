<?
//Check Database
$query="SHOW TABLES LIKE 'draw_round%'";
$result=mysql_query($query);
$numdraws=mysql_num_rows($result);

$query="SHOW TABLES LIKE 'result_round%'";
$result=mysql_query($query);
$numresults=mysql_num_rows($result);

switch($list)
{
    case "debatelist":    $title .=" (Debate List - Manual Draw)";
                        break;
    case "adjlist":    $title .=" (Adjudicator History)";
                break;
    case "freeadj":    $title .=" (Free Adjudicators - Manual Draw)";
                break;
    case "teamadjcount": $title .=" (Team-Adjudicator Count)";
                break;
    case "main":    break;
    default:
                        $list="main";
}

//Load respective module
include("chfadjud/$list.php");
?>