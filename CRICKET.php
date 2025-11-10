<?php
$cricket=array("Virat","dhoni","sachin","sehwag");
echo"<br>Displaying names in table format<br/>";
echo"<br>Names of cricket players are stored in an stored in an array<br>";
print_r($cricket);
echo"<br><br>Names of cricket players as stored in a table<br>";
echo"<br><table border=2><tr><th>Player Names</th></tr></br>";
echo"<tr><td>$Cricket[0]</td></tr>";
echo"<tr><td>$Cricket[1]</td></tr>";
echo"<tr><td>$Cricket[2]</td></tr>";
echo"<tr><td>$Cricket[3]</td></tr>";
echo "</table";
?>