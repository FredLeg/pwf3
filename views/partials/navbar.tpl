	<div class="blog-masthead">
		<div class="container" id="logo">

			<nav class="nav navbar-nav blog-nav">

				<a href="{$HTTP_ROOT}">
				<h1 class="logowf3"><img src="{$IMG_ROOT}template_WB3_header.png" alt="WEBFORCE 3" width="70%"></h1>
				</a>
			</nav>
			<nav class="nav navbar-nav navbar-right blog-nav">

				{if User::isLogged()}

					<a href="{$HTTP_ROOT}admin">
						<span class="se-logger" id="se-delogger">Admin</span>
					</a>

					{if $current_page=='presence/index/'}
						{assign 'page' 'trombino'}
					{else}
						{assign 'page' 'presence'}
					{/if}
					{if $user->level==2 or $user->level==3}
						<a href="{$HTTP_ROOT}{$page}">
							<span class="se-logger" id="se-delogger">{ucfirst({$page})}</span>
						</a>
					{/if}

					Bonjour {$user->firstname}
					<div id="date">Le {$smarty.now|date_format:"d/m/Y"}
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
