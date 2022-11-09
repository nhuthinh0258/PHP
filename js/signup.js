function validateForm(){
    let txtemail = document.getElementById('txtemail');
    let txtuser = document.getElementById('txtusername');
    let txtmatkhau = document.getElementById('txtmatkhau');
    let txtcmatkhau = document.getElementById('txtcmatkhau');
  
  
    let lbluser = document.getElementById('lblusername');
    let lblemail = document.getElementById('lblemail');
    let lblmatkhau = document.getElementById('lblmatkhau');
    let lblcmatkhau = document.getElementById('lblcmatkhau')
  
    //Kiểm tra tên đăng nhập có hợp lệ không
    let userPattern = /^[a-z0-9_-]{3,16}$/;
    if(userPattern.test(txtuser.value)==false)
    {
      lbluser.textContent='Tên tài khoản không hợp lệ'
      lbluser.style.color = 'red';
      txtuser.focus();
      return false;
    };
  
      //Kiểm tra mật khẩu có hợp lệ không
      let matkhauPattern = /^[a-z0-9_-]{6,18}$/;
      if(matkhauPattern.test(txtmatkhau.value)==false)
      {
        lblmatkhau.textContent='Mật khẩu không hợp lệ'
        lblmatkhau.style.color = 'red';
        txtmatkhau.focus();
        return false;
      };
  
      //Kiểm tra email có dạng @gmail.com hay ko
      let emailPattern = /^([a-z0-9_\.-]+)(@gmail.com)$/;
      if(emailPattern.test(txtemail.value)==false)
      {
        lblemail.textContent='Email không hợp lệ'
        lblemail.style.color = 'red';
        txtemail.focus();
        return false;
      };

  }
  
  $(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type','text');
        }
        else{
            $(this).prev().attr('type','password');
        }
        $(this).hidden;
    });
    $('#eye2').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type','text');
        }
        else{
            $(this).prev().attr('type','password');
        }
        $(this).hidden;
    });
});