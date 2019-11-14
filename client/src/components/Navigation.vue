<template>
  <b-navbar toggleable="lg" type="light" variant="light">
    <div class="container">
      <b-navbar-brand href="#">BS | Hikaa</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-navbar-nav>
            <b-nav-item href="/dashboard">Dashboard</b-nav-item>
            <b-nav-item :href="url+'/bids'">Bids</b-nav-item>
            <b-nav-item :href="url+'/organizations'">Organizations</b-nav-item>
            <b-nav-item :href="url+'/bidders'">Bidders</b-nav-item>
            <b-nav-item-dropdown right>
              <!-- Using 'button-content' slot -->
              <template v-slot:button-content>
                Admin
              </template>
              <b-dropdown-item href="#">Log Out</b-dropdown-item>
            </b-nav-item-dropdown>
          </b-navbar-nav>
        </b-navbar-nav>
      </b-collapse>
    </div>
  </b-navbar>
</template>

<script>
export default {
  name: "Navigation",
  data(){
      return {
          url: process.env.VUE_APP_URL
      }
  }
};
</script>

