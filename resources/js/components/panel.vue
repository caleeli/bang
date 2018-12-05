<template>
    <div class="b-panel">
        <div class="b-panel-body">
            <slot></slot>
        </div>
        <div class="b-panel-title" :style="{background:titleColor}">
            <slot name="title"></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            titleColor: String,
        }
    }
</script>

<style lang="scss">
    .b-panel {
        position: relative;
        border: 1px solid transparent;
    }
    .b-panel-body {
        border: 1px solid #E7E7E7;
        background-color: rgba(0,0,0,0.5);
        margin-top: 1em;
        border-radius: 1em;
        min-height: 2em;
        height: calc(100% - 1em);
        padding:1em;
    }
    .b-panel-title {
        border: none;
        background-color: rgba(0,0,0,0.5);
        position: absolute;
        top: 0px;
        left: 1em;
        border-radius: 1em;
    }
</style>
