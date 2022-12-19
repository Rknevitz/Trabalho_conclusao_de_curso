// Etapa 1: inicializa a comunicação com a plataforma
// Em seu código, substitua o valor da variável apikey pela api key gerada no site
var platform = new H.service.Platform({
  apikey: 'CuaBoqOvJnGNCOLY-ZseOSnlqUQuVSiVPlp5UGEoPko'
});
var defaultLayers = platform.createDefaultLayers();

//Etapa 2: Inicializa o mapa no IFSul - câmpus gravatai
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map, {
  center: { lat: -29.929, lng: -51.0404 },
  zoom: 15,
  pixelRatio: window.devicePixelRatio || 1
});
// adicione um ouvinte de redimensionamento para garantir que o mapa ocupe todo o container
window.addEventListener('resize', () => map.getViewPort().resize());

// Etapa 3: torna o mapa interativo
// MapEvents ativa o sistema de eventos
// Behavior implementa interações padrão para panorâmica / zoom (também em ambientes de toque móvel)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Etapa 4: Crie a IU padrão:
var ui = H.ui.UI.createDefault(map, defaultLayers, 'pt-BR');


// Função usada para adicionar os marcadores no mapa
function addMarkersToMap(map, latitude, longitude) {
  var marker = new H.map.Marker({ lat: latitude, lng: longitude });
  map.addObject(marker);
}

// função usada para responder a cliques no mapa
// quando for clicado em um endereço será perguntado se deseja confirmar
// caso seja selecionada ok, será coletada as coordenadas
// e será criado um marcador onde foi clicado no mapa
function setUpClickListener(map) {
  // Anexa um ouvinte de evento à exibição do mapa
  // quando for clicado no mapa vai entrar nessa função
  map.addEventListener('tap', function (ev) {
    var resultado = confirm("Confirma o endereço clicado?");
    if (resultado) {
      // caso tenha algum marker ele apaga para ficar somente o ultimo clicado
      map.removeObjects(map.getObjects())
      // busca as coordenadas de onde foi clicado
      var coord = map.screenToGeo(ev.currentPointer.viewportX, ev.currentPointer.viewportY);
      addMarkersToMap(map, coord.lat, coord.lng); // cria o marcador no mapa

      document.getElementById('lat').value = coord.lat;
      document.getElementById('lng').value = coord.lng;
    }
  });
}
// dispara a função para ficar respondendo aos cliques do mouse no mapa
setUpClickListener(map);

// criação va variavel usada no ajax
var objAjax = null;
function criaObjetoAjax() {
  if (window.XMLHttpRequest) {
    try {
      objeto = new XMLHttpRequest();
    } catch (e) {
      objeto = false;
    }
  } else if (window.ActiveXObject) {
    try {
      objeto = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        objeto = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        objeto = false;
      }
    }
  }
  return objeto;
}

// função que irá ler os dados preenchidos no formulário 
// vai enviar os dados para serem inseridos no banco de dados
function cadastra() {
  objAjax = criaObjetoAjax();
  var url = "adiciona-marker.php";
  var nome = document.getElementById("nome").value;
  var lat = document.getElementById("lat").value;
  var lng = document.getElementById("lng").value;
  objAjax.open("POST", url, true);

  objAjax.setRequestHeader('Content-Type', 'application/json');
  objAjax.send(JSON.stringify({ 'nome': nome, 'lat': lat, 'lng': lng }));
  objAjax.onreadystatechange = confirmaCadastro;
}

// função que vai verificar o retorno do php via ajax
// vai imprimir a mensagem corresponde na tela
function confirmaCadastro() {
  if (objAjax.readyState == 4) {
    if (objAjax.status == 200) {
      var response = objAjax.responseText;
      var pos = response.search("Erro");
      if (pos == -1)
        document.getElementById('mural').innerHTML = "<p class='bg-success  text-white'>" + response + "</p>";
      else
        document.getElementById('mural').innerHTML = "<p class='bg-danger text-white'>" + response + "</p>";
    } else {
      document.getElementById('mural').innerHTML = "<p class='bg-danger text-white'>" + objAjax.statusText; + "</p>";
    }
  }
}
