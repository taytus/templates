
//BASE MODEL
//scripts and css that I always use
//select the the scripts that are not in that array



@extends ('layouts.master')

@section ('content')

<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="col-lg-3">
                      <h4 class="drg-event-title"> Draggable Events</h4>
                      <div id='external-events'>
                          <div class='external-event label label-primary'>My Event 1</div>
                          <div class='external-event label label-success'>My Event 2</div>
                          <div class='external-event label label-info'>My Event 3</div>
                          <div class='external-event label label-inverse'>My Event 4</div>
                          <div class='external-event label label-warning'>My Event 5</div>
                          <div class='external-event label label-danger'>My Event 6</div>
                          <div class='external-event label label-default'>My Event 7</div>
                          <div class='external-event label label-primary'>My Event 8</div>
                          <div class='external-event label label-info'>My Event 9</div>
                          <div class='external-event label label-success'>My Event 10</div>
                          <p class="border-top drp-rmv">
                              <input type='checkbox' id='drop-remove' />
                              remove after drop
                          </p>
                      </div>
                  </aside>
                  <aside class="col-lg-9">
                      <section class="panel">
                          <div class="panel-body">
                              <div id="calendar" class="has-toolbar"></div>
                          </div>
                      </section>
                  </aside>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
<link href="{{asset('admin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />


@endsection


