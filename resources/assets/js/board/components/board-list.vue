<script>
    import BoardCard from './board-card.vue';
    import BoardCardNew from './board-card-new.vue';

    export default {
        components: {BoardCard, BoardCardNew}
    };
</script>

<template>
    <div class="board__list">
        <div class="board__list__header">
            Backlog
            <a href="#" class="board__list__header__settings"><i class="fa fa-gear"></i></a>
        </div>
        <div class="board__list__body">
            <board-card></board-card>
            <board-card></board-card>
            <board-card type="title"></board-card>
            <board-card></board-card>
            <board-card type="title"></board-card>
            <board-card></board-card>
            <board-card-new></board-card-new>
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
