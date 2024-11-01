<div class="t24_wrapper">

	<h1>Online Termin buchen</h1>

	<p>Zwischen 10 und 18 Uhr nehmen wir ihre Termin anfrage gerne online entgegen.<br />Ihr Termin Team</p>

<?php if(isset($t24_id) and strlen($t24_id)): ?>
	<script src="https://s3-eu-west-1.amazonaws.com/termine24.de-widget/extern.js" type="text/javascript"></script>
	<a href="https://www.termine24.de/widget/<?php echo $t24_id ?>" class="termine24-widget-cta termine24-widget-cta-style"><span class="t24_arrow"></span>Jetzt reservieren<br /><span>Zur Reservierung</span></a>

	<a class="t24_powered" href="http://www.termine24.de/"></a>

	<div class="t24_clr"></div>
<?php else: ?>
	<p>Termine24 Widget have not been configured properly.<br />Please enter the Termine24 Customer ID in your WordPress admin panel.</p>
<?php endif ?>
</div>
