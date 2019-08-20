import request from '@/utils/request'

function get() {
  return request({
    url: 'about/get/words',
    method: 'get'
  })
}

function update(data) {
  return request({
    url: `about/add-word`,
    method: 'post',
    data
  })
}





export default {
  get,
  update
}
