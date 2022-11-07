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
function validateForm(){
    let txtemail = document.getElementById('txtemail');
    let txtuser = document.getElementById('txtusername');
    let txtmatkhau = document.getElementById('txtmatkhau');
  
  
    let lbluser = document.getElementById('lblusername');
    let lblemail = document.getElementById('lblemail');
    let lblmatkhau = document.getElementById('lblmatkhau');
  


      //Kiểm tra có để trống tên đăng nhập không
      if(txtuser.value == ''){
        lbluser.textContent = 'Bạn chưa nhập tên đăng nhập';
        lbluser.style.color = 'red';
        txtuser.focus();
        return false;
      };

        //Kiểm tra có để trống mật khẩu không
    if(txtmatkhau.value == ''){
        lblmatkhau.textContent = 'Bạn chưa nhập mật khẩu';
        lblmatkhau.style.color = 'red';
        txtmatkhau.focus();
        return false;
    };
    }