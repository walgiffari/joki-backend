$('#submit-login').on('click', function(){
    $('#form-login').submit(function(e){
        e.preventDefault();
        let username = $('#username-login').val();
        let password = $('#password-login').val();
        
        $.ajax({
            url: '/login/auth',
            type: 'post',
            data : {
                username:username,
                password:password,
            },
            success:function(res){
                e.currentTarget.submit()
                window.location.href = '/dashboard'
            },

            error:function(res)
            {  
                console.log(res)
            }
        });
    });
});


$('#logout-dashboard').on('click', function(e){
    e.preventDefault()
    $.ajax({
        url: '/logout',
        type: 'post',
        success:function(res){
            console.log(res)
            window.location.href = "/login"
        }
    });

});


// Hapus Joki // 

$(document).ready(function(){
$(document).on('click','#hapus-joki',function(e){
    let id = $(this).data('id')
    $.ajax({
        url: '/super-admin/joki-master/'+id,
        type: 'get',
        data: {
            id:id,        
        },
        success:function(res){
            console.log(res)
            window.location.href = '/super-admin/joki-master'
        }
    });
});
});


// Rupiah //

var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}


// Rupiah // 