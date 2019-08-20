import request from '@/utils/request'

function get() {
  return request({
    url: 'slider',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `slider/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'slider/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `slider/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
