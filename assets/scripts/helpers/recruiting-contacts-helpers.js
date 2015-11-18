module.exports.getFirstName = function (name) {
  var fullName = (name? name : this.name)
  
  return fullName.split(' ')[0]
}
module.exports.getLastName = function (name) {
  var fullName = (name? name : this.name)
  fullName = fullName.split(' ')
  
  return fullName[fullName.length - 1]
}
module.exports.getImageName = function (name) {
  var fullName = (name? name : this.name)
  var firstName = fullName.split(' ')[0].toLowerCase()
  
  return firstName
}