<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit1</title>
</head>
<body>
<?
  $z = $_GET[id];
  include 'connect.php' ;
  $sql = "select customer.*,product.* from customer inner join product on customer.cus_id = product.cus_id where customer.cus_id = '$z'" ;
  $query = mysql_query($sql);
  $rs = mysql_fetch_assoc($query);
 
?>
<form action="edit2.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
   
  <p>ID :
    <input name="text1" type="text" id="text1" value="<?=$rs['cus_id'] ?>" readonly />
  </p>
 
     <p>Title :
       <select name="select" id="select" >
       <option value="Mr" selected="selected"><?=$rs['cus_title']  ?></option>
       <option value="Miss">Mrs</option>
       <option value="Miss">Miss</option>
       <option value="Boy">Boy</option>
       <option value="Girl">Girl</option>
    </select>  
     
 
  <p>
    Name :
    <input type="text" name="text2" id="text" value="<?=$rs['cus_fname']?>" />
  </p>
  <p>
    Surname :
    <input type="text" name="text3" id="text3" value="<?=$rs['cus_lname']?>" />
  </p>
  <p>
    Address :
    <input type="text" name="text4" id="text4" value="<?=$rs['cus_addr']?>" />
  </p>
  <p>
    Telephone :
    <input type="text" name="text5" id="text5" value="<?=$rs['cus_tel']?>" />
  </p>
  <p>
    Picture :
    <input name="imageField" type="image" id="imageField" src="image/<?=$rs[cus_pic] ?>" align="middle" width="150" height="150" />

    <input type="file" name="fileField" id="fileField" />
  </p>
  <p>
    ProName :
      <input type="text" name="text6" id="text6" value="<?=$rs['pro_name']?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
