<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show" class="p-5">
        <b-form-group id="input-group-1" label="Your Last Name:" label-for="input-1">
            <b-form-input id="input-1" v-model="form.last_name" required placeholder="Enter last name" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-2" label="Your First Name:" label-for="input-2">
            <b-form-input id="input-2" v-model="form.first_name" required placeholder="Enter first name" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-3" label="Your Title:" label-for="input-3">
            <b-form-input id="input-3" v-model="form.title" required placeholder="Enter title" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-4" label="Your Statut:" label-for="input-4">
            <b-form-input id="input-4" v-model="form.status" required placeholder="Enter statut" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="Email address:" label-for="input-5" description="We'll never share your email with anyone else.">
            <b-form-input id="input-5" v-model="form.email" type="email" required placeholder="Enter email" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-7" label="Your Company Name:" label-for="input-7">
            <b-form-input id="input-7" v-model="form.company" required placeholder="Enter company name" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-8" label="Your Siret number:" label-for="input-8">
            <b-form-input id="input-8" v-model="form.siret" required placeholder="Enter siret number" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-9" label="Your KBIS number:" label-for="input-9">
            <b-form-input id="input-9" v-model="form.kbis" required placeholder="Enter KBIS number" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-10" label="Your Adress:" label-for="input-10">
            <b-form-input id="input-10" v-model="form.adress" required placeholder="Enter adress" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-11" label="Your Zip Code:" label-for="input-11">
            <b-form-input id="input-11" v-model="form.zip" required placeholder="Enter zip code" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-12" label="Your City:" label-for="input-12">
            <b-form-input id="input-12" v-model="form.city" required placeholder="Enter city" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-13" label="Your Country:" label-for="input-13">
            <b-form-input id="input-13" v-model="form.country" required placeholder="Enter country" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        
        <b-form-group id="input-group-14" label="Your Language:" label-for="input-14">
            <b-form-input id="input-14" v-model="form.language" required placeholder="Enter language" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-15" label="Your Money:" label-for="input-15">
            <b-form-input id="input-15" v-model="form.money" required placeholder="Enter money" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-16" label="Your Time Zone:" label-for="input-16">
            <b-form-input id="input-16" v-model="form.timeZone" required placeholder="Enter time zone" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-17" label="Your NAF:" label-for="input-17">
            <b-form-input id="input-17" v-model="form.naf" required placeholder="Enter NAF" type="hidden" name="_token" :value="csrf"></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Submit</b-button>
        <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
    
</div>
</template>

<script>
export default {
    data() {
        return {
            csrf: "",
            form: {
                email: '',
                last_name: '',
                first_name: '',
                naf: '',
                company: '',
                siret: '',
                kbis: '',
                country: '',
                adress: '',
                zip: '',
                city: '',
                language: '',
                money: '',
                timeZone: '',
                title: '',
                statut: ''
            },
            show: true,

            selected: [], // Must be an array reference!
            options: [{
                    text: 'Prospect',
                    value: 'Prospect'
                },
                {
                    text: 'Client',
                    value: 'Client'
                },
                {
                    text: 'Commercial',
                    value: 'Commercial',
                    //disabled: true
                }
            ]
        }
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.email = ''
            this.form.last_name = ''
            this.form.first_name = ''
            this.form.naf = ''
            this.form.statut = ''
            this.form.title = ''
            this.form.kbis = ''
            this.form.mark = ''
            this.form.company = ''
            this.form.siret = ''
            this.form.adress = ''
            this.form.zip = ''
            this.form.city = ''
            this.form.language = ''
            this.form.money = ''
            this.form.timeZone = ''
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    },
    mounted() {
        this.csrf = window.laravel.csrfToken        
    }
}
</script>