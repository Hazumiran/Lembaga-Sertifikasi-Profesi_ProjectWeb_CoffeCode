
function change() {
   var x = document.getElementById('user-password').type;

   if (x == 'password') {
      document.getElementById('user-password').type = 'text';
      document.getElementById('mybutton').innerHTML = '<img src="../assets/img/visible.png"/>';
   }
   else {
      document.getElementById('user-password').type = 'password';
      document.getElementById('mybutton').innerHTML = '<img src="../assets/img/hide.png"/>';
   }
}
function changeIcon() {
   var x = document.getElementById('user-repassword').type;

   if (x == 'password') {
      document.getElementById('user-repassword').type = 'text';
      document.getElementById('mybutton2').innerHTML = '<img src="../assets/img/visible.png"/>';
   }
   else {
      document.getElementById('user-repassword').type = 'password';
      document.getElementById('mybutton2').innerHTML = '<img src="../assets/img/hide.png"/>';
   }
}