<?php

include "config.php";
include "api_key.php";

require_once('inverted_pendulum/functions.php');


?>
<!DOCTYPE HTML>
<html>

<head>
  <title><?php echo CAS_DOC; ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.1/styles/default.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.1/highlight.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript">
    $(document).ready(function() {
      $('.page-header pre code, .top-resource-description pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });

      $('[data-toggle]').click(function() {
        var selector = $(this).data('target') + ' pre code';
        $(selector).each(function(i, block) {
          hljs.highlightBlock(block);
        });
      });

      // open modal on hashes like #_action_get
      $(window).bind('hashchange', function(e) {
        var anchor_id = document.location.hash.substr(1); //strip #
        var element = $('#' + anchor_id);

        // do we have such element + is it a modal?  --> show it
        if (element.length && element.hasClass('modal')) {
          element.modal('show');
        }
      });

      // execute hashchange on first page load
      $(window).trigger('hashchange');

      // remove url fragment on modal hide
      $('.modal').on('hidden.bs.modal', function() {
        try {
          if (history && history.replaceState) {
            history.replaceState({}, '', '#');
          }
        } catch (e) {}
      });
    });
  </script>
  <style>
    .hljs {
      background: transparent;
    }

    .parent {
      color: #999;
    }

    .list-group-item>.badge {
      float: none;
      margin-right: 6px;
    }

    .panel-title>.methods {
      float: right;
    }

    .badge {
      border-radius: 0;
      text-transform: uppercase;
      width: 70px;
      font-weight: normal;
      color: #f3f3f6;
      line-height: normal;
    }

    .badge_get {
      background-color: #63a8e2;
    }

    .badge_post {
      background-color: #6cbd7d;
    }

    .badge_put {
      background-color: #22bac4;
    }

    .badge_delete {
      background-color: #d26460;
    }

    .badge_patch {
      background-color: #ccc444;
    }

    .list-group,
    .panel-group {
      margin-bottom: 0;
    }

    .panel-group .panel+.panel-white {
      margin-top: 0;
    }

    .panel-group .panel-white {
      border-bottom: 1px solid #F5F5F5;
      border-radius: 0;
    }

    .panel-white:last-child {
      border-bottom-color: white;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .panel-white .panel-heading {
      background: white;
    }

    .tab-pane ul {
      padding-left: 2em;
    }

    .tab-pane h2 {
      font-size: 1.2em;
      padding-bottom: 4px;
      border-bottom: 1px solid #ddd;
    }

    .tab-pane h3 {
      font-size: 1.1em;
    }

    .tab-content {
      border-left: 1px solid #ddd;
      border-right: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px;
    }

    #sidebar {
      margin-top: 30px;
      padding-right: 5px;
      overflow: auto;
      height: 90%;
    }

    .top-resource-description {
      border-bottom: 1px solid #ddd;
      background: #fcfcfc;
      padding: 15px 15px 0 15px;
      margin: -15px -15px 10px -15px;
    }

    .resource-description {
      border-bottom: 1px solid #fcfcfc;
      background: #fcfcfc;
      padding: 15px 15px 0 15px;
      margin: -15px -15px 10px -15px;
    }

    .resource-description p:last-child {
      margin: 0;
    }

    .list-group .badge {
      float: left;
    }

    .method_description {
      margin-left: 85px;
    }

    .method_description p:last-child {
      margin: 0;
    }

    .list-group-item {
      cursor: pointer;
    }

    .list-group-item:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body data-spy="scroll" data-target="#sidebar">
        <nav class="navbar navbar-expand-lg navbar-dark" style="margin: 0;">
            <a class="navbar-brand" href="https://wt29.fei.stuba.sk:4429/finalne_zadanie/index.php?API_KEY=f531aa0a174a5af8025a186bbe0e568e"><?php echo HOME; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inverted-pendulum"><?php echo TITLE1; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ball-beam"><?php echo TITLE2; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="suspension-model"><?php echo TITLE3; ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo MATHEMATICS; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="calc-api"><?php echo COUNT; ?> </a>
                            <a class="dropdown-item" href="statistics"><?php echo STATISTICS; ?>  </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo CONTACT; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item contact" href="#vladimir" id="vladimir">Vladimir</a>
                            <a class="dropdown-item contact" href="#zelko" id="zelko">Zelko</a>
                            <a class="dropdown-item contact" href="#dragana" id="dragana">Dragana</a>
                            <a class="dropdown-item contact" href="work.php"><?php echo WORK; ?></a>

                        </div>
                    </li>
                    
                </ul>
                <ul>
                <li class="nav-item "><a href="?lan=en">English <img src="https://www.countryflags.io/gb/flat/48.png" alt="english_flag"></a></li>
                    <li class="nav-item"><a href="?lan=sk">Slovak <img src="https://www.countryflags.io/sk/flat/48.png" alt="slovak_flag"></a></li>
                    
                </ul>

            </div>
        </nav>
    
    <div class="jumbotron p-5 rounded-0" style="margin-bottom: 5% !important;">
        <div class="container p-5">
            <h1 class="display-4"><?php echo CAS_DOC; ?></h1>
            
        </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-md-9" role="main">
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 id="posts" class="panel-title"><?php echo DESC_API; ?></h3>
          </div>
          <div class="panel-body">

            <div class="panel-group">
              <div class="panel panel-white">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_posts"><span class="parent">/rest</span>/ball-beam</a> <span class="methods"><a href="#ball__beam__get"><span class="badge badge_get">get</span></a></h4>
                </div>
                <div id="panel_posts" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="list-group">
                      <div onclick="window.location.href = '#ball__beam__get'" class="list-group-item"><span class="badge badge_get">get</span>
                        <div class="method_description">
                          <p>Vracia polia</p>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                    </div>
                  </div>
                </div>


              </div>
              <div class="panel panel-white">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_calc"><span class="parent">/rest</span>/calc-api</a> <span class="methods"><a href="#ball__beam__get"><span class="badge badge_get">get</span></a></h4>
                </div>
                <div id="panel_calc" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="list-group">
                      <div onclick="window.location.href = '#calc__get'" class="list-group-item"><span class="badge badge_get">get</span>
                        <div class="method_description">
                          <p><?php echo VYPOCET; ?></p>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                    </div>
                  </div>
                </div>


              </div>
              <div class="panel panel-white">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_suspension"><span class="parent">/rest</span>/suspension</a> <span class="methods"><a href="#suspension__get"><span class="badge badge_get">get</span></a></h4>
                </div>
                <div id="panel_suspension" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="list-group">
                      <div onclick="window.location.href = '#suspension__get'" class="list-group-item"><span class="badge badge_get">get</span>
                        <div class="method_description">
                          <p>Vracia polia</p>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                    </div>
                  </div>
                </div>


              </div>
              <div class="panel panel-white">
                <div class="panel-heading">
                  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" href="#panel_posts__slug_"><span class="parent">/rest</span>/inverted-pendulum</a> <span class="methods"><a href="#posts__slug__get"><span class="badge badge_get">get</span></a></h4>
                </div>
                <div id="panel_posts__slug_" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="list-group">
                      <div onclick="window.location.href = '#posts__slug__get'" class="list-group-item"><span class="badge badge_get">get</span>
                        <div class="method_description">
                          <p>Vracia pole</p>
                        </div>
                        <div class="clearfix"></div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="modal fade" tabindex="0" id="calc__get">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/rest</span>/calc-api</h4>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-info">
                            <p><?php echo POZIADVYP; ?></p>
                        </div>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#calc__get_request" data-toggle="tab">Request</a></li>
                          <li><a href="#calc__get_response" data-toggle="tab">Response</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="calc__get_request">

                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Request</strong>:</p>
                            <pre><code>{
  "vstup": "1+1"
}</code>
                          </div>
                          
                          <div class="tab-pane" id="calc__get_response">
                            <h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2>
                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Response</strong>:</p>
                            <pre><code>{
                              
   "ans": "2"
}
 
</code></pre>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade" tabindex="0" id="suspension__get">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/rest</span>/suspension</h4>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-info">
                          <p><?php echo RET_ARR; ?></p>
                        </div>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#suspension__get_request" data-toggle="tab">Request</a></li>
                          <li><a href="#suspension__get_response" data-toggle="tab">Response</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="suspension__get_request">

                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Request</strong>:</p>
                            <pre><code>{
  "initPrekayka": 0,
  "novaPrekazka": 0.1
}</code>
                          </div>
                          
                          <div class="tab-pane" id="suspension__get_response">
                            <h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2>
                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Response</strong>:</p>
                            <pre><code>{
                              
"M1":[
    0.4998040687,
    -0.000420572,
    -0.000431734,
    -0.000440524,
    -0.000447106,
    ...
  ],
"M2":[
    0.0000226, 
    -0.00181221, 
    -0.00590948, 
    -0.0107798, 
    ...
  ],
"t":[
    0,
    0.05,
    0.1,
    0.15,
    0.2,
    ...
  ],
"r":[
    0,
    0.05,
    0.1,
    0.15,
    0.2,
    ...
  ],

}
</code></pre>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" tabindex="0" id="posts__slug__get">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/rest</span>/inverted-pendulum</h4>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-info">
                          <p><?php echo RET_ARR; ?></p>
                        </div>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#posts__slug__get_request" data-toggle="tab">Request</a></li>
                          <li><a href="#posts__slug__get_response" data-toggle="tab">Response</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="posts__slug__get_request">

                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Request</strong>:</p>
                            <pre><code>{
  "initPos": 0,
  "nova_pozicia": 1
}</code>
                          </div>
                          
                          <div class="tab-pane" id="posts__slug__get_response">
                            <h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2>
                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Response</strong>:</p>
                            <pre><code>{
                              
   "y":[
      0.4998040687,
      -0.000420572,
      -0.000431734,
      -0.000440524,
      -0.000447106,
      ...
    ],
   "x":[
      0.0000226, 
      -0.00181221, 
      -0.00590948, 
      -0.0107798, 
      ...
    ],
   "t":[
      0,
      0.05,
      0.1,
      0.15,
      0.2,
      ...
    ]
}
 
</code></pre>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" tabindex="0" id="ball__beam__get">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="badge badge_get">get</span> <span class="parent">/rest</span>/ball-beam</h4>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-info">
                          <p><?php echo RET_ARR; ?></p>
                        </div>
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#ball__get_request" data-toggle="tab">Request</a></li>
                          <li><a href="#ball__get_response" data-toggle="tab">Response</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="ball__get_request">

                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Request</strong>:</p>
                            <pre><code>{
  "initPos": 0,
  "nova_pozicia": 1
}</code>
                          </div>
                          <div class="tab-pane" id="ball__get_response">
                            <h2>HTTP status code <a href="http://httpstatus.es/200" target="_blank">200</a></h2>
                            <h3>Body</h3>
                            <p><strong>Type: application/json</strong></p>
                            <p><strong>Response</strong>:</p>
                            <pre><code>{
                              
   "y":[
      0.4998040687,
      -0.000420572,
      -0.000431734,
      -0.000440524,
      -0.000447106,
      ...
    ],
   "x":[
      0.0000226, 
      -0.00181221, 
      -0.00590948, 
      -0.0107798, 
      ...
    ],
   "t":[
      0,
      0.05,
      0.1,
      0.15,
      0.2,
      ...
    ]
}
 
</code></pre>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>