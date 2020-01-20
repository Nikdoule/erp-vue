<template>
<table class="table-param">
    <thead>
        <tr>
            <th class="top-title" scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
        </tr>
    </thead>
    <tbody>
        <tr :key="item.id" v-for="item in param_contacts">
            <td class="height-param">{{item.title}}</td>
            <td class="height-param">{{item.description}}</td>
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
                "Contact Origin",
                "Description",
            ],
        }
    },
}
</script>
