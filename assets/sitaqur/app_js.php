<script>
    
    var MyTable = $('.js-exportable').dataTable({
        "destroy":true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "scrollX": true
    });    

//Date Picker Plugin
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    todayHighlight: true
});

// Delete Data
function deleteData(id,url){
    $.ajax({
        method: "POST",
        url:url,
        data:"id=" + id
    })
    .done(function(data) {
        var out = jQuery.parseJSON(data);
        if(out.status=="gagal"){
            swal("Gagal!", "Data gagal dihapus", "error");
        }
        else{
            swal("Terhapus!", "Data telah dihapus.", "success");
            location.reload(); 
        }
    });
   
};

//Konfirmasi Delete Data
$('.confirmation').on('click',function(){
    var id = $(this).attr("data-id");
    var tabel = $(this).attr("tabel");
    var url = "<?php echo base_url() ?>" + tabel + "/delete" + tabel;
    swal({   
        title: "Konfirmasi Hapus",   
        text: "Apakah anda yakin untuk menghapus data ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Hapus",
        closeOnConfirm: false
    }, function () {
        deleteData(id,url);
    });  
    
});

// Approve Data
function approveSetoran(id,url){
    $.ajax({
        method: "POST",
        url:url,
        data:"id=" + id
    })
    .done(function(data) {
        var out = jQuery.parseJSON(data);
        if(out.status=="gagal"){
            swal("Gagal!", "Gagal approve", "error");
        }
        else{
            swal("Approved!", "Sukses approve setoran", "success");
            location.reload(); 
        }
    });   
};

//Konfirmasi Approve Tabungan
$('.confirmationTabungan').on('click',function(){
    var id = $(this).attr("data-id");
    var url = "<?php echo base_url('setoran_nasabah/approveSetoran/') ?>";
    swal({   
        title: "Konfirmasi Approve",   
        text: "Apakah anda yakin untuk approve data ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#1f91f3",
        confirmButtonText: "Approve",
        closeOnConfirm: false
    }, function () {
        approveSetoran(id,url);
    });
});

window.onload = function(){
    <?php if(isset($msg_load)){
    if($msg_load=='sukses'){?>
        notifSuccess();
    <?php }
    else if($msg_load=='gagal'){ ?>    
        notifFail();
    <?php
    }
    } ?>

    <?php if($this->uri->segment('2')=='checkout_detail'){ ?>
        hitungTotal();
    <?php } ?>    
}

function notifSuccess(){
    var placementFrom   = 'bottom';
    var placementAlign  = 'center';
    var colorName       = 'alert-success';
    var text            = '<?php if (isset($msg)){echo $msg;}?>';

    showNotification(colorName, text , placementFrom, placementAlign, null, null);
}

function notifFail(){
    var placementFrom   = 'bottom';
    var placementAlign  = 'center';
    var colorName       = 'alert-danger';
    var text            = '<?php if (isset($msg)){echo $msg;}?>';

    showNotification(colorName, text , placementFrom, placementAlign, null, null);
}

function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">x</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}

//bukti transfer
function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
       $('#transfer_file').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(input.files[0]);
    }
}

$("input#bukti_transfer").change(function(){
    //alert('fired')
    readURL(this);
})

//foto profil
function readURLProfil(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
       $('#foto_user_container').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(input.files[0]);
    }
}

$("input#foto_user").change(function(){
    readURLProfil(this);
})

<?php if($this->uri->segment('2')=='checkout_detail'){ ?>
    $(".tipe").change(function(){
        hitungTotal();
    })

    $(".jumlah").change(function(){
        hitungTotal();
    })

    Number.prototype.formatMoney = function(c, d, t){
        var n = this, 
        c = isNaN(c = Math.abs(c)) ? 2 : c, 
        d = d == undefined ? "." : d, 
        t = t == undefined ? "," : t, 
        s = n < 0 ? "-" : "", 
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
        j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

    function hitungTotal(){
        var harga = $('.tipe').find('option:selected').attr('harga');
        var jumlah = $('.jumlah').val();
        var total = 0;
        var saldo = <?php echo $dataNasabah->saldo_tabungan ?>;

        total = parseInt(harga)*parseInt(jumlah);
        if(saldo >= total){
            $('.kurangDana').slideUp();
            $('#checkout').attr('disabled',false);
        }else{
            $('.kurangDana').slideDown();
            $('#checkout').attr('disabled',true);
        }
        $('.inputtotal').val(total);
        total = total.formatMoney(0, '.', '.');

        $('.total').html(total);
        
    }
<?php  } ?>


</script>