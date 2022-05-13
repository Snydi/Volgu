import Api from '@/api/index';

class Crews extends Api {

  /**
   * Вернет список всех групп
   * @returns {Promise<Response>}
   */

  crews = () => this.rest('/crews/list');
  /**
   * Удалит группу по id
   * @param id
   * @returns {Promise<*>}
   */
 // collectorsFiltered = (id) => this.rest('/collectors/list-filtered',{
 //   method: 'POST',
 //   'Content-Type': 'application/json',
 //   body: JSON.stringify({ id }),
 // }).then(() => id) // then - заглушка, пока метод ничего не возвращает
  remove = ( id ) => this.rest('/crews/delete-item',  {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  /**
   * Создаст новую запись в таблице
   * @param crew объект группы, взятый из CrewForm
   * @returns {Promise<Response>}
   */
  add = ( crew ) => this.rest('/crews/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(crew),
  }).then(() => ({...crew, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает

  /**
   * Отправит измененную запись
   * @param crew объект группы, взятый из FormGroup
   * @returns {Promise<*>}
   */
  update = ( crew ) => this.rest('/crews/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(crew),
  }).then(() => crew) // then - заглушка, пока метод ничего не возвращает

}

export default new Crews();