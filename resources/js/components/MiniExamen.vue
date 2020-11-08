<template>
  <div>
    <div class="container" style="background-color: #f7f7f8">
      <div class="row justify-content-center">Mini Examen Mental</div>
      <div class="row">
        <div class="col-md-3">
          <label for="name">Nombre:</label>
        </div>
        <div class="col-md-9">
          <input
            class="form-control"
            id="name"
            v-model="Tnombre"
            name="nombre"
            required
            autofocus
            autocomplete="name"
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-md-3">
          <label for="name">Edad:</label>
        </div>
        <div class="col-md-9">
          <input
            class="form-control"
            id="name"
            v-model="Tnombre"
            name="nombre"
            required
            autofocus
            autocomplete="name"
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-md-3">
          <label for="name">Evaluador:</label>
        </div>
        <div class="col-md-9">
          <input
            class="form-control"
            id="name"
            v-model="Tnombre"
            name="nombre"
            required
            autofocus
            autocomplete="name"
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-md-3">
          <label for="name">Fecha:</label>
        </div>
        <div class="col-md-9">
          <input
            class="form-control"
            id="name"
            v-model="Tnombre"
            name="nombre"
            required
            autofocus
            autocomplete="name"
          />
        </div>
      </div>
      <br />
      <div class="row">
        <div class="col-md-3">
          <label for="con">Función</label>
        </div>
        <div class="col-md-3">
          <label for="con">Situación Actual</label>
        </div>
        <div class="col-md-3">
          <label for="con">Función</label>
        </div>
        <div class="col-md-3">
          <label for="con">Situación Actual</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label for="con">Estado de Conciencia</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Alerta ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Somnolencia ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Estupor ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1">Coma ____</label>
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Orientación en esferas de:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Persona ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Espacio ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Tiempo ____</label
            >
          </div>
        </div>
      </div>
      <hr class="my-3" />
      <div class="row">
        <div class="col-md-3">
          <label for="con">Atención/ Concentración</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Adeacuada para la edad ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Dispersa ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Atención Selectiva ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Atención Sostenida ____</label
            >
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Preservación de la Memoria:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Inmediata (1 min) ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Reciente (15 min) ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Remota (histórica) ____</label
            >
          </div>
        </div>
      </div>
      <hr class="my-3" />
      <div class="row">
        <div class="col-md-3">
          <label for="con">Lenguaje verbal </label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Coherente (con ilación) ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Congruente (de acuerdo a la realidad) ____</label
            >
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Forma y curso del habla:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Normal o fluido ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Mutismo selectivo ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Bradilalia (lentitud) ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Verborreico (rápido) ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Coprolálico ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Ecolálico ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Monosílabo ____</label
            >
          </div>
        </div>
      </div>
      <!---*******************************************************-->
      <div class="row">
        <div class="col-md-3">
          <label for="con">Función</label>
        </div>
        <div class="col-md-3">
          <label for="con">Situación Actual</label>
        </div>
        <div class="col-md-3">
          <label for="con">Función</label>
        </div>
        <div class="col-md-3">
          <label for="con">Situación Actual</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label for="con">Volúmen del habla </label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Normal ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Aumentado ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Disminuido ____</label
            >
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Tipo de pensamiento:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Abstracto ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Funcional ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Cooncreto ____</label
            >
          </div>
        </div>
      </div>
      <hr class="my-3" />
      <div class="row">
        <div class="col-md-3">
          <label for="con">Contenido del pensamiento (Ideas)</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Suicida ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Homicida ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Culpa ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Obsesivo ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Delirante ____</label
            >
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Rieso de auto-agresión:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Ninguno ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Cutting ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Ideas suicidas ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Planeación suicida ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Intento suicida ____</label
            >
          </div>
        </div>
      </div>
      <hr class="my-3" />
      <div class="row">
        <div class="col-md-3">
          <label for="con">Curso del pensamiento </label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Coherente (con ilación) ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Congruente (de acuerdo a la realidad) ____</label
            >
          </div>
        </div>
        <div class="col-md-3">
          <label for="con">Forma y curso del habla:</label>
        </div>
        <div class="col-md-3">
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Normal o fluido ____
            </label>
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Mutismo selectivo ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Bradilalia (lentitud) ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Verborreico (rápido) ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Coprolálico ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Ecolálico ____</label
            >
          </div>
          <div class="row">
            <input
              required
              class="form-check-input"
              type="radio"
              name="id_tipo"
              id="inlineRadio1"
              value="1"
              v-model="picked"
            />
            <label class="form-check-label" for="inlineRadio1"
              >Monosílabo ____</label
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container" style="background-color: #f7f7f8">
          <div class="row">
            <a
              type="submit"
              class="btn btn-primary mx-auto btn-lg"
              style="background-color: #76cee6"
              v-on:click="GuardarContacto"
            >
              Guardar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
