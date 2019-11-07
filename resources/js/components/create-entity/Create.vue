<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
        <b-form-group label="Inline switch style checkboxes">
            <b-form-checkbox-group v-model="selected" :options="options" switches></b-form-checkbox-group>
        </b-form-group>
        <b-form-group id="input-group-1" label="Your Name:" label-for="input-1">
            <b-form-input id="input-1" v-model="form.name" required placeholder="Enter name"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-2" label="Email address:" label-for="input-2" description="We'll never share your email with anyone else.">
            <b-form-input id="input-2" v-model="form.email" type="email" required placeholder="Enter email"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-3" label="Your Mark:" label-for="input-3">
            <b-form-input id="input-3" v-model="form.mark" required placeholder="Enter mark"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-4" label="Your Company Name:" label-for="input-4">
            <b-form-input id="input-4" v-model="form.company" required placeholder="Enter company name"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-5" label="Your Siret number:" label-for="input-5">
            <b-form-input id="input-5" v-model="form.siret" required placeholder="Enter siret number"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-6" label="Your Adress:" label-for="input-6">
            <b-form-input id="input-6" v-model="form.adress" required placeholder="Enter adress"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-7" label="Your Zip Code:" label-for="input-7">
            <b-form-input id="input-7" v-model="form.zip" required placeholder="Enter zip code"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-8" label="Your City:" label-for="input-8">
            <b-form-input id="input-8" v-model="form.city" required placeholder="Enter city"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-9" label="Your Country:" label-for="input-9">
            <b-form-input id="input-9" v-model="form.country" required placeholder="Enter country"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-10" label="Your Language:" label-for="input-10">
            <b-form-input id="input-10" v-model="form.language" required placeholder="Enter language"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-11" label="Your Money:" label-for="input-11">
            <b-form-input id="input-11" v-model="form.money" required placeholder="Enter money"></b-form-input>
        </b-form-group>
        <b-form-group id="input-group-12" label="Your Time Zone:" label-for="input-12">
            <b-form-input id="input-12" v-model="form.timeZone" required placeholder="Enter time zone"></b-form-input>
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
            form: {
                email: '',
                name: '',
                mark: '',
                company: '',
                siret: '',
                adress: '',
                zip: '',
                city: '',
                language: '',
                money: '',
                timeZone: ''
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
            this.form.name = ''
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
    }
}
</script>
