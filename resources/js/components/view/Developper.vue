<template>
<table>
    <thead>
        <tr>
            <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in developpers">
            <td>{{item.company}} / {{item.last_name}} / {{item.first_name}}</td>
            <td>{{item.company}}</td>
            <td>{{item.adress}}</td>
            <td>{{item.zip_code}}</td>
            <td>{{item.city}}</td>
            <td>{{item.naf}}</td>
            <td>{{item.siret}}</td>
            <td>{{item.kbis}}</td>
            <td>{{item.country}}</td>
            <td>{{item.language}}</td>
            <td>{{item.money}}</td>
            <td>{{item.time_zone}}</td>
            <td>{{item.title}}</td>
            <td>{{item.last_name}}</td>
            <td>{{item.first_name}}</td>
            <td>{{item.status}}</td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props: ['developpers'],
    data() {
        return {
            fields: [
                'Company Nom Prénom',
                'Company',
                'Adress',
                'Zip_Code',
                'City',
                'Naf',
                'Siret',
                'KBIS',
                'Country',
                'Language',
                'Money',
                'Time Zone',
                'Title',
                'Last name',
                'First name',
                'Status'
            ],
        }
    },
    methods: {
        onSubmit(evt) {
            axios.get('/api/1.0/business-developpers', {

            })
        }
    }
}
</script>
