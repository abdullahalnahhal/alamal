import request from '@/utils/request'

function get() {
  return request({
    url: 'about/get/sections',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `about/${data.id}/update-section`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'about/add-section',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `about/${id}/delete-section`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
