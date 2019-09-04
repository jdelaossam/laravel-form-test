<template>
    <div id="app">
        <v-app>
            <v-navigation-drawer app></v-navigation-drawer>
            <v-toolbar app></v-toolbar>
            <v-content>
                <v-container fluid>
                    <router-link tag="li" to="/">Home</router-link>
                    <router-link tag="li" to="/about">About</router-link>
                    <router-view></router-view>
                </v-container>
            </v-content>
        </v-app>
    </div>
    
</template>

<script>
export default {
    
}
</script>