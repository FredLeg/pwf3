{include file="partials/header.tpl"}

<style>
	body {
		color: #838383;
	}
</style>

<a href="/app/tests/fred/crop">crop</a><br>
<br>
<br>current_page &#9830; {$current_page}
<br>ID &#9830; [{$id}]
<br><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle">
<br>param &#9830; {$param}


<style>
	.image-circle {
	    border-radius: 50%;
	    width: 92px;
	    height: 92px;
	    border: 4px solid grey;
	    margin: 10px;
	}
</style>

<hr>

<img src="http://lorempixel.com/output/people-q-c-200-200-1.jpg">


{include file="partials/footer.tpl"}