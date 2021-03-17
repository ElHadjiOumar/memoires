$('tbody').delegate('.montantv','keyup',function(){

    var total=0;
    $('.montantv').each(function(i,e){
        var tr=$(this).parent().parent();
        var montant=tr.find('.montantv').val()-0;
        total +=montant;
        $('.sub_totalv').val(total);
    });
     var pourcentage =$('.prise_chargev').val();
        var sub_total = $('.sub_totalv').val();
        var prise_charge = ((pourcentage * sub_total)/100) ;

        var restes = sub_total - prise_charge ; 
        var autreRestes = sub_total - restes ;
        $('.totalv').val(restes); 
        $('.totalIPMv').val(autreRestes); 
    

});

/* $(document).ready(function () {
    var prise_charge = $('.prise_charge').val();   
    var totale = $('.total').val(); 
    var restes = totale - prise_charge ;
    $('.total').val(restes);  
}); */

$('.addRowv').on('click',function(){
    addRowv();
});
function addRowv()
{
    var tr='<tr>'+
    '<td> <input type="text" name="nom[]" class="form-control" required="" /></td>'+
    '<td colspan="2"> <input type="number" name="montant[]" class="form-control montantv" required="" /> </td>'+
    '<td> <a href="#" class="btn btn-danger removev">delete</a>'+
    '</tr>';
    $('tbody').append(tr);
};
$( document ).on( "click", ".removev", function() {
    var last=$('tbody tr').length;
    if(last==1){
        alert("Vous ne Pouvez pas Supprimer la derniere ligne");
    }
    else{
        var totale = $('.sub_totalv').val();
        
        var tr=$(this).parent().parent();
        var montant = tr.find('.montantv').val();

        var reste = (totale - montant) ;
        //alert(totale);
        $('.sub_totalv').val(reste);
         $(this).parent().parent().remove();
         
    }

});
