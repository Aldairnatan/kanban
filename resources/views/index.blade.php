<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


    <script>
        $(function () {
            $(".Board").sortable({
                handle: ".Board__list__header",
                axis: "x",
                cursor: "move",
                items: "> .Board__list:not(.Board__list--new-list)",
                distance: 5
            }).disableSelection();

            $(".Board__list__body").sortable({
                connectWith: ".Board__list__body",
                containment: ".Board",
                cursor: "move",
                distance: 5,
                placeholder: "Board__card-placeholder",
                forcePlaceholderSize: true
            }).disableSelection();
        });
    </script>

</head>
<body>

<div class="Board">
    @foreach(range(1,9) as $i)
        <div class="Board__list">
            <div class="Board__list__header">
                Backlog
            </div>
            <div class="Board__list__body">
                @foreach(range(1,12) as $x)
                    <div class="Board__list__card">
                        Lorem ipsum dolor dit amit doleera dracarys kelitis.
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="Board__list Board__list--new-list">

    </div>

</div>

</body>
</html>