<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // JS Arrow Function
    $(document).ready(() => {
        // PHP Function inside keyup
        $("#search").keyup(function() {
            $.ajax({
                url: './search.php',
                type: 'POST',
                data: {search: $(this).val()},
                success: result => $("#result").html(result)
            })
        })
    })
</script>
<input type="text" id="search" />   
<span id="result"></span>