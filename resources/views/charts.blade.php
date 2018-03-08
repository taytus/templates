@extends ('layouts.master')

@section ('content')
<!--main content start-->
      <section id="main-content">

          <section class="wrapper">
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
                  <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Doughnut
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="doughnut" height="300" width="400"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Line
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="line" height="300" width="450"></canvas>
                              </div>
                          </section>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Radar
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="radar" height="300" width="400"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Polar Area
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="polarArea" height="300" width="400"></canvas>
                              </div>
                          </section>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Bar
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="bar" height="300" width="500"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Pie
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="pie" height="300" width="400"></canvas>
                              </div>
                          </section>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
       <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <!--<script src="js/jquery-1.8.3.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/chart-master/Chart.js"></script>
    <script src="js/respond.min.js" ></script>

      <!--main content end-->
	

@endsection