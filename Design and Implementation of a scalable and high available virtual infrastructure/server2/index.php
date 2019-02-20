<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - AWS Elastic Beanstalk</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/server2/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1 style="color:red;">Server-2!</h1>
	<h1 style="color: blue;">----------------------<h1>
	<h1>Welcome to AWS Server Expert <span style="color:red;">Group-5!!</span></h1>
    </section>

    <section class="instructions">
        <h2>Who We Are?</h2>
        <p style="text-align: justify; font-size: 20px;">
	This is Group-5 of Introduction to the Cloud Computing Course. We are total five active 	members in the group and we all belong to Computer Science Department of Blekinge 	 	 Institute of Technology (BTH). This group also known as triangle group, because in this 	group we are the student of three such different countries as - <strong>Bangladesh, China 		and India</strong>. Besides the lab work, we preserve and practice diverse culture in the 		group. All the group members are very active and self motivated. We are proud of our 		group.
	</p>

        <h2>List of Active Members:</h2>
        <ul style="color: red; font-size: 25px;">
            <li style="color: red;">Sri Harsha Arakatavemula</li>
            <li style="color: red;">Suman Barua</li>
            <li style="color: red;">Bing Li</li>
	    <li style="color: red;">Guojun Lai</li>
	    <li style="color: red;">Narshima Krishna Nannuri</li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
