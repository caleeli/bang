<template>
    <div class="create-match full-screen">
        <center>
            <br>
            <input class='form-control btn-warning col-10' v-model='value.name'>
        </center>
        <div class="row">
            <div class="col-6">
                <panel title-color="lightsalmon" class="panel-left">
                    <template slot="title">
                        <div style='padding: 0em 0.5em'>PARTIDA NORMAL</div>
                    </template>
                    <template>
                        <div class='fondo-normal'>
                            <button type='button' class='btn btn-secondary div-center' @click='escoger("normal")'>ESCOGER</button>
                        </div>
                    </template>
                </panel>
            </div>
            <div class="col-6">
                <panel title-color="lightsalmon" class="panel-right">
                    <template slot="title">
                        <div style='padding: 0em 0.5em'>VERSUS</div>
                    </template>
                    <template>
                        <div class='fondo-versus'>
                            <button type='button' class='btn btn-secondary div-center' @click='escoger("versus")'>ESCOGER</button>
                        </div>
                    </template>
                </panel>
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
            escoger(type) {
                this.value.type = type;
                axios.post('/match', this.value)
                        .then((response) => {
                            window.location = '/match/' + response.data.id + '/edit';
                        });
            }
        },
    }
</script>

<style lang="scss">
    .div-center {
        margin-top: 25%;
    }
    .fondo-normal {
        text-align: center;
        background-image: url(/images/create_match_normal.jpg);
        background-size: 100% auto;
        width: 100%;
        height: 100%;
    }
    .fondo-versus {
        text-align: center;
        background-image: url(/images/create_match_versus.jpg);
        background-size: 100% auto;
        width: 100%;
        height: 100%;
    }
    .panel-left {
        //position:absolute!important;
        //top: 8em;
        //left:2em;
        //width: 35vw;
        height: 60vh;
    }
    .panel-right {
        //position:absolute!important;
        //top: 8em;
        //right:2em;
        //width: 35vw;
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
