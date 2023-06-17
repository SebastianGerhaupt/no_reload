<!--
content:
- (page 1) home: navigation, content, scripts
-->

<!DOCTYPE html>

<html lang="de">

<?php require_once("head.inc.html"); ?>

<body class="container">
	<div class="row">
		<!-- navigation -->
		<?php require_once("navigation.inc.php"); ?>

		<!-- content -->
		<div class="column-7">
			<main class="animate" id="no-reload">
				<h1 class="heading">
					<span class="no-reload-label">no_reload</span>
				</h1>
				<section class="section-container">
					<p class="paragraph">
						<span class="no-reload-label">no_reload</span>
						ist ein kleines Framework, dass lästige Unterbrechungen beim Laden einer Seite verhindert. So erzeugst du den Eindruck eines kontinuierlichen Flusses und deine Besucher können deine Seite ohne Flackern genießen.
					</p>
					<p class="paragraph">
						<span class="no-reload-label">no_reload</span>
						kann ganz simpel dazu genutzt werden, den Inhalt eines Teils deiner Seite einfach auszutauschen. Oder du animierst den Wechsel des Inhalts, um einen schönen Effekt zu erzielen.
					</p>
					<p class="paragraph">
						Teste
						<span class="no-reload-label">no_reload</span>,
						indem du auf einen Verweis in der Navigation auf der linken Seite klickst. Rechts kannst du über die Schaltfläche einstellen, ob du den Effekt mit oder ohne Animation erleben willst.
					</p>
				</section>
			</main>
		</div>
		<?php /* ToDo: require_once("aside.inc.php"); */ ?>
	</div>

	<!-- scripts -->
	<?php require_once("scripts.inc.html"); ?>
</body>

</html>