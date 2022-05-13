import Api from '@/api/index';

class Collectors extends Api {

  /**
   * Вернет список всех студентов
   * @returns {Promise<Response>}
   */
  collectors = () =>  this.rest('/collectors/list');

  /**
   * Вернет список всех студентов
   * @param id
   * @returns {Promise<Response>}
   */
  collectorsFiltered = ( id ) => this.rest('/collectors/list-filtered', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  })


  /**
   * Удалит студента по id
   * @param id
   * @returns {Promise<*>}
   */
  remove = ( id ) => this.rest('/collectors/delete-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  /**
   * Создаст новую запись в таблице
   * @param collector объект студента, взятый из FormStudent
   * @returns {Promise<Response>}
   */
  add = ( collector ) => this.rest('/collectors/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(collector),
  }).then(() => ({...collector, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает

  /**
   * Отправит измененную запись
   * @param collector объект студента, взятый из FormStudent
   * @returns {Promise<*>}
   */
  update = ( collector ) => this.rest('/collectors/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(collector),
  }).then(() => collector) // then - заглушка, пока метод ничего не возвращает

}

export default new Collectors();
