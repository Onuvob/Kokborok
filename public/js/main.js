
//On key press User Edit profile

$('#edit-profile-password').keyup(function(e)
{
    //console.log($(this).val());


    if( $(this).val() && ( $(this).val().length < 8 )  )
    {
        $("#profile-edit-submit-btn").attr("disabled", true);
        $('.edit-profile-pass-error').text("Password must be more than 8 characters.");
        $('.edit-profile-passconf-error').text("");

    }

    else
    {
        $('.edit-profile-pass-error').text("");

        if( $('#edit-profile-password-confirm').val() == $(this).val() )
        {
            $('.edit-profile-passconf-error').text("");
            $("#profile-edit-submit-btn").attr("disabled", false);
        }

        else
        {
            if( $('#edit-profile-password-confirm').val() )
                $('.edit-profile-passconf-error').text("Password doesn't match.");

            $("#profile-edit-submit-btn").attr("disabled", true);
        }

    }

});

$('#edit-profile-password-confirm').keyup(function(e)
{
    //console.log($(this).val());

    if( $('#edit-profile-password').val() == $(this).val() )
    {
        if( $('#edit-profile-password').val().length < 8 )
        {
            $("#profile-edit-submit-btn").attr("disabled", true);
        }
        else
        {
            $('.edit-profile-passconf-error').text("");
            $("#profile-edit-submit-btn").attr("disabled", false);
        }
        $('.edit-profile-passconf-error').text("");
    }

    else
    {
        $('.edit-profile-passconf-error').text("Password doesn't match.");
        $("#profile-edit-submit-btn").attr("disabled", true);
    }

});

// On key press User Edit profile End


// For email field
$('#emailInEditPro').keyup(function(e)
{

    $('#messageEmailEditPro').html("");

    const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if( regex.test( $(this).val() ) )
    {
        const url = "ajax/email-search";

        var data = {
            url : url,
            type : "get",
            data : $(this).val(),
            id : '#messageEmailEditPro'
        };

        sendAjaxRequest( data );
    }

    else console.log( "No email." );


});


// For phone field
$('#phoneEditPro').keyup(function(e)
{

    $('#messagePhoneEditPro').html("");


    if( $(this).val().length > 10 )
    {
        const url = "ajax/phone-search";

        var data = {
            url : url,
            type : "get",
            data : $(this).val(),
            id : '#messagePhoneEditPro'
        };

        sendAjaxRequest( data );

    }

    else console.log( "No Phone." );


});

// Send Ajax Request
function sendAjaxRequest( argument )
{
    $.ajax({
        url : argument.url,
        type : argument.type,
        data : { query : argument.data },

        success: function(response) {
            //console.log(`From backend : ${response}` );
            //$('#messageEmailEditPro').html( response );

            if( response == 1 )
            {
                $(argument.id).append( "<span class='text-success'>You're good to go.</span>" );
                $("#profile-edit-submit-btn").attr("disabled", false);
            }

            else
            {
                $(argument.id).append( "<span class='text-danger'>The credential has been used with another user.</span>" );
                $("#profile-edit-submit-btn").attr("disabled", true);
            }

        },
        error: function(xhr) {

            console.log( "Error" );
        }
    });
}

// End Ajax request for edit profile