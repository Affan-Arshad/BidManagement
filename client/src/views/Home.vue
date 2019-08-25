<template>
  <div class="demo">
    <div class="card-scene">
      <Container
        orientation="horizontal"
        drag-handle-selector=".column-drag-handle"
        @drag-start="dragStart"
        @drop="(e) => onColumnDrop(e)"
        :drop-placeholder="upperDropPlaceholderOptions"
      >
        <Draggable v-for="column in columns" :key="column.id">
          <div class="card-container">
            <div class="card-column-header">
              <span class="column-drag-handle">&#x2630;</span>
              {{ column.name }}
            </div>
            <Container
              group-name="col"
              @drop="(e) => onCardDrop(column.id, e)"
              @drag-start="(e) => log('drag start', e)"
              @drag-end="(e) => log('drag end', e)"
              :get-child-payload="getCardPayload(column.id)"
              drag-class="card-ghost"
              drop-class="card-ghost-drop"
              :drop-placeholder="dropPlaceholderOptions"
              style="min-height: 10rem; "
            >
              <Draggable v-for="card in column.bids" :key="card.id">
                <div class="card" :style="card.props.style">
                  <p>{{ card.name }}, id: {{card.id}}, order{{card.sort_order}}</p>
                </div>
              </Draggable>
            </Container>
          </div>
        </Draggable>
      </Container>
    </div>
  </div>
</template>
<style>
* {
  text-align: left;
}
.demo {
  flex: 1;
  overflow: auto;
  min-width: 0;
  height: 100vh;
}
body {
  padding: 0;
  margin: 0;
}
</style>

<script>
import { Container, Draggable } from "vue-smooth-dnd";
import { handleDrop, applyDrag } from "../utils/helpers";
import "@/assets/demos.css";
const cardColors = [
  "azure",
  "beige",
  "bisque",
  "blanchedalmond",
  "burlywood",
  "cornsilk",
  "gainsboro",
  "ghostwhite",
  "ivory",
  "khaki"
];
const pickColor = () => {
  const rand = Math.floor(Math.random() * 10);
  return cardColors[rand];
};
export default {
  name: "Cards",
  components: { Container, Draggable },
  data() {
    return {
      columns: {
        prebid: { id: "prebid", name: "prebid" },
        ongoing: { id: "ongoing", name: "ongoing" },
        done: { id: "done", name: "done" }
      },
      bids: [
        {
          id: 1,
          name: "Stelco bid",
          columnName: "prebid",
          sort_order: 1,
          props: {
            className: "card",
            style: { backgroundColor: pickColor() }
          }
        },
        {
          id: 2,
          name: "MWSC bid",
          columnName: "prebid",
          sort_order: 2,
          props: {
            className: "card",
            style: { backgroundColor: pickColor() }
          }
        },
        {
          id: 3,
          name: "YELLOW bid",
          columnName: "done",
          sort_order: 1,
          props: {
            className: "card",
            style: { backgroundColor: pickColor() }
          }
        },
        {
          id: 4,
          name: "Blue bid",
          columnName: "done",
          sort_order: 1,
          props: {
            className: "card",
            style: { backgroundColor: pickColor() }
          }
        },
        {
          id: 5,
          name: "Green Five bid",
          columnName: "done",
          sort_order: 2,
          props: {
            className: "card",
            style: { backgroundColor: pickColor() }
          }
        }
      ],
      upperDropPlaceholderOptions: {
        className: "cards-drop-preview",
        animationDuration: "150",
        showOnTop: true
      },
      dropPlaceholderOptions: {
        className: "drop-preview",
        animationDuration: "150",
        showOnTop: true
      }
    };
  },
  mounted() {
    Object.keys(this.columns).map((key) => {
      this.columns[key].bids = this.groupedBids(key)
    })
    this.columns = Object.assign({}, this.columns)
    
  },
  computed: {
    groupedBids() {
      let key = "columnName";
      return status => {
        return this.bids
          .filter(bid => (bid ? bid[key] == status : false))
          .sort((bid1, bid2) => bid2.sort_order - bid1.sort_order);
      };
    }
  },
  methods: {
    onColumnDrop(dropResult) {
      let cols = Object.values(this.columns);
      cols = applyDrag(cols, dropResult);
      this.columns = cols.reduce((accum, col) => {
        accum[col.id] = col
        return accum
      },{});
    },
    onCardDrop(columnId, dragResult) {
      let { removedIndex, addedIndex, payload} = dragResult
      if (removedIndex !== null || addedIndex !== null) {
          this.columns[columnId].bids = applyDrag(this.columns[columnId].bids,  { removedIndex, addedIndex, payload})
          this.columns = Object.assign({}, this.columns)
      }
      if(addedIndex !== null) {
        this.$emit('update', {...dragResult})
      }
    },
    getCardPayload(columnId) {
      return index => {
        return this.columns[columnId].bids[index];
      };
    },
    dragStart() {
      console.log("drag started");
    },
    log(...params) {
      //   console.log(...params);
    }
  }
};
</script>