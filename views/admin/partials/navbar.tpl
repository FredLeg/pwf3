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

<<<<<<< HEAD
                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dir') or $user->isRole('prof') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/promotion"{if 'promotion' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i> Promotions</a></li>
=======
                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/promotion"{if 'promotion' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Promotions</a></li>
>>>>>>> e519456124c5580988fe577fd12d47abadf9ebf9
                {/if}

                <li><a href="{$HTTP_ROOT}admin/presence"{if 'admin/presence' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Présences</a></li>


<<<<<<< HEAD
                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('dir') or $user->isRole('prof') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/student"{if 'student' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i> Étudiants</a></li>
                {/if}

=======
                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('prof') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/student"{if 'student' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Étudiants</a></li>
                {/if}

                {if $user->isRole('admin') or $user->isRole('pdt') or $user->isRole('prof') or $user->isRole('dev')}
                <li><a href="{$HTTP_ROOT}admin/presences"{if 'presences' == $current_page} class="active"{/if}><i class="fa fa-table fa-fw"></i>Présences A supprimer</a></li>
                {/if}
>>>>>>> e519456124c5580988fe577fd12d47abadf9ebf9
            {*
                {foreach $pages as $page_url => $page_params}
                {if is_array($page_params)}
                <li><a href="{$HTTP_ROOT}{$page_url}"{if $page_url == $current_page} class="active"{/if}><i class="fa {$page_params[1]} fa-fw"></i> {$page_params[0]}</a></li>
                {/if}
                {/foreach}
            *}
                {if $user->isRole('dev')}
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Developers<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{$HTTP_ROOT}tests/fred/crop">crop image</a></li>
                        <li><a href="{$HTTP_ROOT}tests/fred/excel">load excel</a></li>
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
