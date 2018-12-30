function login(){

  //INPUT VALIDATION - WHITESPACE//

  if ($('#inputID').val().trim() == "") {
    $('#errmsg').text('Please enter all needed details!')
    return;
  }

  $.ajax({
    type: "POST",
    url: "/modules/sessions/loginmodule.php",
    data: {txt1: $('#inputID').val(), txt2: $('#inputPassword').val()},
    success: function(result){
      if (result == '1') {
        window.location.href = "somewhere.php";
      }
      else if (result == '0') {
        window.location.href = "";
      } else {
        $('#errmsg').text('Username/Password is Incorrect!');
      }
    }
  })
}
