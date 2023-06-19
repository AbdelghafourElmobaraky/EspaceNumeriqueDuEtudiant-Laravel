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
        <li class="{{ request()->routeIs('User.index') ? 'active' : '' }}">
            <a href="{{ route('User.index') }}">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text"> Menu </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="{{ request()->routeIs('Inscription.create') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Inscription
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('Inscription.create') ? 'active' : '' }}">
                    <a href="{{ route('Inscription.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        inscription
                    </a>

                    <b class="arrow"></b>
                </li>
                
                @foreach ($inscres as $inscre)
                    <li class="">
                        <a href="{{ route('edit', ['id' => $inscre->id]) }}">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Modifier les infos
                        </a>
                        <b class="arrow"></b>
                    </li>
                @endforeach
            </ul>
        </li>

        <li class="{{ request()->routeIs('Paiment.paiment') ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class=" menu-icon fa fa-credit-card  bigger-130"></i>
                <span class="menu-text"> Paiments </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('Paiment.paiment') ? 'active' : '' }}">
                    <a href="{{ route('Paiment.paiment') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Paiment
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="jqgrid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Vide
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('DemandeBac.create') || request()->routeIs('DemandeAttestation.create') || request()->routeIs('DemandeReleveDeNote.create')  ? 'active open' : '' }}">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Demandes </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="{{ request()->routeIs('DemandeBac.create') ? 'active' : '' }}">
                    <a href="{{ route('DemandeBac.create')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Retrait Bac
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{ request()->routeIs('DemandeAttestation.create') ? 'active' : '' }}">
                    <a href="{{ route('DemandeAttestation.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Attestation Scolarité
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="{{ request()->routeIs('DemandeReleveDeNote.create') ? 'active' : '' }}">
                    <a href="{{ route('DemandeReleveDeNote.create') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Relevé des notes
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('EmploiDuTemp.show') ? 'active' : '' }}">
            <a href="{{route('EmploiDuTemp.show')  }}">
                <i class="menu-icon fa fa-calendar"></i>        
                <span class="menu-text"> Emplois du Temps </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- <li class="">
            <a href="calendar.html">
                <i class="menu-icon fa fa-list-alt"></i>
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

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-download"></i>
                <span class="menu-text"> Doc Télécharger </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="profile.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Lettre recommandation
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('convention.show') }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Convention de stage
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('conversations') ? 'active' : '' }}">
            <a href="{{ route('conversations') }}">
                <i class="menu-icon  fa fa-comments " ></i>
                <span class="menu-text"> Messagerie
                    <span class="badge badge-primary" title="5 Important message">5</span> </span>
            </a>

            <b class="arrow"></b>
        </li>

        {{-- <li class="">
            <a href="" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>

                <span class="menu-text">
                    Other Pages

                    <span class="badge badge-primary">5</span>
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="faq.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        FAQ
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="error-404.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 404
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="error-500.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 500
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="grid.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Grid
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="blank.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Blank Page
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li> --}}
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>