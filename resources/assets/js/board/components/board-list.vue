<script>
    import Card from './board-card.vue';
    import NewCard from './board-card-new.vue';
    import Title from './board-card-title.vue';

    export default {
        components: {Card, NewCard, Title}
    };
</script>

<template>
    <div class="board__list">
        <div class="board__list__header">
            Backlog
            <a href="#" class="board__list__header__settings"><i class="fa fa-gear"></i></a>
        </div>
        <div class="board__list__body">
            <card></card>
            <card></card>
            <card></card>
            <title></title>
            <card></card>
            <new-card></new-card>
        </div>
    </div>
</template>

<style lang="sass">
    .board__list {
        width: 300px;
        flex: none;
        display: flex;
        flex-direction: column;
        &__header {
            padding: 10px;
            width: 100%;
            text-align: center;
            font-weight: bold;
            position: relative;
            &__settings {
                position: absolute;
                right: 10px;
                margin-left: 5px;
                color: #757575;
                opacity: 0.5;
                &:hover {
                    opacity: 1;
                }
            }
        }
        &__body {
            overflow-y: scroll;
            padding-bottom: 10px;
        }
    }
</style>
