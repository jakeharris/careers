function Hours (res) {
  if(!res.data) throw new TypeError('Hours objects require an HTTP JSON response object.')
  
  if(res.data.holiday) this.holiday = res.data.holiday
  this.office = res.data.types.office
  this.walkIn = res.data.types.walkIn
}