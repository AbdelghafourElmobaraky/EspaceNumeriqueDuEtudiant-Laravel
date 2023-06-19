<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="{{ request()->routeIs('Admin.index') ? 'active' : '' }}">
            <a href="{{ route('Admin.index') }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Menu </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li  class="{{ request()->routeIs('Master.index') ? 'active open' : '' }} {{ request()->routeIs('Licence.index1') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text">
                    Les Etudiants
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('Master.index') ? 'active' : '' }}">
                    <a href="{{ route('Master.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Master
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{ request()->routeIs('Licence.index1') ? 'active' : '' }}">
                    <a href="{{ route('Licence.index1') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Licence
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('DemandeBac.show') || request()->routeIs('DemandeAttestation.show') || request()->routeIs('DemandeReleveDeNote.show') ? 'active open' : '' }} ">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Demandes </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('DemandeBac.show') ? 'active' : '' }}">
                    <a href="{{ route('DemandeBac.show') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Demande Ratrait de Bac
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="{{ request()->routeIs('DemandeAttestation.show') ? 'active' : '' }}">
                    <a href="{{ route('DemandeAttestation.show') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Attestation Scolarité
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="{{ request()->routeIs('DemandeReleveDeNote.show') ? 'active' : '' }}">
                    <a href="{{ route('DemandeReleveDeNote.show') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Relevé des notes
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        {{-- <li class="">
            <a href="#" class="dropdown-toggle">
                
                <span class="menu-text"> vide </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-caret-right"></i>
                        vide
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li> --}}

        <li class="{{ request()->routeIs('EmploiDuTemp.index') ? 'active' : '' }}">
            <a href="{{ route('EmploiDuTemp.index') }}">
                <i class="menu-icon fa fa-calendar"></i>
                <span class="menu-text"> Emplois du Temps </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- <li class="">
            <a href="calendar.html">
                <i class="menu-icon fa fa-calendar"></i>

                <span class="menu-text">
                    Calendar

                    <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                    </span>
                </span>
            </a>

            <b class="arrow"></b>
        </li> --}}

        {{-- <li class="">
            <a href="gallery.html">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Gallery </span>
            </a>

            <b class="arrow"></b>
        </li> --}}

        <li class="{{ request()->routeIs('Diplome.index') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Creation </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('Diplome.index') ? 'active' : '' }}">
                    <a href="{{ route('Diplome.index') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Diplome &amp; Filiere
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('conversations') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon  fa fa-comments"></i>

                <span class="menu-text">
                    Messagerie

                    <span class="badge badge-primary">5</span>
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('conversations') ? 'active' : '' }}">
                    <a href="{{ route('conversations') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Master
                    </a>

                    <b class="arrow"></b>
                </li>

                <li >
                    <a href="error-404.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Licence
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>