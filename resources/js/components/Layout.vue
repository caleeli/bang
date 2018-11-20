<template>
    <div class="container-fluid game-table">
        <div class="row">
            <div class="col-3">
                <avatar :player="me"></avatar>
            </div>
            <div class="col-3">
                <player :player="me"></player>
            </div>
            <div class="col-3">
                <player :player="me"></player>
            </div>
            <div class="col-3">
                <zoom></zoom>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div style="height: 50%">
                    <player :player="me"></player>
                </div>
                <div style="height: 50%">
                    <player :player="me"></player>
                </div>
            </div>
            <div class="col-6">
                <center-cards></center-cards>
            </div>
            <div class="col-3">
                <div style="height: 50%">
                    <player :player="me"></player>
                </div>
                <div style="height: 50%">
                    <player :player="me"></player>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-3">
                <player :player="me"></player>
            </div>
            <div class="col-3">
                <player :player="me"></player>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        me: Object
    }
};
</script>

<style lang="scss">
#app,
body,
html,
.game-table {
    height: 100%;
    overflow: hidden;
}
.game-table {
    background: lightseagreen;
}
.game-table .row:nth-child(1) {
    height: 25vh;
}
.game-table .row:nth-child(2) {
    height: 50vh;
}
.game-table .row:nth-child(3) {
    height: 25vh;
}
</style>
