<template>
    <div class="b-player-select">
        <div class="b-player-select-avatar">
            <img :src="value.avatar">
        </div>
        <div class="b-player-select-name">
            {{value.name}}
            <button type="button" class="btn btn-sm btn-secondary float-right" @click="remove">X</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            value: Object,
        },
        methods: {
            remove() {
                this.$emit('remove', this.value);
            }
        }
    }
</script>

<style lang="scss">
    .b-player-select {
        display: flex;
        height: 3em;
    }
    .b-player-select-avatar {
        border: 2px solid black;
        width: 3em;
        height: 100%;
        margin: auto;
        background-color: rgba(255,255,255,0.8);
    }
    .b-player-select-avatar img {
        width: 100%;
        height: 100%;
    }
    .b-player-select-name {
        flex: 2 0 0;
        height: 100%;
        margin: auto;
        border: 2px solid black;
        background-color: rgba(255,255,255,0.8);
        padding: 0.5em;
        text-transform: uppercase;
    }
</style>
