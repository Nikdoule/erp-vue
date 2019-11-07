<template>
<Slide>
    <a id="home" href="/" class="d-flex a-item">
        <i class="fas fa-business-time m-auto"></i>
        <span class="span-item">Mon suivi commercial</span>
    </a>
    <a id="home" href="/create-entity" class="d-flex a-item">
        <i class="fas fa-users m-auto"></i>
        <span class="span-item">Créér une entité</span>
    </a>
    <a id="home" href="/business-developper" class="d-flex a-item">
        <i class="fas fa-user-tie m-auto"></i>
        <span class="span-item">Business développeur</span>
    </a>
</Slide>
</template>

<script>
import {
    Slide
} from 'vue-burger-menu'

export default {
    components: {
        Slide
    }
}
</script>

<style lang="css">
.fas {
    color: white;
}

.bm-item-list {
    margin: 0 !important;

}

.a-item {
    width: 300px;
    height: 100px;
}

.a-item:hover {
    background-color: rgb(49, 96, 158);
}

.span-item {
    margin: auto;
    width: 200px;
}

.bm-burger-button {
    position: fixed;
    width: 36px;
    height: 30px;
    left: 36px;
    top: 15px;
    cursor: pointer;
}

.bm-burger-bars {
    background-color: #1e47ff;
}

.line-style {
    position: absolute;
    height: 20%;
    left: 0;
    right: 0;
}

.cross-style {
    position: absolute;
    top: 12px;
    right: 2px;
    cursor: pointer;
}

.bm-cross {
    background: #bdc3c7;
}

.bm-cross-button {
    height: 24px;
    width: 24px;
}

.bm-menu {
    height: 100%;
    /* 100% Full-height */
    width: 0;
    /* 0 width - change this with JavaScript */
    position: fixed;
    /* Stay in place */
    z-index: 1000;
    /* Stay on top */
    top: 0;
    left: 0;
    background-color: rgb(21, 45, 77);
    /* Black*/
    overflow-x: hidden;
    /* Disable horizontal scroll */
    padding-top: 60px;
    /* Place content 60px from the top */
    transition: 0.5s;
    /*0.5 second transition effect to slide in the sidenav*/
}

.bm-overlay {
    background: rgba(0, 0, 0, 0.3);
}

.bm-item-list {
    color: #b8b7ad;
    margin-left: 10%;
    font-size: 20px;
}

.bm-item-list>* {
    display: flex;
    text-decoration: none;
    padding: 0.7em;
}

.bm-item-list>*>span {
    margin-left: 10px;
    font-weight: 700;
    color: white;
}
</style>
