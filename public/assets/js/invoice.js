    $('tbody').delegate('.qt,.prix','keyup',function(){
        var tr=$(this).parent().parent();
        var qt=tr.find('.qt').val();
        var prix=tr.find('.prix').val();
        var montant=(qt*prix);
        tr.find('.montant').val(montant);
        total();
    });
    function total(){
        var total=0;
        $('.montant').each(function(i,e){
            var montant=$(this).val()-0;
        total +=montant;
    });
    $('.sub_total').val(total);
    var pourcentage =$('.prise_charge').val();
    var sub_total = $('.sub_total').val();
        var prise_charge = ((pourcentage * sub_total)/100) ;

        var restes = sub_total - prise_charge ; 
        var autreRestes = sub_total - restes ;
        $('.total').val(restes); 
        $('.totalIPM').val(autreRestes); 
    
      
    
    }
    /* $(document).ready(function () {
        var prise_charge = $('.prise_charge').val();   
        var totale = $('.total').val(); 
        var restes = totale - prise_charge ;
        $('.total').val(restes);  
    }); */
    
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td> <input type="text" name="nom[]" class="form-control" required="" /></td>'+
        '<td> <input type="number" name="prix[]" class="form-control prix" /> </td>'+
        '<td> <input type="number" name="qt[]" class="form-control qt" required="" /> </td>'+
        '<td> <input type="number" name="montant[]" class="form-control montant" required="" readonly/> </td>'+
        '<td> <a href="#" class="btn btn-danger remove">delete</a>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $( document ).on( "click", ".remove", function() {
        var last=$('tbody tr').length;
        if(last==1){
            alert("Vous ne Pouvez pas Supprimer la derniere ligne");
        }
        else{
            var totale = $('.sub_total').val();
            
            var tr=$(this).parent().parent();
            var montant = tr.find('.montant').val();

            var reste = (totale - montant) ;
            //alert(totale);
            $('.sub_total').val(reste);
             $(this).parent().parent().remove();
             
        }
    
    });
    