<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METRIC CONVERSION</title>
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <div class="container" style="text-align: center;">
        <h1>METRIC CONVERSION CHARTS - LENGTH (UK)</h1>
</div>
    <table style="text-align: center; margin: auto;">
        <tr>
            <th colspan="4" style="text-align: center;">METRIC CONVERSION</th>
        </tr>
        <tr> 
            <td><?php
                // CENTIMETRE
                $centimeter = 1;
                $mm = $centimeter * 10;
                echo $centimeter . " centimeter/s";
            ?></td>
            <td><?php
                echo $mm . " millimeters";
            ?></td>
        </tr>
        <tr> 
            <td><?php
                // DECIMETRE
                $decimetre = 1;
                $centimeter = $decimetre * 10;;
                echo $decimetre . " decimetre/s";
            ?></td>
            <td><?php
                echo $centimeter . " centimeters";
            ?></td>
        </tr>
        <tr>
            <td><?php
                // METRE
                $metre = 1;
                $centimeter = $metre * 100;
                echo $metre . " metre/s";
            ?></td>
            <td><?php
                echo $centimeter . " centimeters";
            ?></td>
        </tr>
        <tr>
            <td><?php
                // KILOMETRE
                $kilometre = 1;
                $metre = $kilometre * 1000;
                echo $kilometre . " kilometres";
            ?></td>
            <td><?php
                echo $metre . " metres";
            ?></td>
        </tr>
        <th colspan="4" style="text-align: center;">IMPERIAL CONVERSION</th>
        </tr>
        <tr>
            <td><?php
                $foot = 1;
                $inches = $foot * 12;
                echo $foot . " foot/feet";
            ?></td>
            <td><?php
                echo $inches . " inches";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $yard = 1;
                $feet = $yard * 3;
                echo $yard . " yards";
            ?></td>
            <td><?php
                echo $feet . " feet";
            ?></td>
             <td><?php
                $chain = 1;
                $yard = $chain * 22;
                echo $chain . " chains";
            ?></td>
            <td><?php
                echo $yard . " yards";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $furlong = 1;
                $yard = $furlong * 220;
                echo $furlong . " furlongs";
            ?></td>
            <td><?php
                echo $yard . " yards";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $mile = 1;
                $yards = $mile * 1760;
                $furlong = $mile * 8;
                echo $mile . " mile/s";
            ?></td>
            <td><?php
                echo $yards . " yards";
                echo " or " . $furlong . " furlongs";
            ?></td>
        </tr>
        <th colspan="4" style="text-align: center;">METRIC -> IMPERIAL CONVERSION</th>
        </tr>
        <tr>
            <td><?php
                $millimetre = 1;
                $inches = $millimetre * 0.03937;
                echo $millimetre . " millimetres";
            ?></td>
            <td><?php
                echo $inches . " inches";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $centimetre = 1;
                $inches = $centimetre * 0.3937;
                echo $centimetre . " centimetres";
            ?></td>
            <td><?php
                echo $inches . " inches";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $metre = 1;
                $inches = $metre * 39.37;
                echo $metre . " metres";
            ?></td>
            <td><?php
                echo $inches . " inches";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $metre = 1;
                $feet = $metre * 3.28084;
                echo $metre . " metres";
            ?></td>
            <td><?php
                echo $feet . " feet";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $meter = 1;
                $yard = $meter * 1.09361;
                echo $meter . " metres";
            ?></td>
            <td><?php
                echo $yard . " yards";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $kilometer = 1;
                $yard = $kilometer * 1000;
                echo $kilometer . " kilometres";
            ?></td>
            <td><?php
                echo $yard . " yards";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $kilometre = 1;
                $miles = $kilometre * 0.62137;
                echo $kilometre . " kilometres";
            ?></td>
            <td><?php
                echo $miles . " miles";
            ?></td>
        </tr>
        <th colspan="4" style="text-align: center;">IMPERIAL -> METRIC CONVERSION</th>
        <tr>
            <td><?php
                $inch = 1;
                $centimetre = $inch * 2.54;
                echo $inch . " inches";
            ?></td>
            <td><?php
                echo $centimetre . " cm";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $foot = 1;
                $centimetre = $foot * 30.48;
                echo $foot . " feet";
            ?></td>
            <td><?php
                echo $centimetre . " cm";
            ?></td>
        </tr>
            <td><?php
                $yard = 1;
                $centimetre = $yard * 91.44;
                echo $yard . " yards";
            ?></td>
            <td><?php
                echo $centimetre . " cm";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $yard = 1;
                $meter = $yard * 0.9144;
                echo $yard . " yards";
            ?></td>
            <td><?php
                echo $meter . " metres";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $mile = 1;
                $metres = $mile * 1609.34;
                echo $mile . " miles";
            ?></td>
            <td><?php
                echo $metres . " metres";
            ?></td>
        </tr>
        <tr>
            <td><?php
                $mile = 1;
                $kilometre = $mile * 1.60934;
                echo $mile . " miles";
            ?></td>
            <td><?php
                echo $kilometre . " kilometres";
            ?></td>
        </tr>
    </table>
  </body>
</html>