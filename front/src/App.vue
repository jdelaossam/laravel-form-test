<template lang="html">
  <div id="app">
    <NavBar/>
    <b-table striped hover :items="items" :fields="fields">
      <template slot="[actions]" slot-scope="row">
          <b-button size="sm" title="Edit" @click.stop="targetEdit(row.item)" variant="primary" class="mr-1">
            Editar
          </b-button>
          <b-button size="sm" title="Edit" @click.stop="targetRemove(row.item)" variant="warning" class="mr-1">
            Eliminar
          </b-button>
      </template>
    </b-table>
    <router-view/>
  </div>
</template>

<script>
import NavBar from './components/Menu'
/* eslint-disable */
export default {
  name: 'app',
  components: {
    NavBar
  },
  data () {
    return {
      items: [
          { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
          { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
          { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
          { age: 38, first_name: 'Jami', last_name: 'Carney' }
        ],
      fields: [
        { key: 'age', label: 'Edad' },
        { key: 'first_name', label: 'Nombre' },
        { key: 'last_name', label: 'Apellidos' },
        { key: 'actions', label: 'Actions' }
      ]
    }
  },
  methods: {
    targetEdit (row) {
      // eslint-disable-next-line
      console.log(row)
    },
    targetRemove (row) {
      this.$bvModal.msgBoxConfirm('Please confirm that you want to delete everything.', {
          title: 'Please Confirm',
          size: 'sm',
          buttonSize: 'sm',
          okVariant: 'danger',
          okTitle: 'YES',
          cancelTitle: 'NO',
          footerClass: 'p-2',
          hideHeaderClose: false,
          centered: true
        })
          .then(value => {
            console.log(value)
          })
          .catch(err => {
            // An error occurred
          })
    }
  },
}
</script>
