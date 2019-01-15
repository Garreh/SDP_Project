//
// function adminlogin(){
//   var username = $("#inputUsername").val().trim();
//   var password = $("#inputPassword").val().trim();
//   if (username == "") {
//     $('#errmsg').text('Please enter all needed details!')
//     return;
//   }
//
//   if (password == "") {
//     $('#errmsg').text('Please enter all needed details!')
//     return;
//   }
//   if( username != "" && password != "" ){
//       $.ajax({
//           url:'/SDP/modules/sessions/adminlogin.php',
//           type:'post',
//           data:{username:username,password:password},
//           success:function(response){
//               var msg = "";
//               if(response == 1){
//                   window.location = "/SDP/public/admin/adminmenu.php";
//               }else{
//                   $('#errmsg').text('Username/Password is Incorrect!');
//               }
//           }
//       });
//   }
// }



function adminlogin(){
  var username = $("#inputUsername3").val().trim();
  var password = $("#inputPassword3").val().trim();
  if (username == "") {
    $('#errmsg').text('Please enter all needed details!')
    return;
  }

  if (password == "") {
    $('#errmsg').text('Please enter all needed details!')
    return;
  }
  if( username != "" && password != "" ){
      $.ajax({
          url:'/SDP/modules/sessions/adminlogin.php',
          type:'post',
          data:{username:username,password:password},
          success:function(response){
              var msg = "";
              if(response == 1){
                  window.location = "/SDP/public/admin/adminmenu.php";
              }else{
                  $('#errmsg').text('Username/Password is Incorrect!');
              }
          }
      });
  }
}


function stdlogin(){
  var username = $("#inputUsername").val().trim();
  var password = $("#inputPassword").val().trim();
  if (username == "") {
    $('#errmsg').text('Please enter all needed details!')
    return;
  }

  if (password == "") {
    $('#errmsg').text('Please enter all needed details!')
    return;
  }
  if( username != "" && password != "" ){
      $.ajax({
          url:'/SDP/modules/sessions/studentlogin.php',
          type:'post',
          data:{username:username,password:password},
          success:function(response){
              var msg = "";
              if(response == 1){
                  window.location = "/SDP/public/student/studentmain.php";
              }else{
                  $('#errmsg').text('Username/Password is Incorrect!');
              }
          }
      });
  }
}



function tchlogin(){
  var username = $("#inputUsername2").val().trim();
  var password = $("#inputPassword2").val().trim();
  if (username == "") {
    $('#errmsg2').text('Please enter all needed details!')
    return;
  }

  if (password == "") {
    $('#errmsg2').text('Please enter all needed details!')
    return;
  }
  if( username != "" && password != "" ){
      $.ajax({
          url:'/SDP/modules/sessions/teacherlogin.php',
          type:'post',
          data:{username:username,password:password},
          success:function(response){
              var msg = "";
              if(response == 1){
                  window.location = "/SDP/public/teacher/teachermain.php";
              }else{
                  $('#errmsg2').text('Username/Password is Incorrect!');
              }
          }
      });
  }
}


function logout(){
  $.ajax({
    type: "POST",
    url: "/SDP/modules/sessions/logout.php",
    success: function(result){
      window.location.href = "/SDP/index.php";
    }
  })
}

function studentlog(){
  document.getElementById('stdlog').style.display = 'block';
  document.getElementById('studentbtn').style.backgroundColor = '#FFFFFF';
  document.getElementById('studentbtn').style.color = '#3A3837';
  document.getElementById('tchlog').style.display = 'none';
  document.getElementById('teacherbtn').style.backgroundColor = '#3A3837';
  document.getElementById('teacherbtn').style.color = '#FFFFFF';


}

function teacherlog(){
  document.getElementById('tchlog').style.display = 'block';
  document.getElementById('teacherbtn').style.backgroundColor = '#FFFFFF';
  document.getElementById('teacherbtn').style.color = '#3A3837';
  document.getElementById('stdlog').style.display = 'none';
  document.getElementById('studentbtn').style.backgroundColor = '#3A3837';
  document.getElementById('studentbtn').style.color = '#FFFFFF';
  document.getElementById('errmsg').text="";
}
