// Use DBML to define your database structure
// Docs: https://dbml.dbdiagram.io/docs

Table universidades {
  id integer [primary key]
  nombre varchar 
  acronimo varchar
  logo varchar
  creado timestamp 
  ultima_actualizacion timestamp
}


Table planteles {
  id integer [primary key]
  universidad_id integer
  nombre varchar
  estado varchar
  ciudad varchar
  direccion varchar
  creado timestamp
  ultima_actualizacion timestamp
}


Table planteles_carreras{
  id integer [primary key]
  id_plantel integer
  id_carrera integer
}


Table carreras {
  id integer [primary key]
  nombre varchar
}


Table carreras_materias{
  id integer [primary key]
  carrera_id integer
  materia_id integer
}


Table materias {
  id integer [primary key]
  nombre varchar
}


Table materias_profesores{
  id integer [primary key]
  id_materia integer
  id_profesor integer
}


Table planteles_profesores{
  id integer [primary key]
  id_plantel integer
  id_profesor integer
}


Table profesores {
  id integer [primary key]
  nombre varchar
  apellido varchar
  foto varchar
}


Table evaluaciones {
  id integer [primary key]
  profesor_id integer
  fomenta_respeto int
  resolver_dudas int
  contenido_relevante int
  sabe_enseniar int
  retroalimentacion int
  recomendar_profesor int
}


Table comentarios{
  id integer [primary key]
  profesor_id integer
  autor varchar
  body varchar
}


Table emoji_reactions{
  id integer [primary key]
  profesor_id integer
  emoji_id integer
}


Table emojis{
  id integer [primary key]
  nombre varchar
}



Ref: universidades.id < planteles.universidad_id

Ref: planteles.id < planteles_carreras.id_plantel

Ref: planteles_carreras.id_carrera < carreras.id

Ref: carreras.id < carreras_materias.carrera_id

Ref: materias.id < carreras_materias.materia_id

Ref: materias.id < materias_profesores.id_materia

Ref: planteles.id < planteles_profesores.id_plantel

Ref: profesores.id < planteles_profesores.id_profesor

Ref: profesores.id < materias_profesores.id_profesor

Ref: profesores.id < evaluaciones.profesor_id

Ref: profesores.id < comentarios.profesor_id

Ref: profesores.id < emoji_reaction.profesor_id

Ref: emojis.id < emoji_reaction.emoji_id