<template>
    <div class="create-match full-screen">
        <panel title-color="lightsalmon" class="panel-left">
            <template slot="title">
                <input class="form-control-transparent" v-model="match.name">
            </template>
            <template>
                <player-select v-for="(player,key) in match.players" :key="key" :value="player"></player-select>
            </template>
        </panel>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                match: {
                    name: 'Nombre de partida',
                    players: [
                        {name:"Player 1"}
                    ]
                }
            };
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
