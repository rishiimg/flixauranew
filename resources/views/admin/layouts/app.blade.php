<!DOCTYPE html>
<html lang="en">
<head>
  
    @include('admin.layouts.header-link')
    @include('admin.layouts.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    
<?php use App\Traits\SettingsTrait; ?>
    @yield('mainsection')

    @include('admin.layouts.footer')
    @include('admin.layouts.footer-link')
</body>
</html> 