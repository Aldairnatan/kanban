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
                containment: ".Board",
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
                placeholder: "Board__card--placeholder",
                forcePlaceholderSize: true
            }).disableSelection();
        });
    </script>

</head>
<body>

<div class="Board">


    <div class="Board__list">
        <div class="Board__list__header">
            Backlog
        </div>
        <div class="Board__list__body">
            @foreach(range(1,3) as $x)
                <div class="Board__card">
                    <a href="#" class="Board__card__add">+</a>

                    <div class="Board__card__member">
                        <div class="Board__card__member__wrapper">
                            <img src="http://lorempixel.com/150/150/people/9/" alt="">
                        </div>
                    </div>
                    <div class="Board__card__desc">
                        <span>Lorem ipsum dolor dit amit doleera dracarys kelitis.</span>

                        <div class="Board__card__info">
                            <span class="Board__card__info__due">02-01</span>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="Board__cardTitle">
                Owner Dashboard
            </div>
        </div>
    </div>

    <div class="Board__list Board__list--new-list">

    </div>

</div>

</body>
</html>