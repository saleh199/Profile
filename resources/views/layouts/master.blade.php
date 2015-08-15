<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User Profile</title>

    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <?php echo Html::style('css/font-awesome.min.css'); ?>
    <?php echo Html::style('css/bootstrap.min.css') ?>
    <?php echo Html::style('css/theme.min.css') ?>
</head>

<body>

<div class="container">
    @yield('content')
</div>

<?php echo Html::script('js/jquery-1.10.2.min.js'); ?>
<?php echo Html::script('js/jquery.populate.js'); ?>
<?php echo Html::script('js/jquery.form.js'); ?>

<!-- Referencing Bootstrap JS that is hosted locally -->
<?php echo Html::script('js/bootstrap.min.js'); ?>
<?php echo Html::script('js/app.js'); ?>
<script>
    _config.base_url = '{{URL::to('/')}}/';
    app.init();
</script>
</body>
</html>