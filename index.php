<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<style>
  p#banner{
    font-size:28px;
    width:280px;
  }
  p#by_bartholomew{
    border:3px solid #00cc00;
    width:280px;
    height:160px;
    padding:10px;
  }
  input#respondent{
    border:1px solid #00cc00;
  }
  textarea#what_you_say{
    padding:10px;
    border:1px solid #00cc00;
  }
  div#gate.hide{
    display:none;
  }
</style>

</head>
<body style = "background:#f2f2f2; width:320px">
  <p id = "banner">By Bartholomew</p>
  <p id = "by_bartholomew">
    <?php
    $put_bartholomew = new DOMDocument();
    $put_bartholomew->formatOutput =true;
    $put_bartholomew->load("read_write/by_bartholomew.xml");
    //echo "test";
    echo $put_bartholomew->getElementsByTagName("by_bartholomew")->item(0)->nodeValue;
    ?>
  </p>
  <div id = "gate">
   <div>Back at Bartholomew:</div></br>
   <form action = "thank_you.php" method = "get">
   <div><label>What you say:</label></div>
   <div><textarea id = "what_you_say" name= "what_you_say" style = "width:280px; height:100px"></textarea></div></br>
   <div><label>Your name:</label></div>
     <input type = "text" id = "respondent" name = "respondent" style = "width:280px"></br>
   </br><div><input type="submit" name="submit" value="Submit"></div>
   </form>
  </div>
</body>
</html>
