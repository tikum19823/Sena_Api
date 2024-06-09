const bcrypt = require('bcrypt');  //llama a la funciòn para encriptar contraseña.

function login(req, res) { 
  if(req.session.loggedin != true) {

    res.render('login/index');

  } else {
    res.redirect('/');
  }
  
}

function auth(req, res){ // Funciòn autenticar, consulta db. para ver si existe el email.
  const data = req.body;

  req.getConnection((err, conn) => {
    conn.query('SELECT * FROM users WHERE email = ?', [data.email],(err, userdata) => {

      if(userdata.length > 0) {

     userdata.forEach(element => { // verifica si el password es igual al que se almacena en la db.
        bcrypt.compare(data.password, element.password, (err, isMatch) => {
          
            if(!isMatch) {
              res.render('login/index', { error: 'Error: Password incorrecto !'});
            } else {

              req.session.loggedin = true;
              req.session.name = element.name;

              res.redirect('/');
            }
            
           });
         });
       
      } else {
        res.render('login/index', { error: 'Error: Usuario No existe !'});
    }
  });
});
}

function register(req, res) {
  if(req.session.loggedin != true) {

    res.render('login/register');

  } else {
    res.redirect('/');
  }
}
//Funcion controler Usuario
function storeUser(req, res) {
  const data = req.body;
 //realiza consulta en la db, para ver si el usuario ya existe.
  req.getConnection((err, conn) => {
    conn.query('SELECT * FROM users WHERE email = ?', [data.email], (err, userdata) => {
      if(userdata.length > 0) {
        res.render('login/register', { error: 'Error: Usuario ya existe !'});
      } else {

        bcrypt.hash(data.password, 12).then(hash => { //bcrypy, se utiliza para encriptar la constrseña.
          data.password = hash; // envia passwor encriptado
      
          req.getConnection((err, conn) => { //Realiza consulta en db, tabla user.
            conn.query('INSERT INTO users SET ?', [data], (err, rows) => {

              req.session.loggedin = true;
              req.session.name = data.name;

              res.redirect('/'); //direcciona a la ruta raiz.
            });
         });
      });

      }
    });
  });
    
  }

  function logout(req, res) { // salida de la apliciòn
    if(req.session.loggedin == true) {

      req.session.destroy();

    }
    res.redirect('/login'); // redirige a la pagina inicio
  }

module.exports = {
  login,
  register,
  storeUser,
  auth,
  logout,
}
