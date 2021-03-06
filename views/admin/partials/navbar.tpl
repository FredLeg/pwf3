<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{$HTTP_ROOT}admin">Administration WF3</a>
    </div>
    <!-- /.navbar-header -->

    {include file="admin/partials/topbar.tpl"}

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li class="sidebar-search">
                    <form id="form-search" action="{$HTTP_ROOT}admin/search" method="GET">
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

                <li><a href="{$HTTP_ROOT}admin"{if 'dashboard' == $current_page} class="active"{/if}><i class="fa fa-dashboard fa-fw"></i>Dashboard</a></li>

                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/school"{if 'schools' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Écoles</a></li>
                {/if}

                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dir') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/user"{if 'user' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Utilisateurs</a></li>
                {/if}

                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dir') or $user->isRole('prof')}
                <li><a href="{$HTTP_ROOT}admin/promotion"{if 'promotion' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i> Promotions</a></li>
                {/if}

                <li><a href="{$HTTP_ROOT}admin/presence"{if 'admin/presence' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Présences</a></li>

                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dir') or $user->isRole('prof') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/student"{if 'student' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i> Étudiants</a></li>
                {/if}

                {if $user->isRole('dev')}
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Developers<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{$HTTP_ROOT}admin/crop">crop image</a></li>
                        <li><a href="{$HTTP_ROOT}admin/test/excel">load excel</a></li>
                    </ul>
                </li>
                {/if}

                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Liens<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{$HTTP_ROOT}trombino">Trombinoscope</a></li>
                        <li><a href="{$HTTP_ROOT}presence">Précences</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
