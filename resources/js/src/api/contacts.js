import request from '@/utils/request'

export function get() {
  return request({
    url: 'contacts',
    method: 'get'
  })
}
export function update(data) {
  return request({
    url: 'contacts',
    method: 'patch',
    data
  })
}
