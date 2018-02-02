<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="description" content="<?= $METADESCRIPTION; ?>">
    <title><?= $TITLE; ?></title>
    <!-- Custom CSS -->
    <?php foreach($CSS as $url): ?>
        <link rel="stylesheet" type="text/css" media="screen" href="<?= $url; ?>" />
    <?php endforeach; ?>
</head>
<body>

<div id="container">
    <?= $CONTENT; ?>
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<?php foreach($JS as $url): ?>
    <script type="text/javascript" src="<?= $url; ?>"></script>
<?php endforeach; ?>
</body>
</html>
