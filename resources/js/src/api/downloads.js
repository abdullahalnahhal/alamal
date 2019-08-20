import request from '@/utils/request'

function get() {
  return request({
    url: 'downloads',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `downloads/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'downloads/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `downloads/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
