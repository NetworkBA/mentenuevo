<template>
  <div>
    <div class="row justify-content-center">Entrevista Inicial Conductual</div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div v-show="mostrar == 1">
          <div class="row">
            <div class="form-group col-md-2">
              <label for="name">Nombre del Entrevistador:</label>
            </div>
            <div class="form-group col-md-7">
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-1">
              <label for="ap">Fecha</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" id="na" />
            </div>
          </div>
          <div class="row"><strong>Datos Personales</strong></div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Apellidos:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="ap">Nombre:</label>
              <input class="form-control" id="na" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-3">
              <label for="name">Edad:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-3">
              <label for="name">Estudios:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-3">
              <label for="name">Profesión:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-3">
              <label for="name">Situación laboral:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Estado Civil:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Con quién vive:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Dónde Trabaja/Estudia:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Fecha de Nacimiento:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">Lugar:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Dirección:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Tel:</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">E-mail:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Existe algún problema si recibe alguna llamada telefónica
                nuestra?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">Rasgos físicos distintivos</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <strong
              >Descripción de la demanda y el problema: Descripción e
              Historia</strong
            >
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Descríbame, lo más detalladamente posible, el motivo de su
                consulta:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Descríbame lo mejor posible qué le pasa (¿Qué hace, qué siente,
                qué piensa sobre el problema que le ha traído aquí?)</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Podría especificar la última vez que le ocurrió ese problema?
                ¿Qué, cuándo, dónde y cómo le ocurrió?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >En general, ¿con qué frecuencia le ocurre ese problema?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cuál es su duración?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Con qué intensidad ocurre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >En una escala de 1 a 5 (en que 1 sería nada o muy poco y 5
                muchísimo), ¿en qué medida considera que estas manifestaciones
                le afectan en su vida cotidiana?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Ocurre, especialmente, en alguna/s situación/es?; por favor,
                descríbala/s</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cuándo empezaron esas manifestaciones?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 2">
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Podría describirme qué, cuándo, cómo y dónde le ocurrieron la
                primera vez que aparecieron?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿En qué circunstancias? (aclare aspectos de la situación,
                personas presentes, antecedentes y consecuentes)</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Desde entonces, ¿cree que esas manifestaciones se han
                agravado?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Ha buscado ayuda anteriormente para resolver este
                problema?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Si es así, por favor, dígame qué profesionales, qué
                tratamientos (en su caso), con qué resultados y en qué fechas
                ocurrieron:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Finalmente, ¿a qué cree que se debe su problema?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row"><strong>Otros potenciales problemas</strong></div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Aparte del problema que me cuenta, ¿presenta alguna otra
                situación problemática o manifestación que le parezca anormal o
                que le produzca sufrimiento?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Ha tenido en otras ocasiones, a lo largo de su vida, otros
                problemas psicológicos/mentales/conductuales distintos de estos
                por los que consulta? Si es así, descríbamelos y dígame en qué
                momento y situación de su vida aparecieron:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Ha sido usted ingresado/a alguna vez por un trastorno
                psicológico?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Vamos a tratar de precisar si pudieran existir algunos otros
                problemas además de los que usted me ha descrito ya. Le voy a
                leer distintas posibilidades y usted me va a decir si le ocurren
                en el presente:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label for="name">DROGAS</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-4">
              <label for="name">PENSAR QUITARSE LA VIDA</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-4">
              <label for="name">INSOMNIO </label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 3">
          <div class="row">
            Es también frecuente que a la gente le pasen cosas por dentro, se
            diga a sí misma cosas o sienta determinadas respuestas fisiológicas
            de forma más o menos automática.
          </div>
          <div class="row">
            Voy a leer algunas frases; dígame si le ocurren y, en caso
            afirmativo, con qué nivel de frecuencia (de nunca = 0 a muchísimo =
            4) y en que situación2:
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>Respuestas Internas (Psicofisiológicas)</th>
                  <th>Frecuencia 1-4</th>
                  <th>Situación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>- Sudo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me late el corazón fuertemente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me siento enrojecer</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Siento tensión muscular</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- No paro de moverme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Tengo un nudo en el estómago</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Respiro agitadamente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Tiemblo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Cualquier otra:</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>Respuestas Internas (Pensamientos)</th>
                  <th>Frecuencia 1-4</th>
                  <th>Situación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>- La vida no merece la pena</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me encuentro solo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- A nadie le importo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me gustaría morirme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Soy un desastre</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- No voy a poder controlarme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- A la gente no le gusto</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me voy a desmayar</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Cualquier otra:</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div v-show="mostrar == 4">
          <div class="row">
            <div class="form-group col-md-12">
              <strong>Condiciones familiares actuales</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">Me ha dicho usted que vive con:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Quisiera saber más de su situación familiar actual</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Está casado/a (o vive con una pareja estable)?; dígame la edad
                y ocupación de su pareja:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo se lleva con su pareja?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Si tiene hijos, dígame sus nombres y edades:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Qué tal se lleva con sus hijos?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Si está divorciado/a o separado/a, ¿cuál fue la razón para la
                ruptura?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué otras personas viven con usted y cómo se lleva con
                ellas?:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Tiene alguna otra relación importante (aparte de los
                amigos/as) que no viva con usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <strong>En el caso de vivir con la familia de referencia</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Si vive con su/s padre/s, dígame qué años tiene/n y a qué se
                dedica/n:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo se lleva con sus padres?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >Si tienes hermano/as, dígame qué edad tienen, a qué se dedican
                y si viven con usted:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo se lleva con sus hermano/as?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué otras personas viven con usted y cómo se lleva con
                ellas?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Tiene alguna otra relación importante (aparte de los
                amigos/as) que no viva con usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 5">
          <div class="row">
            <div class="form-group col-md-12">
              <strong
                >Repercusión del problema por el que consulta en la
                familia</strong
              >
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿El problema por el que consulta qué repercusiones tiene en sus
                relaciones familiares actuales?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué hacen los miembros de su familia cuando aparece?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Qué piensan del problema?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Por qué piensan y dicen que le ocurre el problema?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <strong>Historia familiar</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              Me gustaría saber más de su historia familiar:
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <strong>Madre</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">¿Vive su madre? </label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">(En su caso) ¿De qué murió? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">¿A qué edad?</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">(En su caso) ¿Qué edad tenía usted? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Edad actual: </label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">Ocupación:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              ¿Cómo podría describir las relaciones con su madre a lo largo de
              la vida? Valore tales relaciones (de 1 = malas a 4 = muy buenas):
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th></th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>VALORACIÓN</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo describiría a su madre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué actitudes tenía su madre hacia usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Podría decirme qué hacía su madre para conseguir algo de usted
                (premios y castigos)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué actividades hacía usted con su madre cuando era
                niño/a?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-12">
              <strong>Padre</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">¿Vive su padre? </label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">(En su caso) ¿De qué murió? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">¿A qué edad?</label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">(En su caso) ¿Qué edad tenía usted? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Edad actual: </label>
              <input class="form-control" id="name" />
            </div>
            <div class="form-group col-md-6">
              <label for="name">Ocupación:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              ¿Cómo podría describir las relaciones con su madre a lo largo de
              la vida? Valore tales relaciones (de 1 = malas a 4 = muy buenas):
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th></th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>VALORACIÓN</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo describiría a su padre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué actitudes tenía su padre hacia usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Podría decirme qué hacía su padre para conseguir algo de usted
                (premios y castigos)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué actividades hacía usted con su padre cuando era niño/a?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">¿Cómo se llevaban su madre y su padre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 6">
          <div class="row">
            <div class="form-group col-md-12">
              <strong
                >Repercusión del problema por el que consulta en la familia
              </strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              Quisiera saber cómo se ha llevado con su/s hermano/a/s a lo largo
              de su infancia y adolescencia
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>ORDEN</th>
                  <th>SEXO/EDAD</th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Tenían preferencia su padre o madre por usted o por alguno de
                sus hermanos/as? (Sí)(No)</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name">Si así es, ¿por quién y por qué?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Cuáles fueron los valores más importantes en su familia? (la
                religión, el trabajo, la igualdad, la solidaridad, etc.):</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Tuvo algunos problemas durante su infancia y/o
                adolescencia?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>PROBLEMA</th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    -Rendimiento escolar <br />
                    -Problemas de conducta <br />
                    -Ansiedad depresión <br />
                    -Drogas/alcohol <br />
                    -Problemas médicos
                  </td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Otros</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <strong>Historia laboral</strong>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              (Si procede y dependiendo de la edad del sujeto.) Descríbame los
              trabajos que usted ha ido teniendo y las fechas en los que
              ocurrieron. Por favor, indíqueme qué aspectos de cada trabajo eran
              los más satisfactorios para usted (tipo de trabajo) y qué aspectos
              le producían más agrado o desagrado y cómo se llevaba con sus
              compañeros/as de trabajo y con sus jefes/as:
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>TRABAJOS</th>
                  <th>ORGANIZACIÓN</th>
                  <th>FECHAS</th>
                  <th>LO QUE MAS ME GUSTABA</th>
                  <th>LO QUE MENOS ME GUSTABA</th>
                  <th>RELACIONES COMPAÑEROS (0-4)</th>
                  <th>RELACIONES JEFAS/ES (0-4)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Actualmente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Actualmente qué trabajo (en su caso) lleva a cabo?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Cuántas horas trabaja a la semana (en promedio)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué cursos o seminarios ha realizado para incrementar sus
                habilidades ocupacionales?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="name"
                >¿Qué expectativas tiene relativas al trabajo?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div class="row">
          <button
            type="button"
            class="btn btn-primary mx-auto btn-lg"
            style="background-color: #76cee6"
            v-on:click="Adelante"
          >
            Enviar
          </button>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <strong>Padre</strong>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="name"></label>
            <input class="form-control" id="name" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      mostrar: 6,
    };
  },
  methods: {
    Adelante: function () {
      // `this` dentro de los métodos apunta a la instancia de Vue
      this.mostrar += 1;
    },
  },
};
</script>
