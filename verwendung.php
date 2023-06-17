<!--
content:
- (page 3) usage: navigation, content, scripts
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
				<h1 class="heading">Verwendung</h1>
				<section class="section-container">
					<p class="paragraph">
						Um
						<span class="no-reload-label">no_reload</span>
						auf deiner Webseite zu verwenden, musst du im
						<code class="code html-element">head</code>
						deiner HTML-Dateien die CSS-Datei
						<em>no_reload.css</em>
						und am Ende des
						<code class="code html-element">body</code>
						die JS-Datei
						<em>no_reload.js</em>
						einfügen:
					</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">link</span> <span class="html-attribute">rel</span>=<span class="html-value">"stylesheet"</span> <span class="html-attribute">href</span>=<span class="html-value">"no_reload.css"</span> <span class="html-attribute">type</span>=<span class="html-value">"text/css"</span> /&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">script</span> <span class="html-attribute">src</span>=<span class="html-value">"no_reload.js"</span>&gt;&lt;/<span class="html-element">script</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
					<p class="paragraph">Falls du schon jQuery verwendest, kannst du statt der JS-Datei no_reload.js die JS-Datei no_reload_jquery.js einbinden:</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">script</span> <span class="html-attribute">src</span>=<span class="html-value">"jquery.js"</span>&gt;&lt;/<span class="html-element">script</span>&gt;
&lt;<span class="html-element">script</span> <span class="html-attribute">src</span>=<span class="html-value">"no_reload_jquery.js"</span>&gt;&lt;/<span class="html-element">script</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
				</section>
				<section class="section-container">
					<p class="paragraph">
						Der Inhalt, der ausgetauscht werden soll, muss von einem Container-Element mit der ID
						<code class="code html-value">no-reload</code>
						umgeben werden:
					</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">div</span> <span class="html-attribute">id</span>=<span class="html-value">"no-reload"</span>&gt;...&lt;/<span class="html-element">div</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
					<p class="paragraph">
						Soll der Austausch des Inhalts nicht schlagartig stattfinden, sondern mit einer Animation eingeleitet werden, muss das Container-Element mit der ID
						<code class="code html-value">no-reload</code>
						zusätzlich die Klasse
						<code class="code html-value">animate</code>
						zugewiesen bekommen:
					</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">div</span> <span class="html-attribute">class</span>=<span class="html-value">"animate"</span> <span class="html-attribute">id</span>=<span class="html-value">"no-reload"</span>&gt;...&lt;/<span class="html-element">div</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
					<p class="paragraph">
						Weitere Klassen, die durch die JS-Datei no_reload.js verwendet werden, wenn die Animationen aktiviert sind, sind die Klassen
						<code class="code html-value">slide-up</code>,
						<code class="code html-value">show</code>
						und
						<code class="code html-value">slide-down</code>.
					</p>
				</section>
				<section class="section-container">
					<p class="paragraph">
						Damit ein Verweis die Funktion von
						<span class="no-reload-label">no_reload</span>
						verwendet, benötigt er die Klasse
						<code class="code html-value">reload-link</code>:
					</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">a</span> <span class="html-attribute">class</span>=<span class="html-value">"reload-link"</span> <span class="html-attribute">href</span>=<span class="html-value">"download.php"</span>&gt;...&lt;/<span class="html-element">a</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
					<p class="paragraph">
						Verweise zu Indexseiten müssen anders behandelt werden, sofern sie nicht die Endung
						<em>index.html</em>
						beinhalten. Dem Verweis muss dann die Klasse
						<code class="code html-value">root-link</code>
						hinzugefügt werden:
					</p>
					<div class="code-container">
<pre class="code-block">
<code>&lt;<span class="html-element">a</span> <span class="html-attribute">class</span>=<span class="html-value">"root-link"</span> <span class="html-attribute">href</span>=<span class="html-value">"/no_reload/"</span>&gt;...&lt;/<span class="html-element">a</span>&gt;</code>
</pre>
						<button class="copy-button icon-copy" title="Kopieren">
							<?php include("images/icon_copy.svg"); ?>
						</button>
						<span class="notification">Kopiert!</span>
					</div>
				</section>
			</main>
		</div>
		<?php /* ToDo: require_once("aside.inc.php"); */ ?>
	</div>

	<!-- scripts -->
	<?php require_once("scripts.inc.html"); ?>
</body>

</html>