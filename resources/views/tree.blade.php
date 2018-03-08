@extends ('layouts.master')


@section ('content')

  <head>

    <link rel="stylesheet" type="text/css" href="admin/fuelux/css/tree-style.css" />

  </head>

  <body>

  <section id="container" class="">
     
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">

          <!-- BEGIN PAGE CONTENT-->
          <div class="row">

              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                          Tree Style #1
                          <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                      </div>
                      <div class="panel-body">
                          <div id="FlatTree" class="tree tree-plus-minus">
                              <div class = "tree-folder" style="display:none;">
                                  <div class="tree-folder-header">
                                      <i class="fa fa-folder"></i>
                                      <div class="tree-folder-name"></div>
                                  </div>
                                  <div class="tree-folder-content"></div>
                                  <div class="tree-loader" style="display:none"></div>
                              </div>
                              <div class="tree-item" style="display:none;">
                                  <i class="tree-dot"></i>
                                  <div class="tree-item-name"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                          Tree Style #2
                          <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                      </div>
                      <div class="panel-body">
                          <div id="FlatTree2" class="tree">
                              <div class = "tree-folder" style="display:none;">
                                  <div class="tree-folder-header">
                                      <i class="fa fa-folder"></i>
                                      <div class="tree-folder-name"></div>
                                  </div>
                                  <div class="tree-folder-content"></div>
                                  <div class="tree-loader" style="display:none"></div>
                              </div>
                              <div class="tree-item" style="display:none;">
                                  <i class="tree-dot"></i>
                                  <div class="tree-item-name"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                          Tree Style #3
                          <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                      </div>
                      <div class="panel-body">
                          <div id="FlatTree3" class="tree tree-plus-minus tree-solid-line tree-unselectable">
                              <div class = "tree-folder" style="display:none;">
                                  <div class="tree-folder-header">
                                      <i class="fa fa-folder"></i>
                                      <div class="tree-folder-name"></div>
                                  </div>
                                  <div class="tree-folder-content"></div>
                                  <div class="tree-loader" style="display:none"></div>
                              </div>
                              <div class="tree-item" style="display:none;">
                                  <i class="tree-dot"></i>
                                  <div class="tree-item-name"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                          Tree Style #4
                          <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                      </div>
                      <div class="panel-body">
                          <div id="FlatTree4" class="tree tree-solid-line">
                              <div class = "tree-folder" style="display:none;">
                                  <div class="tree-folder-header">
                                      <i class="fa fa-folder"></i>
                                      <div class="tree-folder-name"></div>
                                  </div>
                                  <div class="tree-folder-content"></div>
                                  <div class="tree-loader" style="display:none"></div>
                              </div>
                              <div class="tree-item" style="display:none;">
                                  <i class="tree-dot"></i>
                                  <div class="tree-item-name"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END PAGE CONTENT-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="admin/fuelux/js/tree.min.js"></script>

  <!--right slidebar-->

  <!--common script for all pages-->
    <script src="js/tree.js"></script>

  <script>
      jQuery(document).ready(function() {
          TreeView.init();
      });
  </script>

  </body>
</html>

@endsection
