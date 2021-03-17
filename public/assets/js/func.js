$(document).ready( function () {
    $('#datatable').DataTable();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    $('.deletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.delete_val').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/role-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });

    $('.familledeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.fadelete_val').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/famille-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.hopitaledeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.hopidelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/hopitale-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });



    $('.centreOrthodeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.centreOrthodelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/centreOrtho-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.Laboratoiredeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.laboratoiredelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/laboratoire-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.maladiedeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.maladiedelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/maladie-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.medecindeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.medelete_val').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/medecin-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.medicamentdeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.medelete_val').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/medicament-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.opticiendeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.opticiendelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/opticien-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.pharmaciedeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.pharmadelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/pharmacie-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });


    $('.specialisationdeletebtn').click(function (e) { 
        e.preventDefault();
        
        var delete_id = $(this).closest("tr").find('.speciadelete_val_id').val();
        //alert(delete_id);
        swal({
            title: "Etes Vous sure?",
            text: "Une fois supprimé vous ne pourrez plus recupérer cette donnée!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                var data = {
                    "_token": $('input[name="csrf-token"]').val(),
                    "id" :delete_id,
                };
                $.ajax({
                    type: "DELETE",
                    url: '/specialisation-delete/'+delete_id,
                    data: data,
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        })
                        .then((result) => {
                            location.reload();
                        });
                        
                    }
                });

               
            } 
        });

    });






    
} );