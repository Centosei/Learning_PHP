<?php
require_once 'header.php';

echo <<<_END
    <script>
function checkUser(user)
{
    if (user.value =='')
    {
        $('#used').html('&nbsp;')
            return
}

$.post
    (
        'checkuser.php',
{ user : user.value },
function(data)
{
    $('#used').html(data)
}
)
}
</script>
    _END;

$error = $user = $pass = "";
