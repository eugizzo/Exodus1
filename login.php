<?php
session_start();
include 'dashboard/db/connection.php';


// try{

if (isset($_POST['email']) && isset($_POST['password'])) {

	$email = trim($_POST['email']);
	$password = strip_tags(trim($_POST['password']));

	$login = "SELECT *FROM users WHERE email=?  AND password=?";

	$query = $conn->prepare($login);
	$query->execute(array($email, $password));

	$row = $query->fetch();
	$_SESSION['username'] = $row['username'];
	$_SESSION['userType'] = $row['userType'];
	$_SESSION['phone'] = $row['phone'];

	$imageURL = '../img/profile/' . $row['profile'];
	$imageURL2 = 'img/profile/' . $row['profile'];
	$imageURL1 = '../enduserProfile/' . $row['profile'];
	$imageURL3 = '../../enduserProfile/' . $row['profile'];
	if ($row > 0) {
		$_SESSION['admin'] = $_SESSION['profile'] = $imageURL;



		$_SESSION['email'] = $email;
		if ($_SESSION['userType'] == 'Admin') {
			$_SESSION['admin'] = $_SESSION['profile'] = $imageURL;
			$_SESSION['adminImage'] = $_SESSION['profile'] = $imageURL2;
?>
			<script type="text/javascript">
				alert("login successfull, Welcome <?php echo $email ?> to Exodus Dashboard ");
				location.href = 'dashboard/index.php';
			</script>

		<?php
		}
		if ($_SESSION['userType'] == 'endUser') {
			$_SESSION['userimage'] = $_SESSION['profile'] = $imageURL1;
			$_SESSION['userimage3'] = $_SESSION['profile'] = $imageURL3;
		?>
			<script type="text/javascript">
				alert("login successfull, Welcome <?php echo $email ?> to Exodus Dashboard ");
				location.href = 'endUserDashboard/index.php';
			</script>

		<?php
		}
	} else {
		?>
		<script type="text/javascript">
			alert("password and email not match  please try again !! ");
			location.href = 'signup_page.php';
		</script>

	<?php
	}
} else {
	?>
	<script type="text/javascript">
		alert("<p class='text-danger'>password and email is required </p>");
		location.href = 'signup_page.php';
	</script>

<?php
}

// }
// catch(PDOExeption $e){
// 	echo "error".$e->getmessage();
// }
?>