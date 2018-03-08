@extends ('layouts.master')

@section ('content')


      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row-fluid" id="draggable_portlets">
                  <div class="col-md-4 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-default">
                          <div class="panel-heading">Portlet 1</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-primary">
                          <div class="panel-heading">Portlet 2</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-success">
                          <div class="panel-heading">Portlet 3</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                  </div>
                  <div class="col-md-4 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-warning">
                          <div class="panel-heading">Portlet 4</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-danger">
                          <div class="panel-heading">Portlet 5</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-info">
                          <div class="panel-heading">Portlet 6</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                  </div>
                  <div class="col-md-4 column sortable">
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-default">
                          <div class="panel-heading">Portlet 7</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-success">
                          <div class="panel-heading">Portlet 8</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                      <!-- BEGIN Portlet PORTLET-->
                      <div class="panel panel-primary">
                          <div class="panel-heading">Portlet 9</div>
                          <div class="panel-body">
                              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                              Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                          </div>
                      </div>
                      <!-- END Portlet PORTLET-->
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="admin/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script src="js/draggable-portlet.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

      <script>
          jQuery(document).ready(function() {
              DraggablePortlet.init();
          });
      </script>

@endsection
