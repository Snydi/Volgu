export const fetchItems = ( store ) => {
  const { dispatch } = store;
  dispatch('crews/fetchItems');
};
export const selectItems = ( store ) => {
  const { getters } = store;
  return getters['crews/items']
}

export const removeItem = ( store, id ) => {
  const { dispatch } = store;
  dispatch('crews/removeItem', id);
}

export const addItem = ( store, {id,crew} ) => {
  const { dispatch } = store;
  dispatch('crews/addItem', { id,crew });
}

export const updateItem = ( store, { id, crew}) => {
  const { dispatch } = store;
  dispatch('crews/updateItem', { id, crew});
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['crews/itemsByKey'][id] || {};
}
