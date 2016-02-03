<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('css/libs.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


    <script>
        $(function () {
            $(".board").sortable({
                handle: ".board__list__header",
                containment: ".board",
                axis: "x",
                cursor: "move",
                items: "> .board__list:not(.board__list--new-list)",
                distance: 5
            }).disableSelection();

            $(".board__list__body").sortable({
                connectWith: ".board__list__body",
                containment: ".board",
                cursor: "move",
                distance: 5,
                items: "> .board__card:not(.board__card--new-card)",
                placeholder: "board__card--placeholder",
                forcePlaceholderSize: true
            }).disableSelection();
        });
    </script>

</head>
<body>

<div id="boardWrapper">
    <board></board>
</div>

<script src="{{asset('js/main.js')}}"></script>
</body>
</html>