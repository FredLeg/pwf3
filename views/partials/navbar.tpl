	<div class="blog-masthead">
		<div class="container" id="logo">

			<nav class="nav navbar-nav blog-nav">

				<h1 class="logowf3"><img src="public/statics/img/template_WB3_header.png" alt="WEBFORCE 3"></h1>


				<!--{foreach from=$pages item=page}
				<a class="blog-nav-item {if $page.url == $current_page || $page.url == $target || $page.url == "$target/$action"}active{/if}" href="{$HTTP_ROOT}{$page.url}">{$page.name}</a>
				{/foreach} -->
			</nav>

			<nav class="nav navbar-nav navbar-right blog-nav">
				{if User::isLogged()}
				<span class="nom">Bonjour {$user->firstname},
				</span>
					<div id="date">nous sommes le {$smarty.now|date_format:"d/m/Y"}
					<i class="glyphicon glyphicon-time"="true"></i>
				</div>
				<a href="{$HTTP_ROOT}logout">
					<span class="se-logger" id="se-delogger"> Se déconnecter</span>
					<i class="glyphicon glyphicon-log-out aria-hidden"="true"></i>
				</a>
				{else}
				<a href="{$HTTP_ROOT}login">
					<span class="se-logger" id="se-logger"> Se connecter</span>
					<i class="glyphicon glyphicon-log-in aria-hidden"="true"></i>
				</a>
				{/if}
			</nav>
		</div>
	</div>
