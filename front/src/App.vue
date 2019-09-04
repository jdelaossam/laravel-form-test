<template lang="html">
  <div id="app">
    <NavBar/>
    <router-view/>
  </div>
</template>

<script>
import NavBar from './components/Menu'

export default {
  name: 'app',
  components: {
    NavBar
  }
}
</script>
