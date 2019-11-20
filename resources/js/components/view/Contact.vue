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
        <th scope="row">{{count++}}</th>
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
        <td>euro</td>
        <td>gmt1</td>
        <td>{{item.title}}</td>
        <td>{{item.last_name}}</td>
        <td>{{item.first_name}}</td>
        <td>Clients</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  props: ["contacts"],
  data() {
    return {
      count: 0,
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
      ],
      items: [],
      selectMode: "multi"
    };
  },
  methods: {
    onSubmit(evt) {
      axios.get("/api/1.0/contacts");
    }
  }
};
</script>
