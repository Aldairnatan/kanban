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
                items: "> .Board__card:not(.Board__card--new-card)",
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
            <a href="#" class="Board__list__header__settings"><i class="fa fa-gear"></i></a>
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
            <div class="Board__card Board__card--title">
                <span>Owner Dashboard</span>
            </div>
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
        </div>
    </div>

    <div class="Board__list">
        <div class="Board__list__header">
            Backlog
            <a href="#" class="Board__list__header__settings"><i class="fa fa-gear"></i></a>
        </div>
        <div class="Board__list__body">
            <div class="Board__card Board__card--title">
                <span>Owner Dashboard</span>
            </div>
            @foreach(range(1,4) as $x)
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
        </div>
    </div>

    <div class="Board__list">
        <div class="Board__list__header">
            Backlog
            <a href="#" class="Board__list__header__settings"><i class="fa fa-gear"></i></a>
        </div>
        <div class="Board__list__body">
            <div class="Board__card Board__card--new-card">
                <input type="text" placeholder="New item">
            </div>
        </div>
    </div>

    <div class="Board__list Board__list--new-list">
        <input type="text" placeholder="New List">
    </div>

</div>

</body>
</html>