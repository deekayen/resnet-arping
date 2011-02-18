<?php

include 'first.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>University Pines Setup</title>
  </head>

  <body bgcolor="ef741d" text="#000000" link="#0000000" vlink="#000000">

    <table border="0" width="100%" cellspacing="1" cellpadding="1" bgcolor="#DDDDCC" summary="">
      <tr bgcolor="#DDDDCC">
        <td align="left" valign="top"><h2>Welcome to the University Pines Internet signup</h2></td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="2" bgcolor="#FFFFFF" summary="">
      <tr>
        <td>
          The completion of this form will give your computer access to the Internet.<br /><br />
          
          You must obtain a registration key from the cashiers office in ADM 120. (903) 566-7227<br /><br />

          <hr />

          <h3>Fee Schedule</h3>
          <table border="0" cellspacing="1" cellpadding="1" summary="">
            <tr>
              <td><b>Fall:</b></td><td>$50</td>
            </tr>
            <tr>
              <td><b>Spring:</b></td><td>$50</td>
            </tr>
            <tr>
              <td><b>Summer:</b></td><td>$20</td>
            </tr>
            <tr>
              <td><b>12 months:</b></td><td>$100</td>
            </tr>
          </table>

          <hr />

          <h3>Which bedroom?</h3>
          <table border="0" cellspacing="1" cellpadding="1" summary="">
            <tr>
              <td><b>Four bedroom:</b></td><td>Bedroom <b>A</b> is <b>across</b> from the bathroom, on the <b>left</b> side.</td>
            </tr>
            <tr>
              <td>&nbsp</td> <td>Bedroom <b>B</b> is on the <b>side</b> from the bathroom, on the <b>left</b> side.</td>
            </tr>
            <tr>
              <td>&nbsp</td> <td>Bedroom <b>C</b> is on the <b>side</b> from the bathroom, on the <b>right</b> side.</td>
            </tr>
            <tr>
              <td>&nbsp</td> <td>Bedroom <b>D</b> is <b>across</b> from the bathroom, on the <b>right</b> side.</td>
            </tr>
            <tr>
              <td><b>Two bedroom:</b></td><td>Bedroom <b>A</b> is on the <b>side</b> from the bathroom.</td>
            </tr>
            <tr>
              <td>&nbsp</td><td>Bedroom <b>B</b> is <b>across</b> from the bathroom.</td>
            </tr>
          </table>

          <hr />

          <form method="post" action="reg.php">
          <b>Warning:</b> Registration keys are good for <b>one</b> registration only and will be locked to the specific computer you are using to register.<br /><br />

          <table border="0" cellspacing="1" cellpadding="1" summary="">
            <tr>
              <td>Your Apartment: </td><td><select name="apartment">
                <?php
                // list all the apartments
                // or everone will know who has a computer
                // increasing the liklihood their apartment will be robbed

                foreach($apts as $apt => $rooms) {
                    foreach($rooms as $room) {
                        echo '              <option value="'. $apt.$room .'"> '. $apt .' '. $room ."</option>\n";
                    }
                }
                ?>
                </select></td>
            </tr>
            <tr>
              <td>First Name: </td><td><input type="text" name="first_name" /></td>
            </tr>
            <tr>
              <td>Last Name: </td><td><input type="text" name"last_name" /></td>
            </tr>
            <tr>
              <td>Registration Key: </td><td><input type="text" name"reg_key" /></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" value="Register" /></td>
            </tr>
          </table>
          </form>
        </td>
      </tr>
    </table>
  <br />

  </body>
</html>

