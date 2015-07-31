{include file="partials/header.tpl"}

	<div class="blog-header">
	  <!--<h1 class="blog-title">{$title}</h1>-->
	  <p class="lead blog-description" id="description">{$description}</p>
	</div>

	<div class="row">
		<section class="article-content clearfix">

			<div id="nteam">
				<div id="presence-container" class="container">

					{if !empty($students)}
					{foreach $students as $student}

					<div class="presence-student">
						<div id="presence-{$student->id}" data-id="{$student->id}" class="presence">
							<div class="details">
								<img class="img-thumbnail" alt="avatar" src="{$url_trombino}{$student->getPathPhoto()}" height="170px">
								<a href="#"><h2 class="title">{$student->firstname}</h2><h2 class="title">{$student->lastname}</h2></a>
							</div>
							<div class="controls">

								<div class="row" id="checkbox-align">

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Retard">
										<input type="checkbox" name="r1" class="r1 checkbox-control" {if $student->presence->r1}checked{/if} data-checked="warning"/>
										<span class="control">R1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Retard">
										<input type="checkbox" name="r2" class="r2 checkbox-control" {if $student->presence->r2}checked{/if} data-checked="danger"/>
										<span class="control">R2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Petit Départ">
										<input type="checkbox" name="d1" class="d1 checkbox-control" {if $student->presence->d1}checked{/if} data-checked="warning"/>
										<span class="control">D1</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Grand Départ">
										<input type="checkbox" name="d2" class="d2 checkbox-control" {if $student->presence->d2}checked{/if} data-checked="danger"/>
										<span class="control">D2</span>
									</div>

									<div class="checkbox-container" data-toggle="tooltip" data-placement="bottom" title="Absence">
										<input type="checkbox" name="absent" class="absent checkbox-control" {if $student->presence->absent}checked{/if} data-checked="danger"/>
										<span class="control">Ab</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					{/foreach}
					{/if}
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
	</div><!-- /.row -->

	<!--NAV PAGE-->
	<!--
	<div class="row">
		<div class="col-md-12">
			<ul class="pager pagenav">
				<li class="previous">
					<a href="/previous" rel="prev"><span class="icon-chevron-left"></span>Précédent</a>
				</li>
				<li class="next">
					<a href="/next" rel="next"><span class="icon-chevron-right"></span>Suivant</a>
			  	</li>
			</ul>
		</div>
	</div>
	-->
	<!--END NAV PAGE-->

{include file="partials/footer.tpl"}
