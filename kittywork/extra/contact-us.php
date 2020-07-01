<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email Form</title>
</head>
<body>
<form name="form1" method="post" action="contactformprocess.php">
    <table width="100%" border="0" cellspacing="0" cellpadding="6">
      <tr>
        <td><label for="email">
            <div align="right">Email Address:</div>
          </label>
        </td>
        <td><div align="left">
          <input name="email" type="text" id="email" size="35" maxlength="100">
        </div></td>
      </tr>
      <tr>
        <td><label for="name">
            <div align="right">Username:</div>
          </label>
        </td>
        <td><div align="left">
          <input name="name" type="text" id="name" size="25" maxlength="25">
        </div></td>
      </tr>
     <!--
      <tr>
      	<td>
        	<div align="right">Type of Response</div>
        </td>
        <td><div align="left">
          <select name="response" id="response">
            <option>Choose...</option>
            <option value="idea">idea</option>
            <option value="comment">comment</option>
            <option value="question">question</option>
            <option value="compliant">compliant</option>
            <option value="other">other</option>
          </select>
        </div></td>
      </tr> 
    -->
      <tr>
        <td><div align="right">
          <label for="comments">Comments:</label>
        </div></td>
        <td><div align="left">
          <textarea name="comments" id="comments" cols="25" rows="5"></textarea>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label for="submit"></label>
          <div align="left"><center>
            <input type="submit" name="submit" id="submit" value="Send Email!">
          </div>
        </div></td>
      </tr>
    </table>
  </form>
</body>
</html>