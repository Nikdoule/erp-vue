<template>
<div>
    <b-form @submit.prevent="onSubmit" @reset="onReset" class="p-5">
        <div class="d-flex justify-content-around">
            <b-form-group id="lastName" label="Last Name" label-for="lastName">
                <b-form-input class="input-medium" id="lastName" v-model="form.last_name" required placeholder="Enter last name"></b-form-input>
            </b-form-group>
            <b-form-group id="firstName" label="First Name" label-for="firstName">
                <b-form-input class="input-medium" id="firstName" v-model="form.first_name" required placeholder="Enter first name"></b-form-input>
            </b-form-group>
            <b-form-group id="title" label="Tilte" label-for="title">
                <b-form-input class="input-medium" id="title" v-model="form.title" required placeholder="Enter title"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="adress" label="Street" label-for="adress">
                <b-form-input class="input-medium" id="adress" v-model="form.adress" required placeholder="Enter adress"></b-form-input>
            </b-form-group>
            <b-form-group id="city" label="City" label-for="city">
                <b-form-input class="input-medium" id="city" v-model="form.city" required placeholder="Enter city"></b-form-input>
            </b-form-group>
            <b-form-group id="zipCode" label="Your Zip Code:" label-for="zipCode">
                <b-form-input class="input-medium" id="zipCode" v-model="form.zip_code" required placeholder="Enter zip code"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="country" label="Your Country:" label-for="country">
                <b-form-input class="input-medium" id="country" v-model="form.country" required placeholder="Enter country"></b-form-input>
            </b-form-group>
            <b-form-group id="timeZone" label="Your Time Zone:" label-for="timeZone">
                <b-form-input class="input-medium" id="timeZone" v-model="form.time_zone" required placeholder="Enter time zone"></b-form-input>
            </b-form-group>
            <b-form-group id="money" label="Your Money:" label-for="money">
                <b-form-input class="input-medium" id="money" v-model="form.money" required placeholder="Enter money"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="email" label=" Your Address Email:" label-for="email">
                <b-form-input class="input-medium" id="email" v-model="form.email" type="email" required placeholder="Enter email"></b-form-input>
            </b-form-group>
            <b-form-group id="phone" label="Your Phone:" label-for="phone">
                <b-form-input class="input-medium" id="phone" v-model="form.phone" required placeholder="Enter phone"></b-form-input>
            </b-form-group>
            <b-form-group id="company" label="Company Name:" label-for="company">
                <b-form-input class="input-medium" id="company" v-model="form.company" required placeholder="Enter company name"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="mark" label="Your Mark:" label-for="mark">
                <b-form-input class="input-medium" id="mark" v-model="form.mark" required placeholder="Enter mark"></b-form-input>
            </b-form-group>
            <b-form-group id="siret" label="Your Siret:" label-for="siret">
                <b-form-input class="input-medium" id="siret" v-model="form.siret" required placeholder="Enter siret"></b-form-input>
            </b-form-group>
            <b-form-group id="kbis" label="Your Kbis:" label-for="kbis">
                <b-form-input class="input-medium" id="kbis" v-model="form.kbis" required placeholder="Enter kbis"></b-form-input>
            </b-form-group>
        </div>
        <div class="d-flex justify-content-around">
            <b-form-group id="naf" label="Your Naf:" label-for="naf">
                <b-form-input class="input-medium" id="naf" v-model="form.naf" required placeholder="Enter naf"></b-form-input>
            </b-form-group>
            <b-form-group id="language" label="Your Language:" label-for="language">
                <b-form-input class="input-medium" id="language" v-model="form.language" required placeholder="Enter language"></b-form-input>
            </b-form-group>
            <b-form-group id="status" label="Your Status:" label-for="status">
                <b-form-input class="input-medium" id="status" v-model="form.status" required placeholder="Enter status"></b-form-input>
            </b-form-group>
        </div>
        <div class="ml-5">
            <b-button type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
        </div>
    </b-form>
</div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                last_name: '',
                first_name: '',
                adress: '',
                zip_code: '',
                city: '',
                time_zone: '',
                naf: '',
                mark: '',
                company: '',
                siret: '',
                kbis: '',
                country: '',
                language: '',
                money: '',
                title: '',
                phone: '',
                status: '',
                email: ''
                
            }
        }
    },
    methods: {
        onSubmit(evt){
                evt.preventDefault()
                axios.post('/api/1.0/business-developpers',this.form)
                .then(({data}) => {
                    location.href = '/business-developpers';
                })
        },
        onReset(evt) {
            evt.preventDefault()
            // Reset our form values
            this.form.last_name = ''
            this.form.first_name = ''
            this.form.adress = ''
            this.form.zip_code = ''
            this.form.city = ''
            this.form.time_zone = ''
            this.form.naf = ''
            this.form.mark = ''
            this.form.company = ''
            this.form.siret = ''
            this.form.kbis = ''
            this.form.country = ''
            this.form.language = ''
            this.form.money = ''
            this.form.title = ''
            this.form.phone = ''
            this.form.status = ''
            this.form.email = ''
        
        }
    },
}
</script>
