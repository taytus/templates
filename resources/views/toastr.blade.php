@extends ('layouts.master')

@section ('content')
  <head>
    <link href="admin/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
  </head>

  <body>

  <section id="container" class="">
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="panel">
                  <header class="panel-heading">
                      Toastr
                  </header>
                  <div class="panel-body">
                      <div class="row toastr-row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label" for="title">Title</label>
                                  <input id="title" type="text" class="form-control"  placeholder="Enter a title ... " value="Toastr Notification">
                              </div>
                              <div class="form-group">
                                  <label class="control-label" for="message">Message</label>
                                  <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..." >Flatlab is an Awesome dashboard build with BS3 </textarea>
                              </div>
                              <div class="form-group">
                                  <div class="checkbox-list">
                                      <label for="closeButton">
                                        <div class="checker" id="uniform-closeButton">
                                            <span class="checked"><input id="closeButton" type="checkbox" value="checked" checked="" class="input-small"></span>
                                        </div>
                                          Close Button
                                      </label>
                                      <label for="addBehaviorOnToastClick">
                                        <div class="checker" id="uniform-addBehaviorOnToastClick">
                                            <span><input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-small"></span>
                                        </div>
                                          Add behavior on toast click </label>
                                      <label for="debugInfo">
                                        <div class="checker" id="uniform-debugInfo">
                                            <span><input id="debugInfo" type="checkbox" value="checked" class="input-small"></span>
                                        </div>
                                          Debug
                                      </label>

                                      <label  for="progressBar">
                                          <div class="checker" id="progress-info">
                                              <span><input id="progressBar" type="checkbox" value="checked" class="input-mini" /></span>
                                          </div>
                                          Progress Bar
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group" id="toastTypeGroup">
                                  <label>Toast Type</label>
                                  <div class="radio-list">
                                      <label>
                                          <div class="radio"><span class="checked"><input type="radio" name="toasts" value="success" checked=""></span></div>Success </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="toasts" value="info"></span></div>Info </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="toasts" value="warning"></span></div>Warning </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="toasts" value="error"></span></div>Error </label>
                                  </div>
                              </div>
                              <div class="form-group" id="positionGroup">
                                  <label>Position</label>
                                  <div class="radio-list">
                                      <label>
                                          <div class="radio"><span class="checked"><input type="radio" name="positions" value="toast-top-right" checked=""></span></div>Top Right </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-bottom-right"></span></div>Bottom Right </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-bottom-left"></span></div>Bottom Left </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-top-left"></span></div>Top Left </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-top-center"></span></div>Top Center </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-bottom-center"></span></div>Bottom Center </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-top-full-width"></span></div>Top Full Width </label>
                                      <label>
                                          <div class="radio"><span><input type="radio" name="positions" value="toast-bottom-full-width"></span></div>Bottom Full Width </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="controls toastr-pad">
                                      <label class="control-label" for="showEasing">Show Easing</label>
                                      <input id="showEasing" type="text" placeholder="swing, linear" class="form-control input-small" value="swing">
                                      <label class="control-label" for="hideEasing">Hide Easing</label>
                                      <input id="hideEasing" type="text" placeholder="swing, linear" class="form-control input-small" value="linear">
                                      <label class="control-label" for="showMethod">Show Method</label>
                                      <input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="form-control input-small" value="fadeIn">
                                      <label class="control-label" for="hideMethod">Hide Method</label>
                                      <input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="form-control input-small" value="fadeOut">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <div class="controls toastr-pad">
                                      <label class="control-label" for="showDuration">Show Duration</label>
                                      <input id="showDuration" type="text" placeholder="ms" class="form-control input-small" value="300">
                                      <label class="control-label" for="hideDuration">Hide Duration</label>
                                      <input id="hideDuration" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                      <label class="control-label" for="timeOut">Time out</label>
                                      <input id="timeOut" type="text" placeholder="ms" class="form-control input-small" value="5000">
                                      <label class="control-label" for="timeOut">Extended time out</label>
                                      <input id="extendedTimeOut" type="text" placeholder="ms" class="form-control input-small" value="1000">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <button type="button" class="btn btn-success" id="showtoast">Show Toast</button>
                              <button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
                              <button type="button" class="btn btn-danger" id="clearlasttoast">Clear Last Toast</button>
                          </div>
                      </div>
                      <div class="row mtop20">
                          <div class="col-md-12">
                              <pre id='toastrOptions'>Settings...</pre>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

  </section>

   <!--toastr-->
    <script src="admin/toastr-master/toastr.js"></script>

  <script type="text/javascript">
      $(function () {
          var i = -1;
          var toastCount = 0;
          var $toastlast;

          var getMessage = function () {
              var msgs = ['Hi, this is toastr notification',
                  '<div><input class="input-small" value="textbox"/>&nbsp;<a href="http://thevectorlab.net/flatlab/" target="_blank">This is a hyperlink</a></div><div><button type="button" id="okBtn" class="btn btn-primary">Close me</button><button type="button" id="surpriseBtn" class="btn" style="margin: 0 8px 0 8px">Surprise me</button></div>',
                  'Flatlab is awesome',
                  'Build with BS3!',
                  'Easy to use',
                  'Have fun storming the castle!'
              ];
              i++;
              if (i === msgs.length) {
                  i = 0;
              }

              return msgs[i];
          };
          $('#showtoast').click(function () {
              var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
              var msg = $('#message').val();
              var title = $('#title').val() || '';
              var $showDuration = $('#showDuration');
              var $hideDuration = $('#hideDuration');
              var $timeOut = $('#timeOut');
              var $extendedTimeOut = $('#extendedTimeOut');
              var $showEasing = $('#showEasing');
              var $hideEasing = $('#hideEasing');
              var $showMethod = $('#showMethod');
              var $hideMethod = $('#hideMethod');
              var toastIndex = toastCount++;

              toastr.options = {
                  closeButton: $('#closeButton').prop('checked'),
                  debug: $('#debugInfo').prop('checked'),
                  progressBar: $('#progressBar').prop('checked'),
                  positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                  preventDuplicates: $('#preventDuplicates').prop('checked'),
                  onclick: null
              };

              if ($('#addBehaviorOnToastClick').prop('checked')) {
                  toastr.options.onclick = function () {
                      alert('You can perform some custom action after a toast goes away');
                  };
              }

              if ($showDuration.val().length) {
                  toastr.options.showDuration = $showDuration.val();
              }

              if ($hideDuration.val().length) {
                  toastr.options.hideDuration = $hideDuration.val();
              }

              if ($timeOut.val().length) {
                  toastr.options.timeOut = $timeOut.val();
              }

              if ($extendedTimeOut.val().length) {
                  toastr.options.extendedTimeOut = $extendedTimeOut.val();
              }

              if ($showEasing.val().length) {
                  toastr.options.showEasing = $showEasing.val();
              }

              if ($hideEasing.val().length) {
                  toastr.options.hideEasing = $hideEasing.val();
              }

              if ($showMethod.val().length) {
                  toastr.options.showMethod = $showMethod.val();
              }

              if ($hideMethod.val().length) {
                  toastr.options.hideMethod = $hideMethod.val();
              }



              if (!msg) {
                  msg = getMessage();
              }

              $("#toastrOptions").text("Command: toastr["
                      + shortCutFunction
                      + "](\""
                      + msg
                      + (title ? "\", \"" + title : '')
                      + "\")\n\ntoastr.options = "
                      + JSON.stringify(toastr.options, null, 2)
              );

              var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
              $toastlast = $toast;
              if ($toast.find('#okBtn').length) {
                  $toast.delegate('#okBtn', 'click', function () {
                      alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                      $toast.remove();
                  });
              }
              if ($toast.find('#surpriseBtn').length) {
                  $toast.delegate('#surpriseBtn', 'click', function () {
                      alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                  });
              }
          });
          function getLastToast(){
              return $toastlast;
          }
          $('#clearlasttoast').click(function () {
              toastr.clear(getLastToast());
          });
          $('#cleartoasts').click(function () {
              toastr.clear();
          });
      })
  </script>
  </body>
@endsection
