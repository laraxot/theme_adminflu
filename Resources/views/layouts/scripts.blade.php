
 <!-- jQuery -->
 <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
 <!-- jQuery UI 1.11.4 -->
 {{--<script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>--}}
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 {{--<script>--}}
 {{--$.widget.bridge('uibutton', $.ui.button)--}}
 {{--</script>--}}
 <!-- Bootstrap 4 -->
 <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 {{--
 <!-- The core Firebase JS SDK is always required and must be listed first -->
 <script src="{{asset('https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js')}}"></script>

 <script src="{{asset('https://www.gstatic.com/firebasejs/7.2.0/firebase-messaging.js')}}"></script>



 <script type="text/javascript">
     const messaging = firebase.messaging();
     navigator.serviceWorker.register("{{url('firebase/sw-js')}}")
         .then((registration) => {
             messaging.useServiceWorker(registration);
             messaging.requestPermission()
                 .then(function() {
                     console.log('Notification permission granted.');
                     getRegToken();

                 })
                 .catch(function(err) {
                     console.log('Unable to get permission to notify.', err);
                 });
             messaging.onMessage(function(payload) {
                 console.log("Message received. ", payload);
                 notificationTitle = payload.data.title;
                 notificationOptions = {
                     body: payload.data.body,
                     icon: payload.data.icon,
                     image:  payload.data.image
                 };
                 var notification = new Notification(notificationTitle,notificationOptions);
             });
         });

     function getRegToken(argument) {
         messaging.getToken().then(function(currentToken) {
             if (currentToken) {
                 saveToken(currentToken);
                 console.log(currentToken);
             } else {
                 console.log('No Instance ID token available. Request permission to generate one.');
             }
         })
             .catch(function(err) {
                 console.log('An error occurred while retrieving token. ', err);
             });
     }


     function saveToken(currentToken) {
         $.ajax({
             type: "POST",
             data: {'device_token': currentToken, 'api_token': '{!! auth()->user()->api_token !!}'},
             url: '{!! url('api/users',['id'=>auth()->id()]) !!}',
             success: function (data) {

             },
             error: function (err) {
                 console.log(err);
             }
         });
     }
 </script>
--}}
 <!-- Sparkline -->
 {{--<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>--}}
 {{--<!-- iCheck -->--}}
 {{--<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>--}}
 {{--<!-- select2 -->--}}
 {{--<script src="{{asset('plugins/select2/select2.min.js')}}"></script>--}}
 <!-- jQuery Knob Chart -->
 {{--<script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>--}}
 <!-- daterangepicker -->
 {{--<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>--}}
 {{--<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>--}}
 <!-- datepicker -->
 {{--<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>--}}
 <!-- Bootstrap WYSIHTML5 -->
 {{--<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>--}}
 <!-- Slimscroll -->
 <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
 <script src="{{asset('plugins/bootstrap-sweetalert/sweetalert.min.js')}}"></script>
 <!-- FastClick -->
 {{--<script src="{{asset('plugins/fastclick/fastclick.js')}}"></script>--}}
 @stack('scripts_lib')
 <!-- AdminLTE App -->
 <script src="{{Theme::asset('adm_theme::dist/js/adminlte.js')}}"></script>
 {{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
 {{--<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>--}}
 <!-- AdminLTE for demo purposes -->
 <script src="{{Theme::asset('adm_theme::dist/js/demo.js')}}"></script>
{{--
 <script src="{{Theme::asset('adm_theme::dist/js/scripts.js')}}"></script>
  --}}
@livewireScripts
@stack('scripts')
