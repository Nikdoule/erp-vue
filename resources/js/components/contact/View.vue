<template>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col" :key="item.id" v-for="item in fields">{{ item }}</th>
      </tr>
    </thead>
    <tbody>
      <tr :key="item.id" v-for="item in contacts">
        <th scope="row">{{item.id}}</th>
        <td>{{item.first_name}} \ {{item.last_name}} \ {{item.mark}} \ {{item.company}}</td>
        <td>{{item.email}}</td>
        <td>{{item.phone}}</td>
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
  props: ["contacts"],
  data() {
    return {
      fields: [
        "Name_Mark_Dénomination",
        "Email",
        "Phone",
        "Adress",
        "Zip_Code",
        "City",
        "Naf",
        "Siret",
        "kbis",
        "Country",
        "Language",
        "money",
        "time_zone",
        "Title",
        "Last_name",
        "First_name",
        "Status"
      ]
    };
  },
};
</script>
