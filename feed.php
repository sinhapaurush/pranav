<?php
    $name = $_POST['name'];
    function print_script($name){
        return("
            <script>
                alert('Hi! {$name}, Your feedback is sent!');
            </script>
        ");
    }
    echo print_script($name);
?>