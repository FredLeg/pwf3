	<div class="blog-masthead">
		<div class="container" id="logo">

			<nav class="nav navbar-nav blog-nav">

				<h1 class="logowf3">WEBFORCE 3</h1>

				<!--{foreach from=$pages item=page}
				<a class="blog-nav-item {if $page.url == $current_page || $page.url == $target || $page.url == "$target/$action"}active{/if}" href="{$HTTP_ROOT}{$page.url}">{$page.name}</a>
				{/foreach} -->
			</nav>

			<nav class="nav navbar-nav navbar-right blog-nav">
				<a href="{$HTTP_ROOT}logger">
					<span class="se-logger" id="se-logger"> Se connecter</span>
					<i class="glyphicon glyphicon-log-in aria-hidden"="true"></i>
				</a>
			</nav>
		</div>
	</div>
