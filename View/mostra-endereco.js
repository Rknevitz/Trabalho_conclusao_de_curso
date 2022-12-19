// Etapa 1: inicializa a comunicação com a plataforma
// Em seu código, substitua o valor da variável apikey pela api key gerada no site
var platform = new H.service.Platform({
  apikey: 'CuaBoqOvJnGNCOLY-ZseOSnlqUQuVSiVPlp5UGEoPko'
});
var defaultLayers = platform.createDefaultLayers();


//Etapa 2: Inicializa o mapa no Brasil, com pouco zoom
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map, {
  center: { lat: -10, lng: -55 },
  zoom: 4,
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

// Função que vai ler os parametros do formulário e chamar a função geocode
function busca_endereco() {
  var numero = document.getElementById("numero").value;
  var rua = document.getElementById("rua").value;
  var estado = document.getElementById("estado").value;
  var cidade = document.getElementById("cidade").value;
  var pais = document.getElementById("pais").value;
  var service = platform.getSearchService();

  // Chame o método de geocodificação com os parâmetros que foram digitados no form
  // Dando certo o processo de buscar as coordenadas do endereço 
  // é setado no mapa a localização que foi digitada, usando as coordenadas
  service.geocode({
      qq: 'houseNumber='+numero+';street='+rua+'stateCode='+estado+';city='+cidade+';country='+pais
  }, (result) => {
      // seta a localização do endereço digitado, usando as coordenadas 
      result.items.forEach((item) => {
          map.setCenter(item.position);
          map.setZoom(15);
          //addMarkersToMap(map, item.position.lat, item.position.lng ); // cria o marcador no mapa
      });
  }, alert);
  busca_marker();
}

function addMarkerToGroup(group, coordinate, html) {
var marker = new H.map.Marker(coordinate);
// add custom data to the marker
marker.setData(html);
group.addObject(marker);
}

function addInfoBubble(map, dado) {
var group = new H.map.Group();

map.addObject(group);

// cria um evento para atender ao clique no marcador, mostrando as informações
group.addEventListener('tap', function (evt) {
  // event target is the marker itself, group is a parent event target
  // for all objects that it contains
  var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
    // read custom data
    content: evt.target.getData()
  });
  // adiciona as informações para o marcador
  ui.addBubble(bubble);
}, false);

var dados = dado.split(",") // quebra a string das coordenadas em um vetor
// laço utilizado para ler os dados de cada marcador a cada iteração
// As informções de cada marcadores estão em 5 campos, por isso incrementa de 5 em 5
// o primeiro valor de cada marcador é o id, ele não é lido aqui no laço
for (var i = 0; i < dados.length; i=i+3) {
  addMarkerToGroup(group, {lat:dados[i+1], lng:dados[i+2]},   
    '<div> ' + dados[i] +'</div>' );
  }
}


function remove_marker(){
//var group = new H.map.Group();
map.removeObjects(map.getObjects ())
}

// criação va variavel usada no ajax
var objAjax = null;
function criaObjetoAjax() {
if(window.XMLHttpRequest) {
  try {
    objeto = new XMLHttpRequest();
  } catch(e) {
    objeto = false;
  }
} else if(window.ActiveXObject) {
    try {
      objeto = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
      try {
        objeto = new ActiveXObject("Microsoft.XMLHTTP");
      } catch(e) {
        objeto = false;
      }
    }
}
return objeto;
}
// função que quando chegar os dados do php, vai chamar a função para marcar o mapa
function confirmaBusca(){
if(objAjax.readyState == 4){
  if(objAjax.status == 200) {
    // String
    var dado = objAjax.responseText;          // Split on commas
    alert(dado);
    addInfoBubble(map, dado); // chama a função que vai inserer as marcações no mapa
  } 
}
}
// função que dispara a busca pelas coordenadas das marcações no mapa
function busca_marker() {
  objAjax = criaObjetoAjax();
  var residuoUsu = document.getElementById("residuoUsu").value;
  url = "busca-maker.php";
  objAjax.open("POST",url,true);
  objAjax.setRequestHeader('Content-Type','application/json');
  objAjax.send(JSON.stringify({'residuo': residuoUsu}));
  objAjax.onreadystatechange=confirmaBusca;
}


