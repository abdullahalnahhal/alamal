import request from '@/utils/request'

export function upload() {
  return request({
    url: '/media/upload',
    method: 'post'
  })
}
export function remove(file_name) {
  return request({
    url: '/media/remove',
    method: 'delete',
    data: {
      file_name
    }
  })
}
