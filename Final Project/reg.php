<?php
ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator == "+")
{
$num1 = $_REQUEST['first'];
$num2 = $_REQUEST['second'];
$ans = $num1+$num2;
}
if($operator == "-")
{
$num1 = $_REQUEST['first'];
$num2 = $_REQUEST['second'];
$ans = $num1-$num2;
}
if($operator == "*")
{
$num1 = $_REQUEST['first'];
$num2 = $_REQUEST['second'];
$ans = $num1*$num2;
}
if($operator == "/")
{
$num1 = $_REQUEST['first'];
$num2 = $_REQUEST['second'];
$ans = $num1/$num2;
}
if($_REQUEST['first']==NULL && $_REQUEST['second']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['first']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['second']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<form>
<table style="border:groove #00FF99">
            <tr>
                <td>Enter First Number</td>
                <td colspan="1">
               
                    <input name="first" type="text" style="color:red"/></td>
            <tr>
                <td>Select Operator</td>
                <td>
                    <select name="operator" style="width: 63px">
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
					</select></td>
               </tr>
            <tr>
                <td>Enter First Number</td>
					<td>
						<input name="second" type="text"  style="color:red"/>
					</td>
               
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculate" value="Calculate"/></td>
               
            </tr>
            <tr>
                <td>Output = </td>
                <td><?php echo $ans;?></td>
               
            </tr>
       </table>
	   	   <input type="button" onclick="location.href='index.html';" value="Return to the Home Page" />
<input type="button" onclick="location.href='temp.html';" value="Go to the Temperature Calculator" />
<input type="button" onclick="location.href='weight.html';" value="Go to the Weight Calculator" />
<input type="button" onclick="location.href='reg.html';" value="Return to the Regular Calculator Home" />
 </form>