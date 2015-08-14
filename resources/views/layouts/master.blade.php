<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <?php echo Html::style('css/bootstrap.min.css') ?>
    <?php echo Html::style('css/theme.min.css') ?>
</head>

<body>

<div class="container">
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- Referencing Bootstrap JS that is hosted locally -->
<?php echo Html::script('js/bootstrap.min.js'); ?>
</body>
</html>