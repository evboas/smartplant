#include <WiFi.h>
#include <WebServer.h>
#include <Wire.h>

#define TEMPERATURA 35
#define LUZ 34
#define UMIDADE 32

WebServer server(80);
  
const char* ssid= "Nome_da_rede";                                                
const char* senha = "Senha_da_rede";

//conexão com o servidor em caso de sucesso 
void conectado() {
  server.send(200, "text/html", html(lerTemperatura(), lerUmidade(), lerLuz()));     //Envia ao servidor, em formato HTML, o nosso script, com os parâmetros de pressão e temperatura
}

//conexão com o servidor em caso de falha 
void nao_encontrado() {
  server.send(404, "text/plain", "Não encontrado");
}

String html(float temperatura, float umidade, String iluminacao){
  String cd = "<!DOCTYPE html>\n";
  cd += "<html lang=\"pt-br\">\n";
  cd += "<head>\n";
  cd += "<meta charset=\"UTF-8\">\n";
  cd += "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
  cd += "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">\n";

  cd += "<title>Dados dos sensores</title>\n";

  cd += "<style>\n";
  cd += "html { font-family: Helvetica; display: inline-block; margin: 0px auto; text-align: center;}\n";
  cd += "body{margin-top: 50px;} \n";
  cd += "h1 {color: #444444; margin: 50px auto 30px;}\n";
  cd += "p {font-size: 24px; color: #444444; margin-bottom: 10px;}\n";
  cd += "</style>\n";

  cd += "</head>\n";
  cd += "<body>\n";
  cd += "<div id=\"webpage\">\n";
  cd += "<h1>Dados dos sensores</h1>\n";
  cd += "<p>Temperatura: ";
  cd += (int)temperatura;
  cd += " °C</p>\n";
  cd += "<p>Umidade: ";
  cd += (int)umidade; 
  cd += " %</p>\n";
  cd += "<p>Luz: ";
  cd += iluminacao;
  cd += "</p>\n";
  cd += "</div>\n";
  cd += "</body>\n";  
  cd += "</html>\n";

  return cd;                                           
} 

void setup() {
  Serial.begin(115200);
  delay(100);

  Serial.print("Se conectando a: ");
  Serial.println(ssid);

  WiFi.begin(ssid, senha); //Inicia conexão com o Wi-Fi

  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.print(".");
  }

  //Dados para a conexão
  Serial.println("");
  Serial.println("Conectado");
  Serial.print("IP: ");
  Serial.println(WiFi.localIP());

  server.on("/", conectado);
  server.onNotFound(nao_encontrado);
  server.begin(); //Inicia o servidor

  Serial.println("Servidor online");

  pinMode(TEMPERATURA, INPUT);
  pinMode(LUZ, INPUT);
  pinMode(UMIDADE, INPUT);
}

void loop() { 
  server.handleClient(); //Executa as ações do servidor
  delay(20000);
}

float lerTemperatura(){
  float leituraSensorTemperatura = analogRead(TEMPERATURA);
  float temperatura = leituraSensorTemperatura * (3.3 / 4095) / .01;
  return temperatura;
}

float lerUmidade(){
  float umidade = 1-(analogRead(UMIDADE)/4095.);
  return umidade;
}

String lerLuz(){
  float luz = analogRead(LUZ);

  String iluminacao;

  if(luz < 500){
    iluminacao = "Escuro";
  } else if(luz < 1200){
    iluminacao = "Sombra";
  }
  else{
    iluminacao = "Claro";
  };

  return iluminacao;
}