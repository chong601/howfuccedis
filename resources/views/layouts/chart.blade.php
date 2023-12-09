@props(['title', 'hostPath', 'systemName'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>{{ $title }}</title>
</head>
<body>
    {{ $slot }}
</body>
<script>
    const netdataAssets = '{{ config('app.url') }}';
    const netdataServer = '{{ $hostPath }}';
    const netdataTheme = 'slate';  // make it dark.
</script>
<script type="text/javascript" src="/dashboard.js"></script>
</html>
