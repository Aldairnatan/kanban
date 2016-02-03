<script>
    import BoardList from './components/board-list.vue';
    import BoardListNew from './components/board-list-new.vue';

    export default {
        components: {BoardList, BoardListNew}
    };
</script>

<template>
    <div class="board">
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>
        <board-list></board-list>

        <board-list-new></board-list-new>
    </div>
</template>

<style lang="sass">
    .board{
        display: flex;
        overflow-x: scroll;
        height: 100%;
        background: #F6F7FB;
        overflow-y: hidden;
    }
</style>
