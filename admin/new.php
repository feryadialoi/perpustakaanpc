<!DOCTYPE html>
<html>
<head>
<script src="assets\jquerry\jquery-331.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "tes.txt", success: function(result){
            $("#div1").html(result);
        }});
    });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>

</body>
</html>
