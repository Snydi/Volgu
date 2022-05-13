import api from './api';

export default {
  namespaced: true,
  state: {
    items: [],
  },
  getters: {
    items: state => state.items,
    itemsByKey: state => state.items.reduce((res, cur) => {
      res[cur['id']] = cur;
      return res;
    }, {}),
  },
  mutations: {
    setItems: (state, items) => {
      state.items = items;
    },
    setItem: (state, item) => {
      state.items.push(item);
    },
    removeItem: (state, idRemove) => {
      state.items = state.items.filter(({ id }) => id !== idRemove)
    },
    updateItem: (state, updateItem) => {
      const index = state.items.findIndex(item => +item.id === +updateItem.id);
      state.items[index] = updateItem;
    }
  },
  actions: {
    fetchItems: async ({ commit }) => {
      const response = await api.collectors();
      const items = await response.json();
      commit('setItems', items)
    },
    fetchFiltered: async ({ commit }) => {
      const response = await api.collectorsFiltered();
      const items = await response.json();
      commit('setItems', items);

    },
    removeItem: async ({ commit }, id) => {
      const idRemovedItem = await api.remove( id );
      commit('removeItem', idRemovedItem);

    },
    addItem: async ({ commit }, { name, img_path,birth_date, characteristic, id_crew }) => {
      const item = await api.add({ name, img_path,birth_date, characteristic, id_crew })
      commit('setItem', item)
    },
    updateItem: async ({ commit }, { id, name, img_path,birth_date, characteristic, id_crew }) => {
      const item = await api.update({ id,img_path, name, birth_date, characteristic, id_crew });
      commit('updateItem', item);
    }
  },
}
