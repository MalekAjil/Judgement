<?php
session_start();
 //this user is authorized one
 //so show him all cases
 if(!$_SESSION['auth']=='ok')
 {
 header("Location:index.php");
 }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title>����� ������ ������ ������</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	color: #000066;
}
.style7 {font-size: 18px; color: #000066; }
.style8 {color: #000066}
.style9 {font-size: 18px}
-->
</style></head>

<body>
<form name="form1" method="post" action="sign_lawer_register.php">
  <table width="100%" bgcolor="#D5DFFF" >
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><span class="style1">&#1573;&#1583;&#1582;&#1575;&#1604; &#1576;&#1610;&#1575;&#1606;&#1575;&#1578; &#1573;&#1588;&#1575;&#1585;&#1575;&#1578; &#1575;&#1604;&#1583;&#1593;&#1608;&#1609; &#1575;&#1604;&#1582;&#1575;&#1589;&#1577; &#1576;&#1575;&#1604;&#1602;&#1590;&#1610;&#1577; &#1575;&#1604;&#1605;&#1581;&#1583;&#1583;&#1577;</span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td align="right" bgcolor="#DDEEFF"><input name="id_sign" type="text" id="id_sign" size="23" maxlength="10"></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style7">&#1585;&#1602;&#1605; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></td>
      <td width="32%" bgcolor="#DDEEFF"><div align="right" class="style8">
        <input name="id_base" type="text" id="id_base" size="20" maxlength="11">
      </div></td>
      <td width="16%" align="right" bgcolor="#ABD5FF"><span class="style7">&#1585;&#1602;&#1605; &#1571;&#1587;&#1575;&#1587; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td width="28%" bgcolor="#DDEEFF"><div align="right" class="style8">
        <input name="kind_sign" type="text" id="kind_sign" size="23" maxlength="30">
      </div></td>
      <td width="24%" bgcolor="#ABD5FF"><div align="right" class="style8"><span class="style9">&#1606;&#1608;&#1593; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></div></td>
      <td align="center" bgcolor="#DDEEFF"><div align="right" class="style8">
        <input name="id_land" type="text" id="id_land" size="20" maxlength="11">
      </div></td>
      <td align="right" bgcolor="#ABD5FF" class="style7">&#1585;&#1602;&#1605; &#1575;&#1604;&#1593;&#1602;&#1575;&#1585; </td>
    </tr>
    <tr bgcolor="#FFFFCC" class="style1">
      <td align="center" bgcolor="#DDEEFF" class="style2"><div align="right" class="style6"> <span class="style18">
          <input name="year" type="text" id="year" size="4" maxlength="4">
          <select name="month" id="month">
            <option value="jan">1</option>
            <option value="feb">2</option>
            <option value="mar">3</option>
            <option value="apr">4</option>
            <option value="may">5</option>
            <option value="jun">6</option>
            <option value="jul">7</option>
            <option value="aug">8</option>
            <option value="sep">9</option>
            <option value="oct">10</option>
            <option value="nov">11</option>
            <option value="dec">12</option>
          </select>
          <select name="day1" id="day1">
            <option value="a">1</option>
            <option value="b">2</option>
            <option value="c">3</option>
            <option value="d">4</option>
            <option value="e">5</option>
            <option value="f">6</option>
            <option value="g">7</option>
            <option value="h">8</option>
            <option value="i">9</option>
            <option value="j">10</option>
            <option value="k">11</option>
            <option value="l">12</option>
            <option value="m">13</option>
            <option value="n">14</option>
            <option value="o">15</option>
            <option value="p">16</option>
            <option value="q">17</option>
            <option value="r">18</option>
            <option value="s">19</option>
            <option value="t">20</option>
            <option value="u">21</option>
            <option value="v">23</option>
            <option value="w">24</option>
            <option value="y">25</option>
            <option value="x">26</option>
            <option value="z">27</option>
            <option value="aa">28</option>
            <option value="ab">29</option>
            <option value="ac">30</option>
            <option value="ad">31</option>
          </select>
      </span></div></td>
      <td bgcolor="#ABD5FF"><div align="right" class="style8"><span class="style9">&#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1604;&#1573;&#1588;&#1575;&#1585;&#1577; </span></div></td>
      <td bgcolor="#DDEEFF"><div align="right" class="style8">
        <input name="court_name" type="text" id="court_name" size="20" maxlength="20">
      </div></td>
      <td align="right" bgcolor="#ABD5FF"><span class="style7">&#1575;&#1587;&#1605; &#1575;&#1604;&#1605;&#1581;&#1603;&#1605;&#1577; </span></td>
    </tr>
    <tr bgcolor="#FFFFCC">    </tr>
    <tr align="center" bgcolor="#7A92DF">
      <td colspan="4"><input name="id_case" type="hidden" value="<?php echo "$id_case";?>">
      <input type="submit" name="Submit" value="&#1573;&#1585;&#1587;&#1575;&#1604;"></td>
    </tr>
  </table>
</form>
</body>
</html>
