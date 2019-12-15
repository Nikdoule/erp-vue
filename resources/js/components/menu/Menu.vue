<template>
<Slide>
    <div class="d-flex flex-column pt-0">
        <li class="d-flex li-item flex-column">
            <div class="a-item d-flex li-item zindex">
                <span class="span-item"><i class="fas fa-business-time mr-2"></i>My commercial followed<i class="fas fa-business-time ml-2"></i></span>
            </div>
        </li>
    </div>
    <li class="d-flex flex-column li-item" @click="show = !show">
        <div class="a-item d-flex li-item zindex">
            <span class="span-item"><i class="fas fa-users mr-2"></i>Business Developpers
                <i class="fas fa-angle-down float-right" v-bind:class="{'rotate-enter-active': show == true }"></i>
            </span>
        </div>
    </li>
        <transition name="bounce" class="d-flex">
            <div v-if="show" class="flex-column">
                <a v-bind:href="'/create-business-developper'" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-user-tie mr-2"></i>Create a business developper</span>
                </a>
                <a href="/business-developpers" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-users mr-2"></i>View business developpers</span>
                </a>
            </div>
        </transition>
        <li class="d-flex flex-column li-item" @click="show2 = !show2">
            <div class="a-item d-flex li-item zindex">
                <span class="span-item"><i class="fas fa-users mr-2"></i>Contacts
                    <i class="fas fa-angle-down float-right" v-bind:class="{'rotate-enter-active': show2 == true }"></i>
                </span>
            </div>
       </li>
       <transition name="bounce" class="d-flex">
            <div class="li-item flex-column" v-if="show2">
                <a href="/create-contact" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-user-tie mr-2"></i>Create a contact</span>
                </a>
                <a href="/contacts" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-users mr-2"></i>View contacts</span>
                </a>
            </div>
        </transition>
        <li class="d-flex li-item flex-column" @click="show3 = !show3">
            <div class="a-item d-flex li-item zindex">
                <span class="span-item"><i class="fas fa-hand-holding-usd mr-2"></i>Deals
                    <i class="fas fa-angle-down float-right" v-bind:class="{'rotate-enter-active': show3 == true }"></i>
                </span>
            </div>
        </li>
        <transition name="bounce" class="d-flex">
            <div class="li-item flex-column" v-if="show3">
                <a href="/create-deal" class=" d-flex li-item a-sitem">
                    <div class="a-sitem d-flex li-item">
                        <span class="span-item"><i class="fas fa-search-dollar mr-2"></i>Create a deal</span>
                    </div>
                </a>
                <a href="/deals" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-search-dollar mr-2"></i>View deals</span>
                </a>
            </div>
        </transition>
        <li class="d-flex li-item flex-column" @click="show4 = !show4">
            <div class="a-item d-flex li-item zindex">
                <span class="span-item"><i class="fas fa-cogs text-white mr-2 mt-auto mb-auto"></i>Parameters
                    <i class="fas fa-angle-down float-right" v-bind:class="{'rotate-enter-active': show4 == true }"></i>
                </span>
            </div>
        </li>
        <transition name="bounce" class="d-flex">
            <div class="li-item flex-column" v-if="show4">
                <a href="/parameters" class=" d-flex li-item a-sitem">
                    <div class="a-sitem d-flex li-item">
                        <span class="span-item"><i class="fas fa-cogs text-white mr-2"></i> View parameters</span>
                    </div>
                </a>
                <a href="/create-action-parameter" class="d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-hammer mr-2 text-white"></i>Create a action parameter</span>
                </a>
                <a href="/create-contact-parameter" class="d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-users mr-2"></i>Create a contact parameter</span>
                </a>
                <a href="/create-todo-parameter" class="d-flex li-item a-sitem">
                    <span class="span-item"><i class="far fa-list-alt mr-2"></i>Create a todo parameter</span>
                </a>
            </div>
        </transition>
        <li class="d-flex li-item flex-column" @click="show5 = !show5">
            <div class="a-item d-flex li-item zindex">
                <span class="span-item"><i class="fas fa-chart-bar mr-2 mt-auto mb-auto"></i>Monitoring
                    <i class="fas fa-angle-down float-right" v-bind:class="{'rotate-enter-active': show5 == true }"></i>
                </span>
            </div>
        </li>
        <transition name="bounce" class="d-flex">
            <div class="li-item" v-if="show5">
                <a href="/" class=" d-flex li-item a-sitem">
                    <span class="span-item"><i class="fas fa-chart-bar mr-2 mt-auto mb-auto"></i>View monitoring</span>
                </a>
            </div>
        </transition>
</Slide>
</template>

<script>
import {
    Slide
} from 'vue-burger-menu'

export default {
    components: {
        Slide
    },
    data: function () {
        return {
            show: false,
            show2: false,
            show3: false,
            show4: false,
            show5: false,
            anime: ''
        }

    }
}
</script>
<style lang="css" scoped>
    .zindex{
        z-index: 1000;
    }
    .bounce-enter-active {
        animation: bounce-in .3s;
    }
    .bounce-leave-active {
        animation: bounce-in .3s reverse;
    }
    @keyframes bounce-in {
        0%{
            transform: translateY(-25%);
        }
        100%{
            transform: translateY(0%);
        }
    }
    .rotate-enter-active{
        animation: rotate-in .3s both;    
    }
    .rotate-leave-active{
        animation: rotate-in .3s reverse;    
    }
    @keyframes rotate-in {
        0%
        {
            transform: rotate(0deg);
        }
        100%
        {
            transform: rotate(180deg);
        }
    }
    

</style>