<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <?php echo $css; ?>
    </head>
    <body>
        <?php
            echo $navbar;
            echo $cart;
            echo $footer;
        ?>
        <?php echo $js; ?>
        <script>
            $(document).ready(function(){
                console.log('ha')
            })
        </script>
    </body>
</html>
