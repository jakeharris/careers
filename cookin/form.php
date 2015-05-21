<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="520" border="0">
    <tr>
      <td width="124" align="right">Name:</td>
      <td width="388"><label>
        <input type="text" name="name" id="name" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Organization:</td>
      <td><label>
        <input type="text" name="org" id="org" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Address:</td>
      <td><label>
        <input type="text" name="add1" id="add1" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Address Line 2:</td>
      <td><label>
        <input type="text" name="add2" id="add2" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><table width="516" border="0">
        <tr>
          <td width="44" align="right">City:</td>
          <td width="144"><label>
            <input type="text" name="city" id="city" />
          </label></td>
          <td width="64" align="right">ST:</td>
          <td width="77"><label>
            <input name="st" type="text" id="st" size="5" />
          </label></td>
          <td width="77" align="right">Zip:</td>
          <td width="84"><label>
            <input name="zip" type="text" id="zip" size="10" />
          </label></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right">Phone:</td>
      <td><label>
        <input type="text" name="phone" id="phone" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Fax:</td>
      <td><label>
        <input type="text" name="fax" id="fax" />
      </label></td>
    </tr>
    <tr>
      <td align="right">E-mail:</td>
      <td><label>
        <input type="text" name="email" id="email" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Website (url):</td>
      <td><label>
        <input type="text" name="url" id="url" />
      </label></td>
    </tr>
    <tr>
      <td align="right">Sponsorship</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><table width="516" border="0">
        <tr>
          <td width="167" align="center" bgcolor="#FF9966"><strong>Cookin'<br />
            ($250-$999)</strong></td>
          <td width="167" align="center" bgcolor="#FF9933"><strong>Smokin'<br />
            ($1000-$1499)<br />
            Representatives Present? </strong><br />
            
              <label>
                <input type="checkbox" name="smokinrep" value="yes" id="smokinrep_0" />
                Yes</label> 
              &nbsp;
              <label><input type="checkbox" name="smokinrep" value="no" id="smokinrep_1" />
                No</label>
              <br />
            </p></td>
          <td width="168" align="center" bgcolor="#FF0000"><strong>Sizzlin'<br />
            ($1500-$5000)<br />
            Representatives Present?
            <label> </label>
            <br />
          </strong>
            <p>
              <label>
                <input type="checkbox" name="sizzlinrep" value="yes" id="sizzlinrep_0" />
                Yes</label>
              <br />
              <label>
                <input type="checkbox" name="sizzlinrep" value="no" id="sizzlinrep_1" />
                No</label>
              <br />
            </p>
            <strong>            </strong></td>
        </tr>
        <tr>
          <td align="center">Amount:
            <label>
              <input name="cookin" type="text" id="cookin" size="10" />
            </label></td>
          <td align="center">Amount: 
            <label>
              <input name="smokin" type="text" id="smokin" size="10" />
              <br />
            </label></td>
          <td align="center">Amount: 
            <label>
              <input name="sizzlin" type="text" id="sizzlin" size="10" />
            </label></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">Display Table? <br />
         
              <label>
                <input type="checkbox" name="smokintable" value="yes" id="smokintable_0" />
                Yes</label> 
              &nbsp;&nbsp;
<label>
                <input type="checkbox" name="smokintable" value="no" id="smokintable_1" />
              No</label>
              <br />
            </p></td>
          <td align="center">Display Table? <br />
            
              <label>
                <input type="checkbox" name="sizzlintable" value="yes" id="smokintable_2" />
                Yes</label>
              &nbsp;&nbsp;
<label>
                <input type="checkbox" name="sizzlintable" value="no" id="smokintable_3" />
              No</label>
            </p></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="2">Table Location Choice (Sizzlin' Sponsors Only)</td>
    </tr>
    <tr>
      <td colspan="2">1st 
        <label>
          <input name="table1" type="text" id="table1" size="5" />
        </label>
        2nd 
        <label>
          <input name="table2" type="text" id="table2" size="5" />
        </label>
        3rd 
        <label>
          <input name="table3" type="text" id="table3" size="5" />
        </label>
        <br />
      (Refer to map for locations)</td>
    </tr>
    <tr>
      <td colspan="2">Comments:<br /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <textarea name="comments" id="comments" cols="45" rows="5"></textarea>
        <input name="date" type="hidden" id="date" value="<? echo $date=date("m/d/y   h:i A"); ?>" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="submit" name="SUBMIT" id="SUBMIT" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>