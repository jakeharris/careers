module.exports.getFirstName = function (name) {
  var fullName = (name? name : this.name)
  
  fullName = fullName.split(' ')
  
  return (fullName[0] === 'Dr.'? 
          fullName[0].concat(' ', fullName[1])
          : fullName[0])
}
module.exports.getLastName = function (name) {
  var fullName = (name? name : this.name)
  fullName = fullName.split(' ')
  
  return fullName[fullName.length - 1]
}
module.exports.getImageName = function (name) {
  var fullName = (name? name : this.name)
  fullName = fullName.split(' ')
  
  var firstName = 
      (fullName[0] === 'Dr.'? 
          fullName[0].concat(' ', fullName[1])
          : fullName[0])
      .toLowerCase()
  
  return firstName
}