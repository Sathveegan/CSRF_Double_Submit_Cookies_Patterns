$(document).ready(function() {
  $("#password_eye").on('click', function(event) {
      event.preventDefault();
      if($('#password').attr("type") == "text"){
          $('#password').attr('type', 'password');
          $('#password_eye i').addClass( "fa-eye-slash" );
          $('#password_eye i').removeClass( "fa-eye" );
      }else if($('#password').attr("type") == "password"){
          $('#password').attr('type', 'text');
          $('#password_eye i').removeClass( "fa-eye-slash" );
          $('#password_eye i').addClass( "fa-eye" );
      }
  });
});
