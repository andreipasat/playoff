/**
 * Created by Andrei on 20.02.18.
 */
$(document).ready(function(){


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    var age = $('#age').val();
    var kg_form = $('#kg_from').val();
    var kg_to = $('#kg_to').val();
    loadKg(age);
    loadPlayers(age,kg_form,kg_to);

    $(document.body).on('click','.age_chose button', function () {

      var age2 = $(this).attr('age');
        $('#age').val(age2);
        loadKg(age2);
    });



    $(document.body).on('click','#kg_chose button', function () {

        var kg_from = $(this).attr('kg_from');
        var kg_to = $(this).attr('kg_to');
        $('#kg_from').val(kg_from);
        $('#kg_to').val(kg_to);

        var age = $('#age').val();
        var sex = $('input[name="sex"]:checked').val();
        $('#players').html('');

        loadPlayers(age,kg_from,kg_to);

    });


    // $(document.body).on("sortstop",'#players_sortable', function( event, ui ) {
    //     console.log(ui);
    // } );

    $(document.body).on('submit', '#edit_playoff', function (e) {
        e.preventDefault();
        var playOffId = $('#playoff_id').val();
        var sex = $('input[name="sex"]:checked').val();
        var rule = $('select[name="rule"] option:selected').val();
        var age = $('#age').val();
        var kg_from = $('#kg_from').val();
        var kg_to = $('#kg_to').val();
        var playersIDs = $( "#players_sortable" ).sortable( "toArray" );

        $.ajax({
           url : '/playoff/savelist',
            type: 'POST',
            data : {
                playoff_id : playOffId,
                age : age,
                sex : sex,
                kg_from : kg_from,
                kg_to : kg_to,
                rule : rule,
                playersIDs : playersIDs
            },
            success : function (response) {
                window.location.href = "/playoff/view/" + playOffId;
            }
        });

    });


});

function loadKg(age) {
    var sex = $('input[name="sex"]:checked').val();
    $.ajax({
        url : '/playoff/kg',
        type : "POST",
        data : {age : age, sex : sex},
        success : function(response) {
            $('#kg').html(response)
        }
    });
}

function loadPlayers(age,kg_from,kg_to) {
    var sex = $('input[name="sex"]:checked').val();
    $.ajax({
        url : '/playoff/get_players',
        type : "POST",
        data : {age : age, sex : sex, kg_from : kg_from, kg_to : kg_to},
        success : function(response) {
            $('#players').html(response);
            $( "#players_sortable" ).sortable();
            $( "#players_sortable" ).disableSelection();
        }
    });
}