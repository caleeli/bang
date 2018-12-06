<template>
    <div class="create-match full-screen">
        <panel title-color="lightsalmon" class="panel-left">
            <template slot="title">
                <input class="form-control-transparent" v-model="value.name">
            </template>
            <template>
                <player-select v-for="(player,key) in value.players" :key="key" :value="player"></player-select>
            </template>
        </panel>
    </div>
</template>

<script>

    export default {
        props: {
            value: Object,
        },
        data() {
            return {
            };
        },
        mounted() {
            $(window).on("unload", e => {
            });
        }
    }
</script>

<style lang="scss">
    .panel-left {
        position:absolute!important;
        top: 4em;
        left:2em;
        width: 35vw;
        height: 60vh;
    }
    .create-match {
        background-image: url(/images/create_match_normal.jpg);
        background-size: 100% auto; 
    }
    .b-panel-title {
        border: 1px solid #E7E7E7;
        background-color: rgba(0,0,0,0.5);
        position: absolute;
        top: 0px;
        left: 1em;
    }
</style>
