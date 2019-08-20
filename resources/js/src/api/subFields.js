import request from '@/utils/request'

function get() {
  return request({
    url: 'sub-fields',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `sub-fields/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'sub-fields/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `sub-fields/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
