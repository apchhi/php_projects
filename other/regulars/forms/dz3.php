<form name="feedback" methode="POST" action="">
<label>Your name: <input type="text" name="name"></label>
<label>Your email: <input type="text" name="name"></label>
<label>Message: <textarea name="message"></textarea></label>
<input type="submit" name="send" value="to send">
</form>

<!--tag TEXTAREA i v nem php zapisvaet v GET test -->
<textarea name="test"><?= $_GET['test'] ?? '' ?></textarea>

<!-- checkbox -->

<input type="checkbox" name="chair" value="flag">
<?
if (isset($_GET['chair']) && $_GET['chair'] == 'flag') 
{
	echo "Need wheelchair access.";
} 
else 
{
	echo "Do not Need wheelchair access.";
};
?>
