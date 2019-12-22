<template>
<div>
<table class="table">
    <thead>
        <tr>
            <th scope="row">#</th>
            <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in developpers">
            <th scope="row"><a v-bind:href="'business-developpers/'+item.id" ><i class="fas fa-edit"></i></a></th>
            <td>{{item.company}} / {{item.last_name}} / {{item.first_name}}</td>
            <td>{{item.company}}</td>
            <td>{{item.adress}}</td>
            <td>{{item.phone}}</td>
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
</div>
</template>

<script>
export default {
    props: ['developpers'],
    data() {
        return {
            fields: [
                'Company / First Name / Last Name',
                'Company',
                'Adress',
                'phone',
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
}
</script>
