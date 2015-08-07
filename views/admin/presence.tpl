 {include file="admin/partials/header.tpl"}


 {include file="admin/partials/base.tpl" entity_name="presence" title="Feuille de Présences" back_link="{$HTTP_ROOT}admin/presence"}


 <!--<div id="piechart" style="width: 900px; height: 500px;"></div>-->
 <div id="ColumnChart" class="chart"></div>

 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">

 	var graph_types = ['piechart', 'ColumnChart'];
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
 			title: 'Tableau indicatif par semaine',
      legend: 'none',
      vAxis: {minValue: 0,
      ticks: [0, 1, 2, 3, 4, 5]}
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

 		var chart = new google.visualization.ColumnChart(document.getElementById(graph_type));

 		chart.draw(data, options);
 	}

    $(window).resize(function() {
    drawChart();
{/literal}
});

 </script>

<div id="corechart" class="chart">
  <script type="text/javascript">
  {literal}

  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart2);
  function drawChart2() {
  var data = google.visualization.arrayToDataTable([
    ['Session', 'Retard', 'Absence', 'Départ' ],
    ['1',  1, 0, 2],
    ['2',  2, 1, 3],
    ['3',  1, 2, 0],
    ['4',  0, 1, 5]
  ]);

  var options = {
    title: 'Tableau récapitulatif par mois',
    hAxis: {title: 'Mois',  titleTextStyle: {color: '#333'}},
    vAxis: {minValue: 0,
      ticks: [0, 1, 2, 3, 4, 5]}
  };

  var chart = new google.visualization.AreaChart(document.getElementById('corechart'));
  chart.draw(data, options);
}

  $(window).resize(function(){
  drawChart2();
});

  {/literal}
</script>
</div>

 {include file="admin/partials/footer.tpl"}
