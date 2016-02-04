<script>
    export default {};
</script>

<template>
    <div class="board__card board__card--title">
        <span>Owner Dashboard</span>
    </div>
</template>

<style lang="sass">
    .board__card--title {
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
</style>
