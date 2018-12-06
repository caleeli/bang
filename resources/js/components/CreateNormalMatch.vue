<template>
    <div class="create-match full-screen">
        <div class="row">
            <div class="col-6">
                <panel title-color="lightsalmon" class="panel-left">
                    <template slot="title">
                        <input class="form-control-transparent" v-model="value.name">
                    </template>
                    <template>
                        <player-select v-for="(player,key) in value.players" :key="key" :value="player" @remove="remove"></player-select>
                    </template>
                </panel>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-5">
                <button type="button" class="btn btn-success float-right">Comenzar</button>
            </div>
        </div>
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
        methods: {
            remove(player) {
                const index = this.value.players.indexOf(player);
                this.value.players.splice(index, 1);
            }
        },
        mounted() {
        }
    }
</script>

<style lang="scss">
    .panel-left {
        height: 60vh;
    }
    .create-match {
        background-image: url(/images/create_match_normal.jpg);
        background-size: 100% auto;
        padding-top:4em;
    }
    .b-panel-title {
        border: 1px solid #E7E7E7;
        background-color: rgba(0,0,0,0.5);
        position: absolute;
        top: 0px;
        left: 1em;
    }
</style>
