<template>
  <div class="col-12 mb-5">
    <div id="accordion" class="card">
      <div class="card-header">
        <h5 class="mb-0">Bids by Status</h5>
      </div>
      <div class="card-body show" id="status-collapse">
        <ul class="list-group">
          <span v-for="(bidGrp, status) in bids" v-bind:key="status">
            <li
              class="list-group-item d-flex justify-content-between align-items-center"
              data-toggle="collapse"
              :data-target="'#'+status.replace('/', '-')+'collapse'"
            >
              {{ status.toUpperCase().replace( '_', ' ') }}
              <span
                class="badge badge-primary badge-pill"
              >{{ bidGrp.length }}</span>
            </li>
            <div
              :id="status.replace('/', '-')+'collapse'"
              class="collapse"
              data-parent="#accordion"
            >
              <table class="table table-bordered">
                <tbody>
                  <tr v-for="(bid, index) in bidGrp" v-bind:key="index">
                    <td class="link">
                      <a class="btn text-left" :href="'/bids/'+bid.id">{{ bid.name }}</a>
                    </td>
                    <td>
                      <StatusSelector :bid="bid" :status="status" :statuses="statuses"></StatusSelector>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </span>
        </ul>
      </div>
    </div>
  </div>
</template>
 
<script>
import axios from "axios";
import moment from "moment";
import StatusSelector from "@/components/StatusSelector.vue";

export default {
  props: ["statuses"],
  components: { StatusSelector },

  data() {
    return {
      bids: null
    };
  },

  mounted() {
    this.getBids();
  },

  methods: {
    getBids: function() {
      axios.get("http://localhost:8000/api/bidsByStatus").then(response => {
        this.bids = response.data;
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
          this.getBids();
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
      return moment(value).format("ddd_Do_MMM_YYYY");
    }
  }
};
</script>


<style scoped>
</style>