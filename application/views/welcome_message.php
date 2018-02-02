<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Welcome to CodeIgniter! (PAGE:  <?= $CURRENTPAGE; ?>)</h1>
<div id="body">
    <p>Example variable : <?= $example; ?></p>
    <p><a href="<?= site_url("mailing"); ?>">Send email with swift mailer</a></p>
	<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

	<p>If you would like to edit this page you'll find it located at:</p>
	<code>application/views/welcome_message.php</code>

	<p>The corresponding controller for this page is found at:</p>
	<code>application/controllers/Welcome.php</code>

</div>
