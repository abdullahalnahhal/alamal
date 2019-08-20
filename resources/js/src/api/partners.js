import request from '@/utils/request'

function get() {
  return request({
    url: 'partners',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `partners/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'partners/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `partners/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
