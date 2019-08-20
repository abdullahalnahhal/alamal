import request from '@/utils/request'

function get() {
  return request({
    url: 'achievements',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: 'achievements',
    method: 'patch',
    params: {
      id: data.id
    },
    data
  })
}

function add(data) {
  return request({
    url: 'achievements/add',
    method: 'post',
    data
  })
}

function remove(id) {
  return request({
    url: 'achievements/add',
    method: 'delete',
    params: {
      id
    }
  })
}

export default {
  get,
  update,
  add,
  remove
}
