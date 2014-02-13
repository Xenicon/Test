<html>
<head>
<title>test</title>
</head>

<body>

<?

if(isset($_POST["submit"]))
	{
	//Datenbankeintrag
	$_POST["g_time"] = time();

	$datum = explode("-", $_POST["arrivalMonthYear"]);
	$_POST["Wann_Datum"] = mktime(0,0,1,$datum[1], $_POST["arrivalDay"], $datum[0]);

	if(!empty($_POST["Kommentar"]))
		ins($_POST, "gaestebuch", "Eintrag Gästebuch", __FILE__, __LINE__);
	}
?>
<style type="text/css">
form.critique .star-rating,
form.critique .star-rating .current-rating {
  background: url('restaurant_kritik_star_rating.png') left repeat-x;

}
form.critique .star-rating {
  position: relative;
  width: 80px;
  height: 16px;
  overflow: hidden;
  list-style: none;
  margin: 0;
  padding: 0;
  background-position: top left;
}
form.critique .star-rating li {
  display: inline;
}
form.critique .star-rating a,
form.critique .star-rating .current-rating {
  position: absolute;
  top: 0;
  left: 0;
  text-indent: -1000em;
  height: 16px;
  line-height: 16px;
  outline: none;
  overflow: hidden;
  border: none;
}
form.critique .star-rating a.stars1 {
  width: 16px;
  z-index: 6;
}
form.critique .star-rating a.stars2 {
  width: 32px;
  z-index: 5;
}
form.critique .star-rating a.stars3 {
  width: 48px;
  z-index: 4;
}
form.critique .star-rating a.stars4 {
  width: 64px;
  z-index: 3;
}
form.critique .star-rating a.stars5 {
  width: 80px;
  z-index: 2;
}
form.critique .star-rating .current-rating {
  z-index: 1;
  background-position: bottom left;
}
form.critique .star-ratings-block {
  font-size: .75em;
  width: 100%;
}
</style>



		<form action="index1.php?item=gaestebuch" method=post name="f" class="critique" id="new_critique">
		<input id="critique_overall_food" name="Empfang" type="hidden" />
		<input id="critique_overall_food" name="Service" type="hidden" />
		<input id="critique_overall_food" name="Kellnerempfehlung" type="hidden" />
		<input id="critique_overall_food" name="Schnelligkeit" type="hidden" />
		<input id="critique_overall_food" name="Essen" type="hidden" />
		<input id="critique_overall_food" name="Sauberkeit" type="hidden" />
		<table border=0 width=275 cellpadding=2 style="font-size:16px">
		<tr><td colspan=2>
		Bitte geben Sie Ihre Bewertung ab!
		</td></tr>
		<tr><td width=195>Empfang</td><td width=80>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food2" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Empfang.value = 1; document.getElementById('overall_food').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food2').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food2').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Empfang.value = 2; document.getElementById('overall_food').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food2').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food2').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Empfang.value = 3; document.getElementById('overall_food').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food2').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food2').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Empfang.value = 4; document.getElementById('overall_food').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food2').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food2').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Empfang.value = 5; document.getElementById('overall_food').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food2').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food2').style.width = '0px'; return false;">5</a></li>
		</ul></td></tr>
		<tr><td>Service</td><td>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food3" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food4" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Service.value = 1; document.getElementById('overall_food3').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food4').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food4').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Service.value = 2; document.getElementById('overall_food3').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food4').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food4').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Service.value = 3; document.getElementById('overall_food3').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food4').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food4').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Service.value = 4; document.getElementById('overall_food3').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food4').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food4').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Service.value = 5; document.getElementById('overall_food3').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food4').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food4').style.width = '0px'; return false;">5</a></li>
		</ul></td></tr>
		<tr><td>Kellnerempfehlung</td><td>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food5" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food6" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Kellnerempfehlung.value = 1; document.getElementById('overall_food5').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food6').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food6').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Kellnerempfehlung.value = 2; document.getElementById('overall_food5').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food6').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food6').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Kellnerempfehlung.value = 3; document.getElementById('overall_food5').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food6').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food6').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Kellnerempfehlung.value = 4; document.getElementById('overall_food5').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food6').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food6').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Kellnerempfehlung.value = 5; document.getElementById('overall_food5').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food6').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food6').style.width = '0px'; return false;">5</a></li>
		</ul></td></tr>
		<tr><td>Schnelligkeit</td><td>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food7" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food8" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Schnelligkeit.value = 1; document.getElementById('overall_food7').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food8').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food8').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Schnelligkeit.value = 2; document.getElementById('overall_food7').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food8').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food8').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Schnelligkeit.value = 3; document.getElementById('overall_food7').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food8').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food8').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Schnelligkeit.value = 4; document.getElementById('overall_food7').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food8').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food8').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Schnelligkeit.value = 5; document.getElementById('overall_food7').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food8').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food8').style.width = '0px'; return false;">5</a></li>
		</ul></td></tr>
		<tr><td>Essen</td><td>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food9" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food10" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Essen.value = 1; document.getElementById('overall_food9').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food10').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food10').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Essen.value = 2; document.getElementById('overall_food9').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food10').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food10').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Essen.value = 3; document.getElementById('overall_food9').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food10').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food10').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Essen.value = 4; document.getElementById('overall_food9').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food10').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food10').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Essen.value = 5; document.getElementById('overall_food9').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food10').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food10').style.width = '0px'; return false;">5</a></li>
		</ul></td></tr>
		<tr><td>Sauberkeit</td><td>
		<ul class="star-rating" style="margin-top:5px">
		<li class="current-rating" id="overall_food11" style="width: 0px;">Currently /5</li>
		<li class="current-rating" id="overall_food12" style="width: 0px;">Currently /6</li>
		<li><a href="#" class="stars1" onClick="document.f.Sauberkeit.value = 1; document.getElementById('overall_food11').style.width = '16px'; return false;" onMouseOver="document.getElementById('overall_food12').style.width = '16px'; return false;" onMouseOut="document.getElementById('overall_food12').style.width = '0px'; return false;">1</a></li>
		<li><a href="#" class="stars2" onClick="document.f.Sauberkeit.value = 2; document.getElementById('overall_food11').style.width = '32px'; return false;" onMouseOver="document.getElementById('overall_food12').style.width = '32px'; return false;" onMouseOut="document.getElementById('overall_food12').style.width = '0px'; return false;">2</a></li>
		<li><a href="#" class="stars3" onClick="document.f.Sauberkeit.value = 3; document.getElementById('overall_food11').style.width = '48px'; return false;" onMouseOver="document.getElementById('overall_food12').style.width = '48px'; return false;" onMouseOut="document.getElementById('overall_food12').style.width = '0px'; return false;">3</a></li>
		<li><a href="#" class="stars4" onClick="document.f.Sauberkeit.value = 4; document.getElementById('overall_food11').style.width = '64px'; return false;" onMouseOver="document.getElementById('overall_food12').style.width = '64px'; return false;" onMouseOut="document.getElementById('overall_food12').style.width = '0px'; return false;">4</a></li>
		<li><a href="#" class="stars5" onClick="document.f.Sauberkeit.value = 5; document.getElementById('overall_food11').style.width = '80px'; return false;" onMouseOver="document.getElementById('overall_food12').style.width = '80px'; return false;" onMouseOut="document.getElementById('overall_food12').style.width = '0px'; return false;">5</a></li>
		</ul></td>
        </tr>

        <tr valign="bottom" height="25px">
            <td colspan="2">Besucht am: </td>
        </tr>
        <tr valign="top">
            <td align="right">
            <select class="selectdate" name="arrivalMonthYear">
                <option selected value="0-0">Monat, Jahr</option>
                <?
                $start = time() - 15552000;
                for($i=$start;$i<=time();$i=$i+2592000)
                	{
                	if(date("M",$i) == date("M"))
                		$selected = "selected";
                	else
                		$selected = "";
                	print "<option value='".date("Y",$i)."-".date("n",$i)."' ".$selected.">".date("M",$i).", ".date("Y",$i)."</option>\n";
                	}
                ?>
            </select>
            </td>
            <td align="right">
            <select class="selectday" name="arrivalDay">
                <option selected value="0">Tag</option>
                <?
                for($i=1;$i<=31;$i++)
                	{
                	if($i == date("j"))
                		$selected = " selected";
                	else
                		$selected = "";

                	print "<option value='".$i."'".$selected.">".$i."\n";
                	}
                ?>

            </select>
            </td>
        </tr>

		<tr><td colspan=2>
		Mittagessen&nbsp;<input type=radio name="Wann" value="Mittagessen" checked>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Abendessen&nbsp;<input type=radio name="Wann" value="Abendessen">
		</td></tr>
		<tr><td colspan=2>
		<textarea style="width:275px;height:100px" name="Kommentar"></textarea>
		</td></tr>
		<tr><td colspan=2 align="right"><input type=submit name="submit" value="ABSENDEN"></td></tr>
		</table>


		</form>
</body>
</html>
