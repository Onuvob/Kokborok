
//On key press User Edit profile

$('#edit-profile-password').keyup(function(e)
{
    console.log($(this).val());


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
    console.log($(this).val());

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


