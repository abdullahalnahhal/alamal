import request from '@/utils/request'

function get() {
  return request({
    url: 'products',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `products/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'products/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `products/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
