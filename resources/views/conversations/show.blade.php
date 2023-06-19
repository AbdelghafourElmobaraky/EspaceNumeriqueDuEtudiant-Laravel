

    


  


    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <meta charset="utf-8" />
            <title>Grid - Ace Admin</title>
    
            <meta name="description" content="bootstrap grid sizing" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    
            <!-- bootstrap & fontawesome -->
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
            <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    
            <!-- page specific plugin styles -->
    
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
            <style>
             .card-style {
  background-color: #f7f7f7;
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.message-container {
  margin-bottom: 10px;
}

.received .message-content {
  background-color: #0084ff;
  color: #fff;
  padding: 10px;
  border-radius: 10px;
}

.sent .message-content {
  background-color: #f0f0f0;
  color: #000;
  padding: 10px;
  border-radius: 10px;
}

.text-right {
  text-align: right;
}

.message {
    color: #444;
    padding: 10px 16px;
    line-height: 20px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}




            </style>
    
            <!-- ace settings handler -->
            <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
    
            <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    
            <!--[if lte IE 8]>
            <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
            <script src="{{ asset('assets/js/respond.min.js') }}"></script>
            <![endif]-->
        </head>
        
        <body class="no-skin">
            @include('etudiant.navbar')
    
            <div class="main-container ace-save-state" id="main-container">
                <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
                </script>
                
                @include('layouts.side-bar-user')

                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                            <ul class="breadcrumb">
                                <li>
                                    <i class="ace-icon fa fa-home home-icon"></i>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Conversation</a>
                                </li>
                                
                            </ul><!-- /.breadcrumb -->
    
                            <div class="nav-search" id="nav-search">
                                <form class="form-search">
                                    <span class="input-icon">
                                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
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
                                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-add-container">
                                                Inside
                                                <b>.container</b>
                                            </label>
                                        </div>
                                    </div><!-- /.pull-left -->
    
                                    <div class="pull-left width-50">
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                        </div>
    
                                        <div class="ace-settings-item">
                                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                        </div>
                                    </div><!-- /.pull-left -->
                                </div><!-- /.ace-settings-box -->
                            </div><!-- /.ace-settings-container -->
    
                            <div class="page-header">
                                <h1>
                                    Messagerie
                                   
                                </h1>
                            </div><!-- /.page-header -->
    
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- PAGE CONTENT BEGINS -->
                                    <div class="container">
                                        <div class="row">
                                            @include('conversations.users', ['users' => $users, 'unread' => $unread])
                                            <div class="col-md-7">
                                                <div class="card card-style">
                                                    <div class="card-header">
                                                        {{-- {{ $user->nom }} --}}
                                                    </div>
                                                    <div class="card-body conversations">
                                                        @if ($messages->hasMorePages())
                                                        <div class="text-center">
                                                            <a href="{{ $messages->nextPageUrl() }}" class="btn btn-light">
                                                                Voir les messages précédents
                                                            </a>
                                                        </div>
                                                        <br>
                                                        @endif
                                            
                                                        @foreach (array_reverse($messages->items()) as $message)
                                                        <div class="row">
                                                            <div class="col-md-12 message   {{ $message->from->id !== $user->id ? 'offset-md-2 text-right' : '' }}">
                                                                <div class="message-container {{ $message->from->id !== $user->id ? 'received' : 'sent' }}">
                                                                    <p class="message-content">
                                                                        <strong>
                                                                            {{ $message->from->id !== $user->id ? 'Moi' : $message->from->nom }}
                                                                        </strong><br>
                                                                        {!! nl2br(e($message->content)) !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        @if ($messages->previousPageUrl())
                                                        <div class="text-center">
                                                            <a href="{{ $messages->previousPageUrl() }}" class="btn btn-light">
                                                                Voir les messages suivants
                                                            </a>
                                                        </div>
                                                        <br>
                                                        @endif
                                            
                                                        <form action="" method="post">
                                                            {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <textarea name="content" placeholder="Écrire votre message" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"></textarea>
                                                                @if ($errors->has('content'))
                                                                <div class="invalid-feedback">
                                                                    {{  implode (',' , $errors->get('content') )}}
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Envoyer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
    
                                    <!-- PAGE CONTENT ENDS -->
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
    
            <!--[if !IE]> -->
            <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
    
            <!-- <![endif]-->
    
            <!--[if IE]>
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <![endif]-->
            <script type="text/javascript">
                if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
            </script>
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
            <!-- page specific plugin scripts -->
    
            <!-- ace scripts -->
            <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
            <script src="{{ asset('assets/js/ace.min.js') }}"></script>
    
            <!-- inline scripts related to this page -->
        </body>
    </html>
    
    
