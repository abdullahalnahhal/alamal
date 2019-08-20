import request from '@/utils/request'

function get() {
  return request({
    url: 'fields',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `fields/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'fields/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `fields/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
