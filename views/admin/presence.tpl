 {include file="admin/partials/header.tpl"}


 {include file="admin/partials/base.tpl" entity_name="presence" title="Feuille de Présences" back_link="{$HTTP_ROOT}admin/presence"}


 <!--<div id="piechart" style="width: 900px; height: 500px;"></div>-->
 <div id="linechart" style="width: 900px; height: 500px;"></div>

 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">

 	var graph_types = ['piechart', 'linechart'];
 	var presences_data = {$presences_data};
 	var graph_type = null;

 	{literal}
 	for(var i in graph_types) {

 		var graph_type = graph_types[i];

	 	google.load("visualization", "1", {packages:["corechart"]});
	 	google.setOnLoadCallback(drawChart);
	}

	function drawChart() {

 		var data = google.visualization.arrayToDataTable(presences_data);

 		var options = {
 			title: 'Tableau des Feuilles de Présences',
      legend: 'none',
 		};

 		/*
 		switch(graph_type) {
 			case 'piechart':
 				var chart = new google.visualization.PieChart(document.getElementById(graph_type));
 			break;
 			case 'linechart':
 				var chart = new google.visualization.LineChart(document.getElementById(graph_type));
 			break;
 		}
 		*/

 		var chart = new google.visualization.LineChart(document.getElementById(graph_type));

 		chart.draw(data, options);
 	}
	{/literal}
 </script>

 {include file="admin/partials/footer.tpl"}
