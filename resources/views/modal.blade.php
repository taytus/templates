@extends ('layouts.master')

@section ('content')
  <head>
    <link rel="stylesheet" type="text/css" href="admin/gritter/css/jquery.gritter.css" />
  </head>

  <body>

  <section id="container" class="">
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="#">UI Elements</a></li>
                          <li class="active">Modal</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-6">

                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Default Modal Dialogs
                          </header>
                          <div class="panel-body">
                              <a class="btn btn-success" data-toggle="modal" href="#myModal">
                                  Default
                              </a>
                              <a class="btn btn-warning" data-toggle="modal" href="#myModal2">
                                  Large
                              </a>
                              <a class="btn btn-danger" data-toggle="modal" href="#myModal3">
                                  Small
                              </a>
                              <!-- Modal -->
                              <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Default Modal Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              Body goes here...

                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                              <button class="btn btn-success" type="button">Save changes</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
                              <!-- Modal -->
                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Modal Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              Body goes here...

                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                              <button class="btn btn-warning" type="button"> Confirm</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
                              <!-- Modal -->
                              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Modal Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              Body goes here...

                                          </div>
                                          <div class="modal-footer">
                                              <button class="btn btn-danger" type="button"> Ok</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->

                          </div>
                      </section>
                      <!--modal start-->

                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Vertically Center Align Modal Dialogs
                          </header>
                          <div class="panel-body">
                              <a class="btn btn-success" data-toggle="modal" href="#myModal4">
                                  Default
                              </a>
                              <a class="btn btn-warning" data-toggle="modal" href="#myModal5">
                                  Large
                              </a>
                              <a class="btn btn-danger" data-toggle="modal" href="#myModal6">
                                  Small
                              </a>

                              <!--vertical center Modal start-->
                              <div class="modal fade modal-dialog-center " id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog ">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center Modal end -->
                              <!-- vertical center large Modal  start -->
                              <div class="modal fade modal-dialog-center" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center large Modal end -->
                              <!-- vertical center small Modal start -->
                              <div class="modal fade modal-dialog-center" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center small Modal end -->

                          </div>
                      </section>
                      <!--modal start-->

                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Top with space Modal Dialogs
                          </header>
                          <div class="panel-body">

                              <a class="btn btn-default" data-toggle="modal" href="#myModal9">
                                  Top
                              </a>

                              <!-- vertical center top side Modal start -->
                              <div class="modal fade modal-dialog-center top-modal-with-space" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center top side Modal end -->


                          </div>
                      </section>
                      <!--modal start-->

                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Top Without Space Modal Dialogs
                          </header>
                          <div class="panel-body">

                              <a class="btn btn-success" data-toggle="modal" href="#myModal10">
                                  Default Top
                              </a>
                              <a class="btn btn-warning" data-toggle="modal" href="#myModal11">
                                  Large Top
                              </a>
                              <a class="btn btn-danger" data-toggle="modal" href="#myModal12">
                                  Small Top
                              </a>

                              <!--vertical center Modal start-->
                              <div class="modal fade top-modal-without-space " id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog ">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center Modal end -->
                              <!-- vertical center large Modal  start -->
                              <div class="modal fade top-modal-without-space" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center large Modal end -->
                              <!-- vertical center small Modal start -->
                              <div class="modal fade top-modal-without-space" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center small Modal end -->

                          </div>
                      </section>
                      <!--modal start-->





                  </div>

                  <div class="col-lg-6">
                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              With Space Modal Dialogs
                          </header>
                          <div class="panel-body">

                              <a class="btn btn-info" data-toggle="modal" href="#myModal7">
                                  Left
                              </a>
                              <a class="btn btn-primary" data-toggle="modal" href="#myModal8">
                                  Right
                              </a>

                              <!-- vertical center left side Modal start -->
                              <div class="modal fade modal-dialog-center left-modal-with-space" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center left side Modal end -->
                              <!-- vertical center right side Modal start -->
                              <div class="modal fade modal-dialog-center right-modal-with-space" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center right side Modal end -->

                          </div>
                      </section>
                      <!--modal start-->

                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              Without Space Modal Dialogs
                          </header>
                          <div class="panel-body">

                              <a class="btn btn-info" data-toggle="modal" href="#myModal13">
                                  Left
                              </a>
                              <a class="btn btn-primary" data-toggle="modal" href="#myModal14">
                                  Right
                              </a>



                              <!-- vertical center left side Modal start -->
                              <div class="modal fade modal-dialog-center left-modal-without-space" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center left side Modal end -->
                              <!-- vertical center right side Modal start -->
                              <div class="modal fade modal-dialog-center  right-modal-without-space" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- vertical center right side Modal end -->



                          </div>
                      </section>
                      <!--modal start-->
                      <!--modal start-->
                      <section class="panel">
                          <header class="panel-heading">
                              full Height Modal Dialogs
                          </header>
                          <div class="panel-body">

                              <a class="btn btn-warning" data-toggle="modal" href="#myModal16">
                                  Left
                              </a>
                              <a class="btn btn-danger" data-toggle="modal" href="#myModal17">
                                  Right
                              </a>
                              <!-- Modal -->
                              <div class="modal fade full-width-modal-left" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
                              <!-- Modal -->
                              <div class="modal fade full-width-modal-right" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                      <div class="modal-content-wrap">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                  <h4 class="modal-title">Modal Tittle</h4>
                                              </div>
                                              <div class="modal-body">

                                                  Body goes here...

                                              </div>
                                              <div class="modal-footer">
                                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                  <button class="btn btn-warning" type="button"> Confirm</button>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->

                          </div>
                      </section>
                      <!--modal start-->
                  </div>

              </div>
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="admin/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="js/jquery.pulsate.min.js"></script>

    <!--script for this page only-->
    <script src="js/gritter.js" type="text/javascript"></script>
    <script src="js/pulstate.js" type="text/javascript"></script>
  </body>

@endsection