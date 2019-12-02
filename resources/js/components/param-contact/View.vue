<template>
<table class="table">
    <thead>
        <tr>
            <th class="topTilte" scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in param_contacts">
            <td>{{item.title}}</td>
            <td>{{item.description}}</td>
        </tr>
    </tbody>
</table>
</template>

<script>
export default {
    props: ['param_contacts'],
    data() {
        return {
            fields: [
                "Provenance du contact",
                "Déscription",
            ],
        }
    },
}
</script>
