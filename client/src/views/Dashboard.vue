<template>
  <div class="container py-5">
    <h3>Dashboard</h3>
    <hr />

    <div class="row" id="dashboard-cards" v-if="statuses">
        <OngoingBids :statuses="statuses" ></OngoingBids>
        <BidsByStatus :statuses="statuses" ></BidsByStatus>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import OngoingBids from '@/components/OngoingBids.vue'
import BidsByStatus from '@/components/BidsByStatus.vue'

export default {
  name: "Dashboard",

  components: {OngoingBids, BidsByStatus},

  data() {
    return {
      statuses: null,
    };
  },

  mounted() {
    this.getStatuses();
  },

  methods: {
    getStatuses: function() {
      axios.get("http://localhost:8000/api/statuses").then(response => {
        this.statuses = response.data;
      });
    },
  }
};
</script>