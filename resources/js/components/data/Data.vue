<template>
  <div>
    <div class="mb-2">
      <b-form-checkbox v-model="stickyHeader" inline>Sticky header</b-form-checkbox>
      <b-form-checkbox v-model="noCollapse" inline>No border collapse</b-form-checkbox>
    </div>
    <b-table
      :sticky-header="stickyHeader"
      :no-border-collapse="noCollapse"
      responsive
      :items="items"
      :fields="fields"
    >
      <!-- We are using utility class `text-nowrap` to help illustrate horizontal scrolling -->
      <template v-slot:head(id)="scope">
        <div class="text-nowrap">Mois de </div>
      </template>
      <template v-slot:head()="scope">
        <div class="text-nowrap">{{ scope.label }}
        </div>
      </template>
    </b-table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        stickyHeader: true,
        noCollapse: false,
        fields: [
          { key: 'id', stickyColumn: true, isRowHeader: true, variant: 'primary' },
          'Janvier',
          'Fevrier',
          { key: 'Mars', stickyColumn: true, variant: 'info' },
          'Avril',
          'Mai',
          'Juin',
          'Juillet',
          'Aout',
          'Septembre',
          'Octobre',
          'Novembre',
          'Decembre'
        ],
        items: [
          { id: 1, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 2, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 3, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 4, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 5, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 6, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 7, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 8, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 9, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 },
          { id: 10, Janvier: 0, Fevrier: 1, Mars: 2, Avril: 3, Mai: 4, Juin: 5, Juillet: 6, Aout: 7, Septembre: 8, Octobre: 9, Novembre: 10, Decembre: 11 }
        ]
      }
    }
  }
</script>