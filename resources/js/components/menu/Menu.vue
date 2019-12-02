<template>
<Slide>
    <div class="d-flex flex-column pt-0">
        <li class="d-flex li-item">
            <span class="span-item"><i class="fas fa-business-time ml-auto mt-auto mb-auto"></i>My commercial followed</span>
        </li>
    </div>
    <div @mouseover="businessDevelopperShow" @mouseleave="businessDevelopperHidden" class="d-flex flex-column">
        <a id="developper" href="/business-developper" class="d-flex a-item">
            <span class="span-item"><i class="fas fa-user-tie ml-auto mt-auto mb-auto"></i>Business Developper</span>
        </a>
        <a href="/create-business-developper" class="a-item d-none" v-bind:class="[countA == true ? 'd-flex' : countA == false]">
            <span class="span-item"><i class="fas fa-users ml-auto mt-auto mb-auto"></i>Create a business developper</span>
        </a>
    </div>
    <div @mouseover="contactShow" @mouseleave="contactHidden" class="d-flex flex-column">
        <a id="developper" href="/contacts" class="d-flex a-item">
            <span class="span-item"><i class="fas fa-user-tie ml-auto mt-auto mb-auto"></i>Contacts</span>
        </a>
        <a href="/create-contact" class="a-item d-none" v-bind:class="[countC == true ? 'd-flex' : countC == false]">
            <span class="span-item"><i class="fas fa-users ml-auto mt-auto mb-auto"></i>Create a contact</span>
        </a>
    </div>
    <div @mouseover="caseShow" @mouseleave="caseHidden" class="d-flex flex-column">
        <a id="developper" href="/deals" class="d-flex a-item">
            <span class="span-item"><i class="fas fa-user-tie ml-auto mt-auto mb-auto"></i>Deals</span>
        </a>
        <a href="/create-deal" class="a-item d-none" v-bind:class="[countB == true ? 'd-flex' : countB == false]">
            <span class="span-item"><i class="fas fa-users ml-auto mt-auto mb-auto"></i>Create a deal</span>
        </a>
    </div>
    <div @mouseover="parameterShow" @mouseleave="parameterHidden" class="d-flex flex-column">
        <a id="developper" href="/parameters" class="d-flex a-item">
            <span class="span-item"><i class="fas fa-user-tie ml-auto mt-auto mb-auto"></i>Parameters</span>
        </a>
        <a href="/create-action-parameter" class="a-item d-none" v-bind:class="[countD == true ? 'd-flex' : countD == false]">
            <span class="span-item"><i class="fas fa-users ml-auto mt-auto mb-auto"></i>Create a action parameter</span>
        </a>
        <a href="/create-contact-parameter" class="a-item d-none" v-bind:class="[countD == true ? 'd-flex' : countD == false]">
            <span class="span-item"><i class="fas fa-users ml-auto mt-auto mb-auto"></i>Create a contact parameter</span>
        </a>
    </div>
    <div class="d-flex flex-column">
        <a href="/monitoring-graphical" class="d-flex a-item">
            <span class="span-item"><i class="fas fa-chart-line ml-auto mt-auto mb-auto"></i>Monitory Graphical</span>
        </a>
    </div>
    
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
            countA: false,
            countB: false,
            countC: false,
            countD: false,
        }

    },
    methods: {
        businessDevelopperShow: function () {

            this.countA = true

        },
        businessDevelopperHidden: function () {

            this.countA = false
        },
        caseShow: function () {

            this.countB = true

        },
        parameterShow: function () {

            this.countD = true

        },
        caseHidden: function () {

            this.countB = false
        },
        contactShow: function () {

            this.countC = true

        },
        contactHidden: function () {

            this.countC = false
        },
        parameterHidden: function () {

            this.countD = false
        }
    }

}
</script>
