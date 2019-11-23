<template>
<div>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show" class="p-5">
        <b-form-group id="lastName" label="Your Last Name:" label-for="lasName">
            <b-form-input id="lastName" v-model="form.last_name" required placeholder="Enter last name"></b-form-input>
        </b-form-group>
        <b-form-group id="firstName" label="Your First Name:" label-for="firstName">
            <b-form-input id="firstName" v-model="form.first_name" required placeholder="Enter first name"></b-form-input>
        </b-form-group>
        <b-form-group id="title" label="Your Title:" label-for="title">
            <b-form-input id="title" v-model="form.title" required placeholder="Enter title"></b-form-input>
        </b-form-group>
        <b-form-group id="email" label="Email address:" label-for="email" description="We'll never share your email with anyone else.">
            <b-form-input id="email" v-model="form.email" type="email" required placeholder="Enter email"></b-form-input>
        </b-form-group>
        <b-form-group id="phone" label="Your phone:" label-for="phone">
            <b-form-input id="phone" v-model="form.phone" required placeholder="Enter phone"></b-form-input>
        </b-form-group>
        <b-form-group id="company" label="Your Company Name:" label-for="company">
            <b-form-input id="company" v-model="form.company" required placeholder="Enter company name"></b-form-input>
        </b-form-group>
        <b-form-group id="mark" label="Your mark Name:" label-for="mark">
            <b-form-input id="mark" v-model="form.mark" required placeholder="Enter mark name"></b-form-input>
        </b-form-group>
        <b-form-group id="siret" label="Your Siret number:" label-for="siret">
            <b-form-input id="siret" v-model="form.siret" required placeholder="Enter siret number"></b-form-input>
        </b-form-group>
        <b-form-group id="kbis" label="Your KBIS number:" label-for="kbis">
            <b-form-input id="kbis" v-model="form.kbis" required placeholder="Enter KBIS number"></b-form-input>
        </b-form-group>
        <b-form-group id="adress" label="Your Adress:" label-for="adress">
            <b-form-input id="adress" v-model="form.adress" required placeholder="Enter adress"></b-form-input>
        </b-form-group>
        <b-form-group id="zip_code" label="Your Zip Code:" label-for="zip_code">
            <b-form-input id="zip_code" v-model="form.zip_code" required placeholder="Enter zip code"></b-form-input>
        </b-form-group>
        <b-form-group id="timeZone" label="Your Time Zone:" label-for="timeZone">
            <b-form-input id="timeZone" v-model="form.time_zone" required placeholder="Enter time zone"></b-form-input>
        </b-form-group>
        <b-form-group id="money" label="Your Money:" label-for="money">
            <b-form-input id="money" v-model="form.money" required placeholder="Enter money"></b-form-input>
        </b-form-group>
        <b-form-group id="city" label="Your City:" label-for="city">
            <b-form-input id="city" v-model="form.city" required placeholder="Enter city"></b-form-input>
        </b-form-group>
        <b-form-group id="country" label="Your Country:" label-for="country">
            <b-form-input id="country" v-model="form.country" required placeholder="Enter country"></b-form-input>
        </b-form-group>
        <b-form-group id="language" label="Your Language:" label-for="language">
            <b-form-input id="language" v-model="form.language" required placeholder="Enter language"></b-form-input>
        </b-form-group>
        <b-form-group id="naf" label="Your NAF:" label-for="naf">
            <b-form-input id="naf" v-model="form.naf" required placeholder="Enter NAF"></b-form-input>
        </b-form-group>
        <b-form-group id="status" label="Your Status:" label-for="status">
            <b-form-input id="status" v-model="form.status" required placeholder="Enter status"></b-form-input>
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
                last_name: '',
                first_name: '',
                naf: '',
                company: '',
                siret: '',
                kbis: '',
                country: '',
                adress: '',
                zip_code: '',
                city: '',
                language: '',
                title: '',
                mark: '',
                status: '',
                money: '',
                time_zone: '',
            },
            show: true,

            selected: [], // Must be an array reference!
        }
    },
    methods: {
        onSubmit(evt){
                evt.preventDefault()
                alert(JSON.stringify(this.form))
                axios.post('/api/1.0/business-developpers/1/contacts',{
                    language : this.form.language,
                    phone : this.form.phone,
                    last_name : this.form.last_name,
                    first_name : this.form.first_name,
                    title : this.form.title,
                    naf : this.form.naf,
                    company : this.form.company,
                    siret : this.form.siret,
                    kbis : this.form.kbis,
                    country : this.form.country,
                    adress : this.form.adress,
                    zip_code : this.form.zip_code,
                    city : this.form.city,
                    email : this.form.email,
                    mark : this.form.mark,
                    status : this.form.status,
                    money : this.form.money,
                    time_zone : this.form.time_zone,

                })
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
            // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    }
}
</script>