<template>
  <div class="d-flex flex-row align-items-center">
    <b-dropdown
      size="sm"
      :variant="bidStatusColor(status)"
      toggle-class="text-decoration-none"
      no-caret
    >
      <template v-slot:button-content>
        <span>{{ status }}</span>
        <span class="sr-only">Edit status</span>
      </template>

      <b-dropdown-item
        href="#"
        v-for="(color, status) in statuses"
        :key="status"
        @click="changeStatus(bidId, status)"
      >{{ status }}</b-dropdown-item>
    </b-dropdown>
  </div>
</template>
 
<script>
import axios from "axios";
import moment from "moment";

export default {
  props: ["statuses", "bidId", "status"],

  data() {
    return {
    };
  },

  mounted() {
  },

  methods: {

    bidStatusColor: function(status_id) {
      return this.statuses[status_id];
    },

    changeStatus: function(bidId, selectedStatus) {
      axios
        .post("http://localhost:8000/api/bids/" + bidId, {
          status_id: selectedStatus
        })
        .then(response => {
          this.getOngoingBids();
        })
        .catch(error => {
          console.log(error);
        });
    },
  },
};
</script>


<style scoped>
</style>