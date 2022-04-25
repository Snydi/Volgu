export const fetchItems = ( store ) => {
  const { dispatch } = store;
  dispatch('crews/fetchItems');
};
export const fetchFiltered = (store) => {
  const { dispatch } = store;
  dispatch('crews/fetchFiltered');
};

export const selectItems = ( store ) => {
  const { getters } = store;
  return getters['crews/items']
}

export const removeItem = ( store, id ) => {
  const { dispatch } = store;
  dispatch('crews/removeItem', id);
}

export const addItem = ( store, { group, speciality } ) => {
  const { dispatch } = store;
  dispatch('crews/addItem', { group, speciality });
}

export const updateItem = ( store, { id, group, speciality }) => {
  const { dispatch } = store;
  dispatch('crews/updateItem', { id, group, speciality });
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['crews/itemsByKey'][id] || {};
}
