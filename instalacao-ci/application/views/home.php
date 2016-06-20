

<?php //$this->load->view('commons/header'); ?>

<p><?php  //echo $content; ?></p>

<?php //$this->load->view('commons/footer'); ?>

<!--
<html>
<head>
<title><?=$title?></title>
</head>
<body>
<h1><?=$content?></h1>
<ul>
<?php foreach($domains as $domain):?>
<li><?=$domain?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
-->



<html>
	<head>
		<title>{$title}</title>
	</head>
<body>
	<h1>{$content}</h1>
	<ul>
	{domains}
	<li>{title} - {body}</li>
	{/domains}
</body>
</html>

