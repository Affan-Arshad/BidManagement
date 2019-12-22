<template>
  <div class="col-12 mb-5">
    <div class="card">
      <div class="card-header" data-toggle="collapse" data-target="#Ongoing-collapse">
        <h5 class="mb-0">
          Ongoing Bids
          <span
            v-if="ongoingBids != null"
            class="badge badge-primary float-right"
          >{{ ongoingBids.length }}</span>
        </h5>
      </div>
      <div class="card-body show" id="Ongoing-collapse" data-parent="#dashboard-cards">
        <ul class="list-group">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Signed</th>
                <th>Duration</th>
                <th>Due</th>
                <!-- <th>Extended</th> -->
                <th>Remaining</th>
                <th>LD</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(bid, index) in ongoingBids" v-bind:key="index">
                <td><a :href="'/bids/'+bid.id">{{ bid.name }}</a></td>
                <td>
                  <div class="d-flex flex-row align-items-center">
                    <b-dropdown
                      size="sm"
                      :variant="bidStatusColor(bid.status_id)"
                      toggle-class="text-decoration-none"
                      no-caret
                    >
                      <template v-slot:button-content>
                        <span>{{ bid.status_id }}</span>
                        <span class="sr-only">Edit status</span>
                      </template>

                      <b-dropdown-item
                        href="#"
                        v-for="(color, status) in statuses"
                        :key="status"
                        @click="changeStatus(bid.id, status)"
                      >{{ status }}</b-dropdown-item>
                    </b-dropdown>
                  </div>
                </td>
                <td>{{ bid.agreement_date | date }}</td>
                <td>{{ bid.duration }}</td>
                <td>{{ dueDate(bid) | date }}</td>
                <!-- <td>{{ bid.extended_date | date}}</td> -->
                <td>{{ remainingDays(bid) }}</td>
                <td>{{ LD(bid) }}</td>
              </tr>
            </tbody>
          </table>
        </ul>
      </div>
    </div>
  </div>
</template>
 
<script>
import axios from "axios";
import moment from "moment";

export default {
  props: ["statuses"],

  data() {
    return {
      ongoingBids: null
    };
  },

  mounted() {
    this.getOngoingBids();
  },

  methods: {
    getOngoingBids: function() {
      axios.get("http://localhost:8000/api/ongoingBids").then(response => {
        this.ongoingBids = response.data;
      });
    },

    bidStatusColor: function(status_id) {
      return this.statuses[status_id];
    },

    changeStatus: function(bidId, selectedStatus) {
      axios
        .post("http://localhost:8000/api/bids/" + bidId, {
          status_id: selectedStatus
        })
        .then(() => {
          this.getOngoingBids();
        })
        .catch(error => {
          console.log(error);
        });
    },

    dueDate: function(bid) {
      if (bid.agreement_date) {
        return bid.extended_date
          ? bid.extended_date
          : moment(bid.agreement_date).add(bid.duration, "days");
      } else {
        return "Agreement Signed date missing.";
      }
    },

    remainingDays: function(bid) {
      return moment(this.dueDate(bid)).diff(moment(), "days");
    },

    LD: function(bid) {
      if (this.remainingDays(bid) < 0) {
        return bid.cost * 0.005 * this.remainingDays(bid);
      }
    }
  },

  filters: {
    date: function(value) {
      if (!value) return "";
      return moment(value).format("ddd_Do MMM/YYYY");
    }
  }
};
</script>


<style scoped>
</style>