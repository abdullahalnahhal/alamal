import request from '@/utils/request'

function get() {
  return request({
    url: 'news',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `news/${data.id}/update`,
    method: 'patch',
    data
  })
}

function add(data) {
  return request({
    url: 'news/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: `news/${id}/delete`,
    method: 'delete',
  })
}

export default {
  get,
  update,
  add,
  remove
}
