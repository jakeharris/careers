function Sponsors(res) {
  if(!res.data) throw new TypeError('Sponsors require an HTTP JSON response object.')
  
  var compileSponsorsList = function (sponsors) {
    var list = []
    for(var s in sponsors) {
      // if it doesn't have a company, or the company field is blank, or if this is the example, skip it
      if(!sponsors[s].hasOwnProperty('company') || sponsors[s].company === '' || typeof sponsors[s].__example !== 'undefined')  
        continue
      else list.push(sponsors[s])
    }
    list.sort(function(a, b){
      if(a.company.toLowerCase() < b.company.toLowerCase()) return -1
      if(a.company.toLowerCase() > b.company.toLowerCase()) return 1
      return 0
    })
    return list
  }
  
  this.list = compileSponsorsList(res.data)
}