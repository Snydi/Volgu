<template>
  <div :class="$style.root">
    <table v-if="items.length" :class="$style.table">
      <thead :class="$style.head">
        <tr :class="$style.row">
          <th v-for="{ value, text } in headers" :key="value">
            {{ text }}
          </th>
      </tr>
      </thead>
      <tbody :class="$style.body">
        <tr v-for="(item, idx) in items" :key="idx">
          <td v-for="(key, idx) in colKeys" :key="idx">
            <slot :name="key" v-bind="{ item }">
              {{ item[key] }}
            </slot>
          </td>
          <td> </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import {useStore} from "vuex";
import {onBeforeMount} from "vue";
import {fetchItems} from "@/store/collectors/selectors";

export default {

  name: 'Table',
  props: {
    items: Array,
    headers: Array,
  },
  computed: {
    colKeys() {
      return this.headers.map(({ value }) => value);
    }
  },
  setup() {
    const store = useStore();
    onBeforeMount(() => {
      fetchItems(store);
    });
  },


}

</script>

<style module lang="scss">
.root {

  .table {
    width: 100%;
    border-collapse: collapse;
    th, td {
      padding: 10px;
      text-align: center;
    }

    th {
      border-bottom: 1px solid black;
    }
  }
  .head {
  }
}

</style>
