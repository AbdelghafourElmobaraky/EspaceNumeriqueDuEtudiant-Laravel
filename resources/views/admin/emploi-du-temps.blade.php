<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Widgets - Ace Admin</title>

    <meta name="description" content="Draggabble Widget Boxes with Persistent Position and State" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css')}}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
   <link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
  <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
  <link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />
  <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
  <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('assets/js/respond.min.js') }}"></script>
  <![endif]-->
</head>

<body class="no-skin">
    @include('admin.navbar')

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) {}
        </script>

        @include('layouts.side-bar-admin')

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>	
                        </li>
                        <li class="active">Emplois Du Temps</li>
                    </ul><!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input"
                                    id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                        id="ace-settings-navbar" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                        id="ace-settings-sidebar" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                        id="ace-settings-breadcrumbs" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state"
                                        id="ace-settings-add-container" autocomplete="off" />
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>
                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"
                                        autocomplete="off" />
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->

                    <div class="page-header">
                        <h1>
                            Emplois Du Temps
                           
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="pink">
                                <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                                <a href="#modal-table" role="button" class="green" data-toggle="modal"> Ajouter </a>
                            </h4>

                            <div class="hr hr-18 dotted hr-double"></div>
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="invisible" id="main-widget-container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
                                        <div class="widget-box widget-color-blue" id="widget-box-2">
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger lighter">
                                                    <i class="ace-icon fa fa-table"></i>
                                                    Liste du Emplois Du Tomps  (~_~)
                                                </h5>

                                                <div class="widget-toolbar widget-toolbar-light no-border">
                                                    <select id="simple-colorpicker-1" class="hide">
                                                        <option selected="" data-class="blue" value="#307ECC">
                                                            #307ECC</option>
                                                        <option data-class="blue2" value="#5090C1">#5090C1</option>
                                                        <option data-class="blue3" value="#6379AA">#6379AA</option>
                                                        <option data-class="green" value="#82AF6F">#82AF6F</option>
                                                        <option data-class="green2" value="#2E8965">#2E8965</option>
                                                        <option data-class="green3" value="#5FBC47">#5FBC47</option>
                                                        <option data-class="red" value="#E2755F">#E2755F</option>
                                                        <option data-class="red2" value="#E04141">#E04141</option>
                                                        <option data-class="red3" value="#D15B47">#D15B47</option>
                                                        <option data-class="orange" value="#FFC657">#FFC657</option>
                                                        <option data-class="purple" value="#7E6EB0">#7E6EB0</option>
                                                        <option data-class="pink" value="#CE6F9E">#CE6F9E</option>
                                                        <option data-class="dark" value="#404040">#404040</option>
                                                        <option data-class="grey" value="#848484">#848484</option>
                                                        <option data-class="default" value="#EEE">#EEE</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead class="thin-border-bottom">
                                                            <tr>
                                                                <th>
                                                                    {{-- <i class="ace-icon fa fa-user"></i> --}}
                                                                    Diplome
                                                                </th>
                                                                <th>
                                                                    {{-- <i class="ace-icon fa fa-user"></i> --}}
                                                                    Filiere
                                                                </th>

                                                                <th>
                                                                    {{-- <i class="ace-icon fa fa-user"></i> --}}
                                                                    Annee
                                                                </th>
                                                                <th>
                                                                    <i>&</i>
                                                                    Lien
                                                                </th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
															@foreach ($emplois_diplomes as $emplois_diplome)
															<tr>
                                                                <td>{{ $emplois_diplome->diplome }}</td>
                                                                <td>{{ $emplois_diplome->filiere }}</td>
                                                                <td> vide </td>
                                                                <td><a href="">{{ $emplois_diplome->lien }}</a></td>
                                                                <td></td>
                                                            </tr>
															@endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.span -->
                                </div><!-- /.row -->

                                <div id="modal-table" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header no-padding">
                                                <div class="table-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                        <span class="white">&times;</span>
                                                    </button>
                                                    Ajouter un emplois du temps
                                                </div>
                                            </div>

                                            <div class="modal-body no-padding">
                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <form action="{{ route('EmploiDuTemp.store') }}" method="POST">
                                                            @csrf
                                                            <fieldset>
                                                                <div>
                                                                    <label for="diplome_id">Diplôme</label>
                                                                    <br />
                                                                    <select class="chosen-select form-control" id="diplome_id" name="diplome_id" data-placeholder="choisir un diplôme...">
                                                                        <option value="">  </option>
                                                                        @foreach($diplomes as $diplome)
                                                                            <option value="{{ $diplome->id_diplome }}" {{ old('diplome_id') == $diplome->id_diplome ? 'selected' : '' }}>
                                                                                {{ $diplome->diplome }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <label for="filiere_id">Filière</label>
                                                                    <br />
                                                                    <select class="chosen-select form-control" id="filiere_id" name="filiere_id" data-placeholder="choisir un diplôme..." disabled>
                                                                        <option value="">  </option>
                                                                    </select>
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <label for="lien">Lien</label>
                                                                    <input type="text" class="form-control" id="lien" name="lien">
                                                                </div>
                                                            </fieldset>
                                                        
                                                            <div class="form-actions center">
                                                                <button type="submit" class="btn btn-sm btn-success">
                                                                    Créer
                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            @include('layouts.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        {{-- script pour afficher les filière selon le diplôme --}}
        <script>
            
            document.getElementById('diplome_id').addEventListener('change', function() {
                var selectedDiplomeId = this.value;
                var filiereSelect = document.getElementById('filiere_id');
                
                
                filiereSelect.innerHTML = '<option value="">  </option>';
                filiereSelect.value = '';
                filiereSelect.disabled = true;
                
                
                if (selectedDiplomeId !== '') {
                    filiereSelect.disabled = false;
                    
                    
                    var filteredFilieres = @json($filieres->groupBy('diplome_id')->toArray());
                    
                    if (selectedDiplomeId in filteredFilieres) {
                        filteredFilieres[selectedDiplomeId].forEach(function(filiere) {
                            var option = document.createElement('option');
                            option.value = filiere.id_filiere;
                            option.textContent = filiere.filiere;
                            filiereSelect.appendChild(option);
                        });
                    }
                }
            });
        </script>
        
        

        <!--[if !IE]> -->
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement) document.write(
                "<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
        </script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- page specific plugin scripts -->
        <script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>

        <!-- ace scripts -->
        <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace.min.js') }}"></script>

        <!-- inline scripts related to this page -->
		
        <script type="text/javascript">
            jQuery(function($) {

                $('#simple-colorpicker-1').ace_colorpicker({
                    pull_right: true
                }).on('change', function() {
                    var color_class = $(this).find('option:selected').data('class');
                    var new_class = 'widget-box';
                    if (color_class != 'default') new_class += ' widget-color-' + color_class;
                    $(this).closest('.widget-box').attr('class', new_class);
                });


                // scrollables
                $('.scrollable').each(function() {
                    var $this = $(this);
                    $(this).ace_scroll({
                        size: $this.attr('data-size') || 100,
                        //styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
                    });
                });
                $('.scrollable-horizontal').each(function() {
                    var $this = $(this);
                    $(this).ace_scroll({
                        horizontal: true,
                        styleClass: 'scroll-top', //show the scrollbars on top(default is bottom)
                        size: $this.attr('data-size') || 500,
                        mouseWheelLock: true
                    }).css({
                        'padding-top': 12
                    });
                });

                $(window).on('resize.scroll_reset', function() {
                    $('.scrollable-horizontal').ace_scroll('reset');
                });


                $('#id-checkbox-vertical').prop('checked', false).on('click', function() {
                    $('#widget-toolbox-1').toggleClass('toolbox-vertical')
                        .find('.btn-group').toggleClass('btn-group-vertical')
                        .filter(':first').toggleClass('hidden')
                        .parent().toggleClass('btn-toolbar')
                });





                // widget boxes
                // widget box drag & drop example
                $('.widget-container-col').sortable({
                    connectWith: '.widget-container-col',
                    items: '> .widget-box',
                    handle: ace.vars['touch'] ? '.widget-title' : false,
                    cancel: '.fullscreen',
                    opacity: 0.8,
                    revert: true,
                    forceHelperSize: true,
                    placeholder: 'widget-placeholder',
                    forcePlaceholderSize: true,
                    tolerance: 'pointer',
                    start: function(event, ui) {
                        //when an element is moved, it's parent becomes empty with almost zero height.
                        //we set a min-height for it to be large enough so that later we can easily drop elements back onto it
                        ui.item.parent().css({
                            'min-height': ui.item.height()
                        })
                        //ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
                    },
                    update: function(event, ui) {
                        ui.item.parent({
                            'min-height': ''
                        })
                        //p.style.removeProperty('background-color');


                        //save widget positions
                        var widget_order = {}
                        $('.widget-container-col').each(function() {
                            var container_id = $(this).attr('id');
                            widget_order[container_id] = []


                            $(this).find('> .widget-box').each(function() {
                                var widget_id = $(this).attr('id');
                                widget_order[container_id].push(widget_id);
                                //now we know each container contains which widgets
                            });
                        });

                        ace.data.set('demo', 'widget-order', widget_order, null, true);
                    }
                });


                ///////////////////////

                //when a widget is shown/hidden/closed, we save its state for later retrieval
                $(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
                    var widgets = ace.data.get('demo', 'widget-state', true);
                    if (widgets == null) widgets = {}

                    var id = $(this).attr('id');
                    widgets[id] = event.type;
                    ace.data.set('demo', 'widget-state', widgets, null, true);
                });


                (function() {
                    //restore widget order
                    var container_list = ace.data.get('demo', 'widget-order', true);
                    if (container_list) {
                        for (var container_id in container_list)
                            if (container_list.hasOwnProperty(container_id)) {

                                var widgets_inside_container = container_list[container_id];
                                if (widgets_inside_container.length == 0) continue;

                                for (var i = 0; i < widgets_inside_container.length; i++) {
                                    var widget = widgets_inside_container[i];
                                    $('#' + widget).appendTo('#' + container_id);
                                }

                            }
                    }


                    //restore widget state
                    var widgets = ace.data.get('demo', 'widget-state', true);
                    if (widgets != null) {
                        for (var id in widgets)
                            if (widgets.hasOwnProperty(id)) {
                                var state = widgets[id];
                                var widget = $('#' + id);
                                if (
                                    (state == 'shown' && widget.hasClass('collapsed')) ||
                                    (state == 'hidden' && !widget.hasClass('collapsed'))
                                ) {
                                    widget.widget_box('toggleFast');
                                } else if (state == 'closed') {
                                    widget.widget_box('closeFast');
                                }
                            }
                    }


                    $('#main-widget-container').removeClass('invisible');


                    //reset saved positions and states
                    $('#reset-widgets').on('click', function() {
                        ace.data.remove('demo', 'widget-state');
                        ace.data.remove('demo', 'widget-order');
                        document.location.reload();
                    });

                })();

            });
        </script>
</body>

</html>
