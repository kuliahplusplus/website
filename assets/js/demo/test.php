<script type="text/javascript" src="../js/jquery.confirm.min.js"></script>
<script type="text/javascript" src="../js/jquery.confirm.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>

<script>
            $("#simpleConfirm").confirm();
            $("#btnSimpleConfirm").confirm();
            $("#complexConfirm").confirm({
                title:"Delete confirmation",
                text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
                confirm: function(button) {
                    button.fadeOut(2000).fadeIn(2000);
                    alert("You just confirmed.");
                },
                cancel: function(button) {
                    button.fadeOut(2000).fadeIn(2000);
                    alert("You aborted the operation.");
                },
                confirmButton: "Yes I am",
                cancelButton: "No"
            });
            $("#manualTrigger").click(function() {
                $.confirm({
                    text: "This is a confirmation dialog manually triggered! Please confirm:",
                    confirm: function() {
                        alert("You just confirmed.");
                    },
                    cancel: function() {
                        alert("You cancelled.");
                    }
                });
            });
        </script>

<a id="simpleConfirm" href="#" class="btn btn-primary">Click me</a><br>
<a href="#" id="simpleConfirm">Go to home</a><br>
<td><a id="simpleConfirm" href="#" class="btn btn-primary">Click me</a></td>