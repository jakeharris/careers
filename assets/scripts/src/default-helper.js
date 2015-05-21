module.exports.register = function (Handlebars, options)  { 
  Handlebars.registerHelper('default', function (custom, def)  { 
    return  custom || def;
  });
};