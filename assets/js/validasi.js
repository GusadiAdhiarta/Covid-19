function validasi(){
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var password2 = document.getElementById("password2");
    pola_pw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@!#$%^&*]).{8,12}$/;
    pola_un = /^[a-zA-Z0-9]{5,10}$/;
    var u_alert = document.getElementById("u_alert");
    var p_alert = document.getElementById("p_alert");
    var p_alert2 = document.getElementById("p_alert2");
     if (username.value == "") {
        u_alert.innerHTML = "*Username Tidak Boleh Kosong";
        u_alert.style.visibility ="visible";
        username.focus();
        return false;
    }else if(!pola_un.test(username.value)){
        u_alert.innerHTML = "*Username Hanya Boleh Berisi Huruf, Angka & Terdiri Dari 5-10 Karakter";
        u_alert.style.visibility ="visible";
        username.focus();
        return false;
    }else if (password.value == "") {
        p_alert.innerHTML = "*Password Tidak Boleh Kosong";
        p_alert.style.visibility ="visible";
        password.focus();
        u_alert.innerHTML = "";
        u_alert.style.visibility ="hidden";
        return false;        
    }else if(!pola_pw.test(password.value)){
        p_alert.innerHTML = "*Password Harus Berisi Huruf Kecil, Besar, Angka, Simbol & Terdiri Dari 8-12 Karakter";
        p_alert.style.visibility ="visible";
        u_alert.innerHTML = "";
        u_alert.style.visibility ="hidden";
        password.focus();
        return false;
      }else if (password.value != password2.value) {
        p_alert2.innerHTML = "*Password Tidak Sama";
        p_alert2.style.visibility ="visible";
        p_alert.innerHTML = "*Password Tidak Sama";
        p_alert.style.visibility ="visible";
        password2.focus();
        return false;
    }else{
        return true;
    }
}

$(function () {
    $("#view_pass").on("click",function () {
        var x = $("#password");
        if(x.attr('type')== "password"){
            x.attr('type', 'text');
            $(this).removeClass('fa fa-eye-slash')
            $(this).addClass('fa fa-eye')
        }else{
            x.attr('type', 'password');
            $(this).removeClass('fa fa-eye')
            $(this).addClass('fa fa-eye-slash')
        }
    })
})
  $(function () {
    $("#view_pass2").on("click",function () {
        var x = $("#password2");
        if(x.attr('type')== "password"){
            x.attr('type', 'text');
            $(this).removeClass('fa fa-eye-slash')
            $(this).addClass('fa fa-eye')
        }else{
            x.attr('type', 'password');
            $(this).removeClass('fa fa-eye')
            $(this).addClass('fa fa-eye-slash')
        }
    })
})
