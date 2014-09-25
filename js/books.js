(function($) {
    //show statement in a default dialog box
    function statement(dialog,title,statement){
        dialog.dialog({
            title: title,
            buttons: {
                Ok: function() {
                    dialog.dialog('close');
                },
            }
        });

        dialog.find('p').text(statement);
        dialog.dialog('open');
    }

    $(document).ready(function(){
        //create dialog box to add new book
        var dAddNewBook=$( "#addNewBook" ).dialog({
            autoOpen: false,
            modal:true,
            position: {
                my: "center center",
                at: "center center-250"
            },
            height: 500,
            width: 570
        });

        //create dialog box to show progress bar when something is processing
        var dProgress=$( "#progress" ).dialog({
            autoOpen: false,
            modal:true,
            closeOnEscape: false,
            title: 'Trwa przetwarzanie...',
            position: {
                my: "center center",
                at: "center center-55"
            },
            height: 105,
            width: 400
        });

        var dialogOptions={
            resizable: false,
            autoOpen: false,
            modal: true,
            closeOnEscape: false,
            position: {
                my: "center center",
                at: "center center-100"
            },
        };

        //create dialog box to confirm delete a book
        var dConfirm=$( "#confirm" ).dialog(dialogOptions);
        
        //create default dialog box
        var dialog=$( "#dialog" ).dialog(dialogOptions);

        //create progress bar
        $("#progressbar").progressbar({
            value: false
        });

        var form=dAddNewBook.find('form');
        
        //use autocomplete plugin to publisher field
        form.find('input[name=publisher]').autocomplete({
            source: "ajax/getPublishers",
            minLength: 2
        });
        
        //use autocomplete plugin to author field
        form.find('input[name=author]').autocomplete({
            source: "ajax/getAuthors",
            minLength: 2
        });
        
        //validate rules and submit action
        form.validate({
            rules: {
                publish_year: {
                  required: true,
                  range: [1000, 2020],
                  digits: true
                },
                author: {
                  required: true,
                },
                publisher: {
                  required: true,
                },
                title: {
                  required: true,
                },
                comment: {
                  required: true,
                }
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "ajax/addBook",
                    data: $(form).serialize(),
                    beforeSend: function(){
                        dAddNewBook.dialog('close');
                        dProgress.dialog('open');
                    },
                    success: function(data){
                        if(data==='0'){
                            this.error();
                        }
                        else{
                            var data=$(data);
                            dProgress.dialog('close');
                            
                            //scroll to place where new book will be inserted
                            $('html, body').animate({scrollTop: $("#books .book:last").offset().top}, 1000);
                            
                            $("#books").append(data);
                            data.animate({opacity: 1}, 2000);
                            
                            //clear form
                            $(form)[0].reset();
                        }
                    },
                    error: function(){
                        dProgress.dialog('close');
                        statement(dialog,'Wystąpił błąd','Operacja nie została wykonana')
                    }
                });

                return false;
            }
        });

        $(".addNewBook").click(function(){
            dAddNewBook.dialog( "open" );
            return false;
        });

        $("#books").on('click','a.delete',function(){
            var t=$(this);
            
            //get book id
            var book_id=$(this).attr('href').substring(1);
            
            var book=$(this).parent();
            dConfirm.find('span').text(book.find('h4').text());
            
            dConfirm.dialog({
                buttons: {
                    Usuń: function() {
                        var dialog=$(this);
                        $.ajax({
                            type: "GET",
                            url: "ajax/deleteBook",
                            data: {id:book_id},
                            beforeSend: function(){
                                dialog.dialog( "close" );
                                dProgress.dialog('open');
                            },
                            success: function(data){
                                if(data==='0'){
                                    this.error();
                                }
                                else{
                                    dProgress.dialog('close');
                                    t.focus();
                                    book.animate({opacity: 0, height:0, margin:0, padding:0}, 1000, function(){
                                        book.remove();
                                    });
                                }
                            },
                            error: function(){
                                dProgress.dialog('close');
                                statement(dialog,'Wystąpił błąd','Operacja nie została wykonana')
                            }
                        });
                    },
                    Anuluj: function() {
                        $( this ).dialog( "close" );
                    }
                }
            });
            dConfirm.dialog('open');
            return false;
        });
    });
})(jQuery);