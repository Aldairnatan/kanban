<script>
    export default {
        props: ['type']
    };
</script>

<template>
    <div class="board__card board__card--title" v-if="type == 'title'">
        <span>Owner Dashboard</span>
    </div>

    <div class="board__card" v-else>
        <a href="#" class="board__card__add"><span>+</span></a>

        <div class="board__card__member">
            <div class="board__card__member__wrapper">
                <img src="http://lorempixel.com/150/150/people/9/" alt="">
            </div>
        </div>
        <div class="board__card__desc">
            <span>Lorem ipsum dolor dit amit doleera dracarys kelitis.</span>

            <div class="board__card__info">
                <span class="board__card__info__due">02-01</span>
            </div>
        </div>
    </div>
</template>

<style lang="sass">
    .board__card, .board__card--placeholder {
        margin: 0 8px 10px;
        padding: 6px;
    }

    .board__card {
        box-shadow: 0 0.5px 1px 0 rgba(0, 0, 0, 0.1);
        border-radius: 2px;
        transition: box-shadow 300ms ease;
        background: white;
        color: #646c76;
        line-height: 18px;
        position: relative;
        font-size: 85%;
        display: flex;
        &--placeholder {}
        &--title {
            box-shadow: none;
            background: transparent;
            height: 30px;
            span {
                position: absolute;
                bottom: -5px;
                left: 0px;
                font-weight: bold;
                font-size: 100%;
            }
            &:first-child {
                height: 15px;
            }
        }
        &__add {
            box-sizing: content-box;
            opacity: 0;
            text-decoration: none;
            bottom: -20px;
            z-index: 9;
            right: 0;
            width: 22px;
            height: 22px;
            line-height: 22px;
            text-align: center;
            vertical-align: middle;
            position: absolute;
            padding-bottom: 5px;
            transition: opacity 0s ease-in-out 0.1s;
            span {
                width: 100%;
                display: block;
                background: #4ca84b;
                border-radius: 50%;
                color: white;
            }
        }
        &:hover &__add {
            opacity: 1;
        }
        &__member {
            flex: 1;
            display: flex;
            align-items: center;
            &__wrapper {
                position: relative;
                overflow: hidden;
                border-radius: 50%;
                text-align: center;
                background-color: white;
                border: solid 1px #e8e8e8;
                padding: 3px;
                display: flex;
                align-items: center;
                img {
                    width: 100%;
                    border-radius: 50%;
                    vertical-align: top;
                    display: block;
                }
            }
        }
        &__desc {
            flex: 6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 6px;
        }
        &__info {
            margin-bottom: 1px;
            &__due {
                border: solid 1px #4ca84b;
                color: #4ca84b;
                display: inline-block;
                border-radius: 2px;
                font-size: 70%;
                font-weight: bold;
                padding: 1px 2px;
                text-align: center;
                line-height: 1;
                vertical-align: bottom;
            }
        }
        &:last-child {
            margin-bottom: 0;
        }
    }
</style>
