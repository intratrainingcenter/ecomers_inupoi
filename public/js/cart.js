$ (document).ready(function(){
    console.log('Ready!!')
    fetch();
    
        
});
function addCommas(nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return '$' + x1;
}

function fetch()
{

    $.ajax({
        url: 'decart',
        type : 'GET',
        dataType : 'json',
        success: function(cart){
            minicart = '';
            $.each(cart['cart'], function(key,items){
                minicart+="<li class='header-cart-item flex-w flex-t m-b-12'>";
                minicart+=            "<div class='header-cart-item-img'>";
                minicart+=                "<img src='"+ items.gambar+"' alt='IMG'>";
                minicart+=            "</div>"
                minicart+=            "<div class='header-cart-item-txt p-t-8'>";
                minicart+=                "<a href='' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>";
                minicart+=                    ""+items.nama_produk+"";
                minicart+=                "</a>";
                minicart+=                "<span class='header-cart-item-info'>";
                minicart+=                        ""+addCommas(items.harga)+"";
                minicart+=                "</span>";
                minicart+=            "</div>";
                minicart+=        "</li>";
            })
            $('#minicart').html(minicart);
        }, error:function(xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Ajax Failed :' + xhr.responseText;
        }

    });
}