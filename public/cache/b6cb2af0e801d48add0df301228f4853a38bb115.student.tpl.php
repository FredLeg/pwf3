<?php /*%%SmartyHeaderCode:2856355c247ed624e08-87992573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6cb2af0e801d48add0df301228f4853a38bb115' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\student.tpl',
      1 => 1438795693,
      2 => 'file',
    ),
    '0fd80f29ded972bbc63a061d2decc0f03725b936' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\partials\\header.tpl',
      1 => 1438519978,
      2 => 'file',
    ),
    '48251175e8fefb3b6909fa7d96880921cf02f515' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\partials\\navbar.tpl',
      1 => 1438790228,
      2 => 'file',
    ),
    '8cc740be3ffae4e0aa4f97dd6cdc508a595178f6' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\partials\\topbar.tpl',
      1 => 1438790268,
      2 => 'file',
    ),
    'c41667a6a38066af0b8c0633c316b69cd2732553' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\partials\\base.tpl',
      1 => 1438702626,
      2 => 'file',
    ),
    '79c18512fa0e351841cb67c2cfbfef1fc21b6e98' => 
    array (
      0 => 'F:\\WF3\\htdocs\\ENV\\app\\views\\admin\\partials\\footer.tpl',
      1 => 1438004173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2856355c247ed624e08-87992573',
  'variables' => 
  array (
    'form' => 0,
    'canAddStudent' => 0,
    'promo_id' => 0,
    'request' => 0,
    'HTTP_ROOT' => 0,
    'promo' => 0,
    'user' => 0,
    'promos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c247edaa9e11_52577809',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c247edaa9e11_52577809')) {function content_55c247edaa9e11_52577809($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--link href="http://localhost/public/statics/css/bootstrap.min.css" rel="stylesheet"-->
    <link href="http://localhost/public/statics/css/main.css" rel="stylesheet">
    <link href="http://localhost/public/statics/css/admin/metisMenu.min.css" rel="stylesheet">

    <link href="http://localhost/public/statics/css/admin/dataTables.bootstrap.css" rel="stylesheet">
    <link href="http://localhost/public/statics/css/admin/dataTables.responsive.css" rel="stylesheet">

    <link href="http://localhost/public/statics/css/admin/styles.css" rel="stylesheet">
    <link href="http://localhost/public/statics/css/admin/test.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/public/statics/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/png" href="http://localhost/public/statics/img/favicon.png" />

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/fr/admin">Administration WF3</a>
    </div>
    <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">





 

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil</a></li>
                        
                        <li class="divider"></li>
                        <li><a href="http://localhost/fr/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->


            </ul>
            <!-- /.navbar-top-links -->


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li class="sidebar-search">
                    <form id="form-search" action="http://localhost/fr/admin/search" method="GET">
                        <div class="input-group custom-search-form">
                            <input name="search" type="text" class="form-control" placeholder="Find...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /input-group -->
                </li>

                <li><a href="http://localhost/fr/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>

                
                                <li><a href="http://localhost/fr/admin/user"><i class="fa fa-table fa-fw"></i> Utilisateurs</a></li>
                
                                <li><a href="http://localhost/fr/admin/promotion"><i class="fa fa-table fa-fw"></i> Promotions</a></li>
                
                <li><a href="http://localhost/fr/admin/presence"><i class="fa fa-table fa-fw"></i>Présences</a></li>


                                <li><a href="http://localhost/fr/admin/student"><i class="fa fa-table fa-fw"></i> Étudiants</a></li>
                
            
                
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Liens<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="http://localhost/fr/trombino">Trombinoscope</a></li>
                        <li><a href="http://localhost/fr/presence">Précences</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">



	<h1 class="page-header">Étudiants
									<a href="http://localhost/fr/admin/student/create?promo=9" class="btn btn-primary" style="float:right">Ajouter</a>
				</h1>


				

						<div class="row">
				<label for="promo" class="col-sm-1 control-label">Promotions</label>
				<div class="col-sm-4">
				<select id="promo_select" name="promo" class="form-control required">
											<option value="11" >2015-08-31 à 2015-12-22</option>
											<option value="10" >2015-04-22 à 2015-08-07</option>
											<option value="9"  selected>2014-10-15 à 2015-03-15</option>
									</select>
				</div>
			</div>
			<hr>
			

	                <div class="row">
                    <div class="col-lg-12">

                        

                            
                                <table class="table table-striped table-bordered table-hover" id="data-table">
	<thead>
		<tr>
						<th>Id</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Actions</th>
		</tr>
	</thead>
	<tbody>
			</tbody>
</table>

                            

                            
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->


			</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="http://localhost/public/statics/js/jquery.min.js"></script>
    <script src="http://localhost/public/statics/js/bootstrap.min.js"></script>
    <script src="http://localhost/public/statics/js/admin/metisMenu.min.js"></script>
	<script src="http://localhost/public/statics/js/admin/jquery.dataTables.min.js"></script>
	<script src="http://localhost/public/statics/js/admin/dataTables.bootstrap.min.js"></script>
    <script src="http://localhost/public/statics/js/admin/admin.js"></script>

</body>
</html>


			<script>
			$(function() {
				var HTTP_ROOT = 'http://localhost/fr/'
				$('#promo_select').on('change',function(){
					window.location = HTTP_ROOT+'admin/student?promo='+this.value
				})
			})
		</script
	<?php }} ?>
